<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\educationController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\awardsController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\workController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\forgetController;
use App\Http\Controllers\socialController;
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

Route::get('/', [homeController::class, 'index'])->name('home.page');

//home
Route::get('/home', [homeController::class, 'index'])->name('home.index');

// admin
Route::get('/admin', [adminController::class, 'index'])->name('admin.index');
Route::post('/admin/{id}/update', [adminController::class, 'update'])->name('admin.update');



// about
Route::get('/about', [aboutController::class, 'index'])->name('about.index');
Route::put('/about/{id}/update', [aboutController::class, 'update'])->name('about.update');
Route::put('/about/{id}/updates', [aboutController::class, 'updates'])->name('about.description');
Route::post('/about/add', [aboutController::class, 'add'])->name('about.add');
Route::delete('/about/delete/{id}', [aboutController::class, 'destroy'])->name('about.destroy');

// education 
Route::get('/education', [educationController::class, 'index'])->name('education.index');
Route::post('/education/{id}/description', [educationController::class, 'description'])->name('education.description');
Route::put('/education/{id}/update', [educationController::class, 'update'])->name('education.update');
Route::post('/education/add', [educationController::class, 'add'])->name('education.add');
Route::delete('/education/delete/{id}', [educationController::class, 'destroy'])->name('education.delete');

// skill
Route::get('/skill', [skillController::class, 'index'])->name('skill.index');
Route::post('/skill/add', [skillController::class, 'add'])->name('skill.add');
Route::put('/skill/{id}/update', [skillController::class, 'update'])->name('skill.update');
Route::delete('/skill/delete/{id}', [skillController::class, 'destroy'])->name('skill.delete');

// awards
Route::get('/awards', [awardsController::class, 'index'])->name('awards.index');
Route::post('/awards/add', [awardsController::class, 'add'])->name('awards.add');
Route::put('/awards/{id}/update', [awardsController::class, 'update'])->name('awards.update');
Route::delete('/awards/delete/{id}', [awardsController::class, 'destroy'])->name('awards.delete');

// experience
Route::get('/experience', [experienceController::class, 'index'])->name('experience.index');
Route::post('/experience/add', [experienceController::class, 'add'])->name('experience.add');
Route::put('/experience/{id}/update', [experienceController::class, 'update'])->name('experience.update');
Route::delete('/experience/{id}/delete', [experienceController::class, 'destroy'])->name('experience.delete');

// services
Route::get('/services', [servicesController::class, 'index'])->name('services.index');
Route::post('/services/add', [servicesController::class, 'add'])->name('services.add');
Route::put('/services/{id}/update', [servicesController::class, 'update'])->name('services.update');
Route::delete('/service/{id}/delete', [servicesController::class, 'destroy'])->name('service.delete');

// socials
Route::get('/social', [socialController::class, 'index'])->name('social.index');
Route::get('/social/site/{site}/{link}', [socialController::class, 'site'])->name('social.site');
Route::post('/social/add', [socialController::class, 'add'])->name('social.add');
Route::put('/social/{id}/update', [socialController::class, 'update'])->name('social.update');
Route::delete('/social/{id}/delete', [socialController::class, 'Destroy'])->name('social.delete');

// work
Route::get('/work', [workController::class, 'index'])->name('work.index');
Route::get('/site/{site}', [workController::class, 'site'])->name('site.index');
Route::post('/work/add', [workController::class, 'create'])->name('work.create');
Route::put('/work/update/{id}', [workController::class, 'update'])->name('work.update');
Route::delete('/work/delete/{id}', [workController::class, 'destroy'])->name('work.destroy');

// client
Route::get('/client', [clientController::class, 'index'])->name('client.index');
Route::post('/client/post', [clientController::class, 'create'])->name('client.add');
Route::put('/client/{id}/update', [clientController::class, 'update'])->name('client.update');
Route::delete('/client/delete/{id}', [clientController::class, 'destroy'])->name('client.destroy');

// contact
Route::get('/contact', [contactController::class, 'index'])->name('contact.index');
Route::post('/contact/{id}/update', [contactController::class, 'update'])->name('contact.update');

// login
Route::get('/login', [loginController::class, 'index'])->name('login.index');
Route::post('/login/auth', [AuthController::class, 'login'])->name('login.auth');
Route::post('/login/reg', [AuthController::class, 'reg'])->name('login.reg');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// forgetpass
Route::get('/forget', [forgetController::class, 'index'])->name('forget.index');
Route::post('/forget/confirm', [forgetController::class, 'auth'])->name('forget.auth');
Route::post('/changepass/savepass', [forgetController::class, 'savepass'])->name('changepass.save');