<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

    //EDUCATION
    Route::get('/myeducation', [EducationController::class, 'displayEducation'])->name('myeducation');

    Route::view('addEducation', 'addEducation');
    Route::post('/addEducation', [EducationController::class, 'addEducation']);

    Route::get('/editmyeducation/{id}', [EducationController::class, 'viewEditEducation'])->name('editmyeducation');
    Route::post('/editmyeducation/{id}', [EducationController::class, 'updateEducation'])->name('updateEducation');

    Route::delete('/educationDestroy/{id}', [EducationController::class, 'destroy'])->name('educationDestroy');

    //EXPERIENCE
    Route::get('/myexp', [ExperienceController::class, 'displayExperience'])->name('myexp');

    Route::view('addExperience', 'addExperience');
    Route::post('/addExperience', [ExperienceController::class, 'addExperience']);

    Route::get('/editmyexp/{id}', [ExperienceController::class, 'viewEditExperience'])->name('editmyexperience');
    Route::post('/editmyexp/{id}', [ExperienceController::class, 'updateExperience'])->name('updateExperience');

    Route::delete('/expDestroy/{id}', [ExperienceController::class, 'destroy'])->name('expDestroy');
});

// ADMIN
Route::group(['middleware' => 'auth:admin'], function () {
    // Route::view('/admin', 'admin');
    Route::get('/admin/welcome', function () {
        return view('admin.welcome');
    });

    Route::get('/admin/employees', function () {
        return view('admin.allemployees');
    });
});

// Authentication
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm']);
Route::post('/login/admin', [LoginController::class, 'adminLogin']);
Route::post('/register/admin', [RegisterController::class, 'createAdmin']);
Route::get('logout', [LoginController::class, 'logout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[AdminController::class,'loadAllEmp']);
Route::get('editempeducation/{id}',[AdminController::class,'showEditEmpEdu']);
Route::post('editempeducation/{id}',[AdminController::class,'editEmpEducation']);
Route::get('editempexp/{id}',[AdminController::class,'showEditEmpExp']);
Route::post('editempexp/{id}',[AdminController::class,'editEmpExperience']);
Route::get('editempprofile/{id}',[AdminController::class,'showEditEmpPro']);
Route::post('editempprofile/{id}',[AdminController::class,'editEmpProfile']);
