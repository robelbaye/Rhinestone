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
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\AutofillController;
use App\Http\Controllers\MyprofileController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\UsersmgtController;
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
Route::get('/show', [App\Http\Controllers\InventionDisclosureController::class, 'show'])->name('show');
Route::get('/showc', [ App\Http\Controllers\ContactController::class, 'show'])->name('showc');
Route::get('/merged', [ App\Http\Controllers\ContactController::class, 'merged'])->name('merged');
Route::get('/autofill', [App\Http\Controllers\AutofillController::class, 'index'])->name('autofill');
Route::post('/autofill/fetch', [App\Http\Controllers\AutofillController::class, 'fetch'])->name('autofill.fetch');

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
Route::resource('investor-crud', InvestorController::class)->only(['index', 'edit', 'store', 'show', 'update', 'destroy']);
Route::name('investor-crud.')->prefix('investor-crud')->group(function(){
});

// Licensee CURD
Route::resource('licensee-crud', LicenseeController::class)->only(['index', 'edit', 'store', 'show', 'update', 'delete']);
Route::name('licensee-crud.')->prefix('licensee-crud')->group(function(){
});

// Licensor CRUD
Route::resource('licensor-crud', LicensorController::class)->only(['index', 'edit', 'store', 'show', 'update', 'delete']);
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

//performance Controller
Route::get('/performance', [App\Http\Controllers\PerformanceController::class, 'index'])->name('performance');

// Settings CRUD
Route::resource('settings', SettingController::class)->only(['index', 'store', 'show', 'update']);
Route::name('settings.')->prefix('settings')->group(function(){
}); 

// Settings CRUD
Route::resource('usersmgtlist', UsersmgtController::class)->only(['index', 'store', 'show', 'update']);
Route::name('usersmgtlist.')->prefix('usersmgtlist')->group(function(){
}); 


//performance Controller
Route::get('/myprofile', [App\Http\Controllers\MyprofileController::class, 'index'])->name('myprofile');

// Settings CRUD
Route::get('/invoice', [App\Http\Controllers\InvoicesController::class, 'index'])->name('invoice');

//Account Management
Route::get('/usersmgt', [App\Http\Controllers\UsersmgtController::class, 'index'])->name('usersmgt');

//Applicant Edit 
Route::resource('/apptcrud', ApplicantController::class);

//Agent CRUD
Route::resource('/agentcrud', AgentController::class);

//Licensee CRUD
Route::resource('/licenseecrud', LicenseeController::class);

//Licensor CRUD
Route::resource('/licensorcrud', LicensorController::class);

//Invention CRUD
Route::resource('/inventioncrud', InvestorController::class);

//design CRUD
Route::resource('/designcrud', DesignController::class);

//patent CRUD
Route::resource('/patentcrud', PatentController::class);

//Invention-disclosure CRUD
Route::resource('/inventiondiscrud', InventionDisclosureController::class);

//invoice CRUD
Route::resource('/invoicescrud', InvoicesController::class);

//setting CRUD
Route::resource('/settingscrud', SettingController::class);

//usersmgt CRUD
Route::resource('/usersmgtcrud', UsersmgtController::class);

//usersprofile CRUD
Route::resource('/myprofilecrud', MyprofileController::class);

Route::get('logout',[App\Http\Controllers\AuthController::class, 'logout']);

