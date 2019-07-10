<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\Computador\IndexComputador;
use App\Http\Requests\Admin\Computador\StoreComputador;
use App\Http\Requests\Admin\Computador\UpdateComputador;
use App\Http\Requests\Admin\Computador\DestroyComputador;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\Computador;

class ComputadorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexComputador $request
     * @return Response|array
     */
    public function index(IndexComputador $request)
    {
        // create and AdminListing instance for a specific model and
        // $data = AdminListing::create(Computador::class)->processRequestAndGet(
        //     // pass the request with params
        //     $request,

        //     // set columns to query
        //     ['IdComp', 'IdModelo', 'IdAnalista', 'SerialComp', 'HostnameComp', 'StatusComp', 'ObservacaoComp', 'LacreComp', 'DataCadastroComp'],

        //     // set columns to searchIn
        //     ['SerialComp', 'HostnameComp', 'StatusComp', 'ObservacaoComp', 'LacreComp']
        // );

        if(!isset($_COOKIE["per_page"])){
            setcookie("per_page", 12);
            $_COOKIE["per_page"] = 12;
        }

        $data = Computador::orderBy('computador.HostnameComp', 'asc')
                ->join('admin_users', 'admin_users.id', '=', 'computador.IdAnalista')
                ->join('modelo', 'modelo.IdModelo',  '=', 'computador.IdModelo')
                ->paginate($_COOKIE["per_page"]);

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.computador.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.computador.create');

        return view('admin.computador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreComputador $request
     * @return Response|array
     */
    public function store(StoreComputador $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Computador
        $computador = Computador::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/computadors'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/computadors');
    }

    /**
     * Display the specified resource.
     *
     * @param  Computador $computador
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Computador $computador)
    {
        $this->authorize('admin.computador.show', $computador);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Computador $computador
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Computador $computador)
    {
        $this->authorize('admin.computador.edit', $computador);

        return view('admin.computador.edit', [
            'computador' => $computador,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateComputador $request
     * @param  Computador $computador
     * @return Response|array
     */
    public function update(UpdateComputador $request, Computador $computador)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values Computador
        $computador->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/computadors'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/computadors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyComputador $request
     * @param  Computador $computador
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyComputador $request, Computador $computador)
    {
        $computador->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
