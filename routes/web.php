<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DocumentoController;

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

Route::get('/documento/cadastro', [DocumentoController::class, 'cadastro']);
Route::get('/documento/edit/{id}', [DocumentoController::class, 'formUpdate'])->name('edit');

Route::get('/documento', [DocumentoController::class, 'index'])->name('list');
route::patch('/documento/{id}', [DocumentoController::class, 'update']);
Route::delete('/documento/{id}', [DocumentoController::class, 'delete']);
Route::post('/documento/cadastro', [DocumentoController::class, 'store']);
