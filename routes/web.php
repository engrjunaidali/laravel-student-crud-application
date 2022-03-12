<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;
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


// Route::view('/students','students.index');

// Route::view('/teachers','teachers.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/students', [studentsController::class, 'index']);
Route::post('/students-add', [studentsController::class, 'store']);
