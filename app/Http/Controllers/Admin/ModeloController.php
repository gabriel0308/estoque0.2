<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\Modelo\IndexModelo;
use App\Http\Requests\Admin\Modelo\StoreModelo;
use App\Http\Requests\Admin\Modelo\UpdateModelo;
use App\Http\Requests\Admin\Modelo\DestroyModelo;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\Modelo;

class ModeloController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexModelo $request
     * @return Response|array
     */
    public function index(IndexModelo $request)
    {
        
        if(!isset($_COOKIE["per_page"])){
            setcookie("per_page", 12);
            $_COOKIE["per_page"] = 12;
        }

        if ($request->ajax()) {
            return ['data' => $data];
        }

        $data = Modelo::orderBy('modelo.NomeModelo', 'asc')
            ->join('fabricante', 'fabricante.IdFabricante', '=', 'modelo.IdFabricante')
            ->join('tipo', 'tipo.IdTipo','=','modelo.IdTipo')
            ->paginate($_COOKIE["per_page"]);
        
        // create and AdminListing instance for a specific model and
        //  $data = AdminListing::create(Modelo::class)->processRequestAndGet(
        //     // pass the request with params
        //     $request,

        //     // set columns to query
        //     ['IdModelo', 'IdFabricante', 'IdTipo', 'NomeModelo'],

        //     // set columns to searchIn
        //     ['NomeModelo'],
            
        // );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.modelo.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.modelo.create');

        return view('admin.modelo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreModelo $request
     * @return Response|array
     */
    public function store(StoreModelo $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Modelo
        $modelo = Modelo::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/modelos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/modelos');
    }

    /**
     * Display the specified resource.
     *
     * @param  Modelo $modelo
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Modelo $modelo)
    {
        $this->authorize('admin.modelo.show', $modelo);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Modelo $modelo
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Modelo $modelo)
    {
        $this->authorize('admin.modelo.edit', $modelo);

        return view('admin.modelo.edit', [
            'modelo' => $modelo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateModelo $request
     * @param  Modelo $modelo
     * @return Response|array
     */
    public function update(UpdateModelo $request, Modelo $modelo)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values Modelo
        $modelo->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/modelos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/modelos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyModelo $request
     * @param  Modelo $modelo
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyModelo $request, Modelo $modelo)
    {
        $modelo->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
