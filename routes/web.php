<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});





Route::get('/index', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/bloge', function () {
    return view('bloge');
});
Route::get('/dash', function () {
    return view('dashboard.dash');
});
Route::get('/login', function () {
    return view('login');
});




Route::get('/student' , [AdminController::class , 'addstudent']);
Route::post('/add-student', [AdminController::class, 'store']);
Route::post('/contact', [AdminController::class, 'contact']);
Route::get('/admin/contact/{id}', [AdminController::class, 'show'])->name('contact.show');






