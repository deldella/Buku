<?php

use App\Http\Controllers\BukuController;
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

// Route::get('/', function () {
//     return view('listbuku');
// });

Route::resource('/listbuku', BukuController::class);
Route::get('/', [BukuController::class, 'index'])-> name('buku');

Route::get('/tambah', [BukuController::class, 'tambah'])-> name('tambah');
Route::post('/insertdata', [BukuController::class, 'insertdata'])-> name('insertdata');
Route::get('/delete/{id}', [BukuController::class, 'delete'])-> name('delete');
Route::post('/update/{id}', [BukuController::class, 'update'])-> name('update');
Route::get('/tampilkandata/{id}', [BukuController::class, 'tampilkandata'])-> name('tampilkandata');
Route::get('/detail/{id}', [BukuController::class, 'detail'])-> name('detail');
