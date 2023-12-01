<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SeriesController;
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

Route::get('/', [BookController::class, 'index']);

Route::resource('/books', BookController::class);
Route::resource('/authors', AuthorController::class);
Route::resource('/series', SeriesController::class);

Route::get('/download/{fileName}', function($fileName){
    return response()->download('storage/'.base64_decode($fileName));
})->name('download');