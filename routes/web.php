<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/home', [HomeController::class, 'show']);
Route::post('/home_create', [HomeController::class, 'create']);
Route::get('/home_delete/{id}', [HomeController::class, 'delete']);

// Route::get('/', function () {
//     return view('welcome');
// });
