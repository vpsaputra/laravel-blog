<?php

use App\Http\Controllers\AdminController;
use App\Models\Wedding;
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
    return view('coba_undangan');
});

// Route::get('/cover', function () {
//     return view('cover');
// });
Route::get('/content', function () {
    return view('content');
});

Route::get('/cover', 'PagesController@cover');

//Route::get('/wedding', 'AdminController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/create', function() {
    return view('admin.create');
});
Route::get('/administrator/{wedding}/{param}', 'AdminController@show');

Route::get('/content', function () {
    return view('content');
});

Route::post('/admin', 'AdminController@create');