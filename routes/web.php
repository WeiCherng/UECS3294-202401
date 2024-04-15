<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});


// USER
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/myexp', function () {
    return view('myexp');
});

Route::get('/editmyexp', function () {
    return view('editmyexp');
});

Route::get('/myeducation', function () {
    return view('myeducation');
});

Route::get('/editmyeducation', function () {
    return view('editmyeducation');
});

// ADMIN
Route::get('/admin/welcome', function () {
    return view('admin.welcome');
});

Route::get('/admin/employees', function () {
    return view('admin.allemployees');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[AdminController::class,'loadAllEmp']);
Route::get('editempeducation/{id}',[AdminController::class,'showEditEmpEdu']);
Route::post('editempeducation/{id}',[AdminController::class,'editEmpEducation']);
Route::get('editempexp/{id}',[AdminController::class,'showEditEmpExp']);
Route::post('editempexp/{id}',[AdminController::class,'editEmpExperience']);
Route::get('editempprofile/{id}',[AdminController::class,'showEditEmpPro']);
Route::post('editempprofile/{id}',[AdminController::class,'editEmpProfile']);