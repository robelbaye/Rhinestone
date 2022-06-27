<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\InventionDisclosureController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\LicensorController;
use App\Http\Controllers\LicenseeController;
use App\Http\Controllers\PatentController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\TrademarkController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SettingValueController;
use Illuminate\Support\Facades\Auth;
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
//Home Page view's
Route::get('/', [App\Http\Controllers\PagesController::class, 'mainpage'])->name('welcome');

//About us Page 
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');

//Contact us Page Controller
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');

//Service page contrller
Route::get('/service', [App\Http\Controllers\PagesController::class, 'service'])->name('service');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

//Country Pages Controller
Route::get('/patent', [App\Http\Controllers\PatentController::class, 'index'])->name('patent');
Route::get('/design', [App\Http\Controllers\DesignController::class, 'index'])->name('design');
Route::get('/trademark', [App\Http\Controllers\TrademarkController::class, 'index'])->name('trademark');

// Invention Disclosures
Route::resource('invention-disclosures', InventionDisclosureController::class)->only(['index', 'store', 'show', 'update', 'delete']);
Route::name('invention-disclosures.')->prefix('invention-disclosures')->group(function(){
});

// Design CRUD
Route::resource('design-crud', DesignController::class)->only(['index', 'store', 'show', 'update', 'delete']);
Route::name('design-crud.')->prefix('design-crud')->group(function(){
});

// Patent CRUD
Route::resource('patent-crud', PatentController::class)->only(['index', 'store', 'show', 'update', 'delete']);
Route::name('patent-crud.')->prefix('patent-crud')->group(function(){
});

// Applicant CRUD
Route::resource('applicant-crud', ApplicantController::class)->only(['index', 'store', 'show', 'update', 'delete']);
Route::name('applicant-crud.')->prefix('applicant-crud')->group(function(){
});

// Investor CURD
Route::resource('investor-crud', InvestorController::class)->only(['index', 'store', 'show', 'update', 'delete']);
Route::name('investor-crud.')->prefix('investor-crud')->group(function(){
});

// Licensee CURD
Route::resource('licensee-crud', LicenseeController::class)->only(['index', 'store', 'show', 'update', 'delete']);
Route::name('licensee-crud.')->prefix('licensee-crud')->group(function(){
});

// Licensor CRUD
Route::resource('licensor-crud', LisensorController::class)->only(['index', 'store', 'show', 'update', 'delete']);
Route::name('licensor-crud.')->prefix('licensor-crud')->group(function(){
});

// Agent CRUD
Route::resource('agent-crud', AgentController::class)->only(['index', 'store', 'show', 'update', 'delete']);
Route::name('agent-crud.')->prefix('agent-crud')->group(function(){
});


// Contacts CRUD
Route::resource('contacts', ContactController::class)->only(['index', 'store', 'show', 'update', 'delete']);
Route::name('contacts.')->prefix('contacts')->group(function(){
});

// Settings CRUD
Route::resource('settings', SettingController::class)->only(['index', 'store', 'show', 'update']);
Route::name('settings.')->prefix('settings')->group(function(){
});

//Values Routes
Route::name('values.')->prefix('values')->group(function(){
    Route::get('/{settingValue}', [ SettingValueController::class, 'show' ])->name('show');
    Route::patch('/{settingValue}', [ SettingValueController::class, 'update' ])->name('update');
    Route::post('/{setting}', [ SettingValueController::class, 'store' ])->name('store');
    Route::delete('/{settingValue}', [ SettingValueController::class, 'destroy' ])->name('destroy');
});

Route::get('logout',[App\Http\Controllers\AuthController::class, 'logout']);

