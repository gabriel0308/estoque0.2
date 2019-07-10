<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\Fabricante\IndexFabricante;
use App\Http\Requests\Admin\Fabricante\StoreFabricante;
use App\Http\Requests\Admin\Fabricante\UpdateFabricante;
use App\Http\Requests\Admin\Fabricante\DestroyFabricante;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\Fabricante;

class FabricanteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexFabricante $request
     * @return Response|array
     */
    public function index(IndexFabricante $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Fabricante::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['IdFabricante', 'NomeFabricante'],

            // set columns to searchIn
            ['NomeFabricante']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.fabricante.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.fabricante.create');

        return view('admin.fabricante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreFabricante $request
     * @return Response|array
     */
    public function store(StoreFabricante $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Fabricante
        $fabricante = Fabricante::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/fabricantes'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/fabricantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  Fabricante $fabricante
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Fabricante $fabricante)
    {
        $this->authorize('admin.fabricante.show', $fabricante);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Fabricante $fabricante
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Fabricante $fabricante)
    {
        $this->authorize('admin.fabricante.edit', $fabricante);

        return view('admin.fabricante.edit', [
            'fabricante' => $fabricante,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateFabricante $request
     * @param  Fabricante $fabricante
     * @return Response|array
     */
    public function update(UpdateFabricante $request, Fabricante $fabricante)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values Fabricante
        $fabricante->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/fabricantes'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/fabricantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyFabricante $request
     * @param  Fabricante $fabricante
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyFabricante $request, Fabricante $fabricante)
    {
        $fabricante->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
