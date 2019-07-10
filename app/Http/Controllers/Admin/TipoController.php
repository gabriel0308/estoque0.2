<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\Tipo\IndexTipo;
use App\Http\Requests\Admin\Tipo\StoreTipo;
use App\Http\Requests\Admin\Tipo\UpdateTipo;
use App\Http\Requests\Admin\Tipo\DestroyTipo;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\Tipo;

class TipoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexTipo $request
     * @return Response|array
     */
    public function index(IndexTipo $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Tipo::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['IdTipo', 'NomeTipo'],

            // set columns to searchIn
            ['NomeTipo']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.tipo.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.tipo.create');

        return view('admin.tipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreTipo $request
     * @return Response|array
     */
    public function store(StoreTipo $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Tipo
        $tipo = Tipo::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/tipos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/tipos');
    }

    /**
     * Display the specified resource.
     *
     * @param  Tipo $tipo
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Tipo $tipo)
    {
        $this->authorize('admin.tipo.show', $tipo);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Tipo $tipo
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Tipo $tipo)
    {
        $this->authorize('admin.tipo.edit', $tipo);

        return view('admin.tipo.edit', [
            'tipo' => $tipo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateTipo $request
     * @param  Tipo $tipo
     * @return Response|array
     */
    public function update(UpdateTipo $request, Tipo $tipo)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values Tipo
        $tipo->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/tipos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/tipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyTipo $request
     * @param  Tipo $tipo
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyTipo $request, Tipo $tipo)
    {
        $tipo->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
