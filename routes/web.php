<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});

Route::view('aboutpage','about');
Route::get('/dashboard',[StudentController::class,'index']);
Route::get('/indexpage',[StudentController::class,'index']);
Route::get('/showpage',[StudentController::class,'show']);
Route::get('/editpage',[StudentController::class,'edit']);
