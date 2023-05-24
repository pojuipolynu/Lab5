<?php

use App\Http\Controllers\RecipesController;
use App\Http\Controllers\Commentarys;
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

Route::get('/', function () {
    return view('recipe');
});
Route::get('/recipecomment', [RecipesController::class, 'comments']);
Route::get('/dishes', [RecipesController::class, 'show']);
Route::post('/dishes/submit', [RecipesController::class, 'submit']);



Route::post('/db/submit', [Commentarys::class, 'store']);
Route::get('/db', [Commentarys::class, 'index']);
Route::get('/sort', [Commentarys::class, 'search']);
Route::post('/sort/submit', [Commentarys::class, 'search_res']);
