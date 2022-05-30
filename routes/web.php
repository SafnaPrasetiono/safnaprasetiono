<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\educationAdmin;
use App\Http\Controllers\admin\educationsController;
use App\Http\Controllers\admin\profileAdmin;
use App\Http\Controllers\admin\settingController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [homeController::class, 'home'])->name('index');
Route::get('/home', [homeController::class, 'home'])->name('index');
Route::get('/education/{id}-{slug}', [homeController::class, 'education'])->name('education');

Route::get('/admin/login', [authController::class, 'login'])->name('admin.login');
Route::post('/admin/login/post', [authController::class, 'postLogin'])->name('admin.login.post');
Route::get('/admin/signup', [authController::class, 'signup'])->name('admin.signup');
Route::post('/admin/signup/post', [authController::class, 'postSignup'])->name('admin.signup.post');


Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function() {
    Route::get('/dashboard', [dashboardController::class,'dashboard'])->name('admin.dashboard');
    // Route::get('/dashboard', [educationsController::class,''])->name('admin.educations');

    // profile admin
    Route::get('/profile', [profileAdmin::class, 'index'])->name('admin.profile');

    Route::get('/education', [educationAdmin::class, 'index'])->name('admin.education.index');
    Route::get('/education/create', [educationAdmin::class, 'create'])->name('admin.education.create');
    Route::get('/education/edit/{id}', [educationAdmin::class, 'edit'])->name('admin.education.edit');
    Route::post('/education/store', [educationAdmin::class, 'store'])->name('admin.education.store');
    Route::put('/education/update/{id}', [educationAdmin::class, 'update'])->name('admin.education.update');
    Route::delete('/education/delete', [educationAdmin::class, 'delete'])->name('admin.education.delete');

    Route::get('/setting', [settingController::class, 'setting'])->name('admin.setting');
});