<?php

use Illuminate\Support\Facades\Route;

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
    return 'Home';
});

Route::middleware('private')->group(function () {
    route::get('/private-info', function(){
        return "Right token, you have access to private info";
    });

    route::get('/passwords', function(){
        return "Rigth token, you have access to passwords";
    });
    
});


Route::get('/error', function () {
    return 'error';
});

