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

Route:: resource('Posts', 'PostsController') ;

Route::get('/contact', 'PostsController@contact');



Route::get('post/{id}', 'PostsController@show_post');

Route::get('/{page}',function ($page) {

    if($page='profile'){

        $vue='vendor/ultimate/oldone/user_profile';

    }else{
        $vue='/vendor/ultimate/'.$page;
    }
    

    return view($vue);
});



