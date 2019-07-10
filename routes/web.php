<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/analista',                               'Admin\UsersController@index');
    Route::get('/admin/analista/create',                        'Admin\UsersController@create');
    Route::post('/admin/analista',                              'Admin\UsersController@store');
    Route::get('/admin/analista/{analistum}/edit',              'Admin\UsersController@edit')->name('admin/analista/edit');
    Route::post('/admin/analista/{analistum}',                  'Admin\UsersController@update')->name('admin/analista/update');
    Route::delete('/admin/analista/{analistum}',                'Admin\UsersController@destroy')->name('admin/analista/destroy');
    Route::get('/admin/analista/{analistum}/resend-activation', 'Admin\UsersController@resendActivationEmail')->name('admin/analista/resendActivationEmail');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/admin-users',                            'Admin\AdminUsersController@index');
    Route::get('/admin/admin-users/create',                     'Admin\AdminUsersController@create');
    Route::post('/admin/admin-users',                           'Admin\AdminUsersController@store');
    Route::get('/admin/admin-users/{adminUser}/edit',           'Admin\AdminUsersController@edit')->name('admin/admin-users/edit');
    Route::post('/admin/admin-users/{adminUser}',               'Admin\AdminUsersController@update')->name('admin/admin-users/update');
    Route::delete('/admin/admin-users/{adminUser}',             'Admin\AdminUsersController@destroy')->name('admin/admin-users/destroy');
    Route::get('/admin/admin-users/{adminUser}/resend-activation','Admin\AdminUsersController@resendActivationEmail')->name('admin/admin-users/resendActivationEmail');
});

/* Auto-generated profile routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/profile',                                'Admin\ProfileController@editProfile');
    Route::post('/admin/profile',                               'Admin\ProfileController@updateProfile');
    Route::get('/admin/password',                               'Admin\ProfileController@editPassword');
    Route::post('/admin/password',                              'Admin\ProfileController@updatePassword');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/tipos',                                  'Admin\TipoController@index');
    Route::get('/admin/tipos/create',                           'Admin\TipoController@create');
    Route::post('/admin/tipos',                                 'Admin\TipoController@store');
    Route::get('/admin/tipos/{tipo}/edit',                      'Admin\TipoController@edit')->name('admin/tipos/edit');
    Route::post('/admin/tipos/{tipo}',                          'Admin\TipoController@update')->name('admin/tipos/update');
    Route::delete('/admin/tipos/{tipo}',                        'Admin\TipoController@destroy')->name('admin/tipos/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/analista',                               'Admin\AnalistaController@index');
    Route::get('/admin/analista/create',                        'Admin\AnalistaController@create');
    Route::post('/admin/analista',                              'Admin\AnalistaController@store');
    Route::get('/admin/analista/{analistum}/edit',              'Admin\AnalistaController@edit')->name('admin/analista/edit');
    Route::post('/admin/analista/{analistum}',                  'Admin\AnalistaController@update')->name('admin/analista/update');
    Route::delete('/admin/analista/{analistum}',                'Admin\AnalistaController@destroy')->name('admin/analista/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/fabricantes',                            'Admin\FabricanteController@index');
    Route::get('/admin/fabricantes/create',                     'Admin\FabricanteController@create');
    Route::post('/admin/fabricantes',                           'Admin\FabricanteController@store');
    Route::get('/admin/fabricantes/{fabricante}/edit',          'Admin\FabricanteController@edit')->name('admin/fabricantes/edit');
    Route::post('/admin/fabricantes/{fabricante}',              'Admin\FabricanteController@update')->name('admin/fabricantes/update');
    Route::delete('/admin/fabricantes/{fabricante}',            'Admin\FabricanteController@destroy')->name('admin/fabricantes/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/modelos',                                'Admin\ModeloController@index');
    Route::get('/admin/modelos/create',                         'Admin\ModeloController@create');
    Route::post('/admin/modelos',                               'Admin\ModeloController@store');
    Route::get('/admin/modelos/{modelo}/edit',                  'Admin\ModeloController@edit')->name('admin/modelos/edit');
    Route::post('/admin/modelos/{modelo}',                      'Admin\ModeloController@update')->name('admin/modelos/update');
    Route::delete('/admin/modelos/{modelo}',                    'Admin\ModeloController@destroy')->name('admin/modelos/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/computadors',                            'Admin\ComputadorController@index');
    Route::get('/admin/computadors/create',                     'Admin\ComputadorController@create');
    Route::post('/admin/computadors',                           'Admin\ComputadorController@store');
    Route::get('/admin/computadors/{computador}/edit',          'Admin\ComputadorController@edit')->name('admin/computadors/edit');
    Route::post('/admin/computadors/{computador}',              'Admin\ComputadorController@update')->name('admin/computadors/update');
    Route::delete('/admin/computadors/{computador}',            'Admin\ComputadorController@destroy')->name('admin/computadors/destroy');
});