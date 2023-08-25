<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BurgerController;

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
Route::get('/burger', [BurgerController::class, 'index']);
Route::get('/burger/create', [BurgerController::class, 'create']);
Route::post('/burger', [BurgerController::class, 'store']);
Route::get('/burger/{id}', [BurgerController::class, 'show']);