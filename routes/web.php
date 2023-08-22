<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


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


// menampilkan laman index
Route::get('/', [BookController::class, 'index']);

// menmapilkan laman admin
Route::get('/admin', function () {
    return view('Pages.admin');
});

//menampilkan laman add data
Route::get('/addData', function () {
    return view('Pages.addData');
});

// menampilkan laman pengadaan
Route::get('/pengadaan', function () {
    return view('Pages.pengadaan');
});

// menampilkan laman edit data
Route::get('/editData', function () {
    return view('Pages.editData');
});
