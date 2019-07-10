<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\Analistum\IndexAnalistum;
use App\Http\Requests\Admin\Analistum\StoreAnalistum;
use App\Http\Requests\Admin\Analistum\UpdateAnalistum;
use App\Http\Requests\Admin\Analistum\DestroyAnalistum;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\Analistum;
use Illuminate\Support\Facades\Config;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexAnalistum $request
     * @return Response|array
     */
    public function index(IndexAnalistum $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Analistum::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'email', 'email_verified_at'],

            // set columns to searchIn
            ['id', 'name', 'email']
        );

        if ($request->ajax()) {
            return ['data' => $data, 'activation' => Config::get('admin-auth.activation_enabled')];
        }

        return view('admin.analistum.index', ['data' => $data, 'activation' => Config::get('admin-auth.activation_enabled')]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.analistum.create');

        return view('admin.analistum.create',[
            'activation' => Config::get('admin-auth.activation_enabled'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreAnalistum $request
     * @return Response|array
     */
    public function store(StoreAnalistum $request)
    {
        // Sanitize input
        $sanitized = $request->getModifiedData();

        // Store the Analistum
        $analistum = Analistum::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/analista'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/analista');
    }

    /**
     * Display the specified resource.
     *
     * @param  Analistum $analistum
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Analistum $analistum)
    {
        $this->authorize('admin.analistum.show', $analistum);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Analistum $analistum
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Analistum $analistum)
    {
        $this->authorize('admin.analistum.edit', $analistum);

        return view('admin.analistum.edit', [
            'analistum' => $analistum,
            'activation' => Config::get('admin-auth.activation_enabled'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateAnalistum $request
     * @param  Analistum $analistum
     * @return Response|array
     */
    public function update(UpdateAnalistum $request, Analistum $analistum)
    {
        // Sanitize input
        $sanitized = $request->getModifiedData();

        // Update changed values Analistum
        $analistum->update($sanitized);


        if ($request->ajax()) {
            return ['redirect' => url('admin/analista'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/analista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyAnalistum $request
     * @param  Analistum $analistum
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyAnalistum $request, Analistum $analistum)
    {
        $analistum->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    
    
}
