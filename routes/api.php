<?php

use App\Http\Controllers\BooksController;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/books', [BooksController::class, 'index']);
Route::get('/singlebook/{book}', [BooksController::class, 'show']);

Route::post('/create/books', [BooksController::class, 'store']);
Route::post('/update/books/{id}', [BooksController::class, 'update']);

Route::delete('/delete/books/{id}', [BooksController::class, 'destroy']);
