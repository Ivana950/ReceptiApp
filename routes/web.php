<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

# ADMIN RUTE
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['isAdmin']], function () {

    Route::get('/', function () {
        return view('admin');
    });    


});

# USER RUTE

Route::group(['prefix' => 'user', 'namespace' => 'User', 'as' => 'user.', 'middleware' => ['auth']], function () {

    Route::get('/', function () {
        return view('pages.index');
    }); 
    Route::get('/blog-post', function () {
        return view('pages.blog-post');
    });
    Route::get('/about', function () {
        return view('pages.about');
    });
    Route::get('/contact', function () {
        return view('pages.contact');
    });
    Route::get('/receipe-post', function () {
        return view('pages.receipe-post');
    });
    
    Route::get('/create', function () {
        return view('pages.create');
    });
});

#API
Route::get('/recepti', 'ReceptController@dohvatiRecepte');
Route::get('/kategorije', 'KategorijaController@dohvatiKategorije');


Route::get('/about', function () {
    return view('pages.about');
});



Route::get('/blog-post', function () {
    return view('pages.blog-post');
});



Route::get('/contact', function () {
    return view('pages.contact');
});



Route::get('/elements', function () {
    return view('pages.elements');
});



Route::get('/receipe-post', function () {
    return view('pages.receipe-post');
});

Route::get('/create', function () {
    return view('pages.create');
});