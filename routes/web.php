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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('infos','InfoController');
Route::resource('rdvs','RdvController');
// Route::resource('admins','AdminController');

Auth::routes();

Route::get('/admins', [App\Http\Controllers\HomeController::class, 'index'])->name('admins');
Route::get('/admins/create', [App\Http\Controllers\HomeController::class, 'create'])->name('admins.create');
Route::get('/admins/showVaccin', [App\Http\Controllers\HomeController::class, 'showVaccin'])->name('admins.showVaccin');
Route::get('/admins/viewContact', [App\Http\Controllers\HomeController::class, 'viewContact'])->name('admins.viewContact');
Route::post('/admins', [App\Http\Controllers\HomeController::class, 'store'])->name('admins.store');

// Route::resource('admins', HomeController::class);
Route::delete('admins/force/{info}', [HomeController::class, 'forceDestroy'])->name('admins.force.destroy');
Route::put('admins/restore/{info}', [HomeController::class, 'restore'])->name('admins.restore');
// Route::put('admins/{info}', [HomeController::class, 'update'])->name('admins.update');

Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');

Route::get('/rdvs/info1', [App\Http\Controllers\RdvController::class, 'info1'])->name('rdvs.info1');
Route::get('/rdvs/info2', [App\Http\Controllers\RdvController::class, 'info2'])->name('rdvs.info2');
Route::get('/rdvs/info3', [App\Http\Controllers\RdvController::class, 'info3'])->name('rdvs.info3');

// Route::get('region/{slug}/departement', [DepartementController::class, 'index'])->name('departement.region');
// Route::get('/regions', [App\Http\Controllers\DepartementController::class, 'index'])->name('regions');

Route::get('/regions', [App\Http\Controllers\TestController::class, 'index'])->name('regions');


Route::get('departements/{id}', 'TestController@departements');
 
Route::group(['middleware' => 'web'], function () {
 
 Route::resource('test', 'TestController', ['only' => [
 'edit', 'update'
 ]]);
 
});
