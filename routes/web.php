<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashoardController;

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

Route::get('/dashboard', function () {
    return view('appadmin.dashboard');
});

Route::get('/dashboard', function () {
     return view('appadmin.content');
});

Route::get('/dashboard', function () {
    return view('produk');
});

Route::get('appadmin.dashboard', [DashoardController::class, 'index']);

Route::get('/produk', [ProdukController::class, 'index']);
