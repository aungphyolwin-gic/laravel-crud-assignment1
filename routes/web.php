<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ServiceController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('employee', EmployeeController::class)->middleware('auth');

//custom
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('service/store',[ServiceController::class,'store'])->name('service.store');
Route::get('service/{service}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::get('service/{service}/show', [ServiceController::class, 'show'])->name('service.show');
Route::put('service/{service}',[ServiceController::class,'update'])->name('service.update');
Route::delete('service/{service}',[ServiceController::class,'destroy'])->name('service.destroy');

