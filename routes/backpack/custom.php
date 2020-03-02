<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('client', 'ClientCrudController');
    Route::crud('call', 'CallCrudController');
    
    Route::crud('category', 'CategoryCrudController');
    Route::get('/getuserdata','CallCrudController@EnterringCall');
    
    
      
    Route::post('/checkIfRecordExist','CallCrudController@check');
    Route::post('/editUser','CallCrudController@AjaxEditClient');
    Route::post('/sendfile','CallCrudController@AjaxCallStore');
    
    Route::get('dashboard','dashboardCrudController@dashboard');


}); // this should be the absolute last line of this file

