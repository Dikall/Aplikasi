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
Auth::routes();
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
    /*------------------------------------------
    --------------------------------------------
    All Admin Routes List
    --------------------------------------------
    --------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class,'adminHome'])->name('adminhome');
});
    /*------------------------------------------
    --------------------------------------------
    All Admin Routes List
    --------------------------------------------
    --------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class,'managerHome'])->name('managerhome');
});

Route::middleware(['auth', 'user-access:superadmin'])->group(function () {
    Route::get('/superadmin/home', [HomeController::class,'superadminHome'])->name('superadminhome');
});

Route::middleware(['auth', 'user-access:mahasiswa'])->group(function () {
    Route::get('/mahasiswa/home', [HomeController::class,'mahasiswaHome'])->name('mahasiswahome');
});

Route::middleware(['auth', 'user-access:tendik'])->group(function () {
    Route::get('/tendik/home', [HomeController::class,'tendikHome'])->name('tendikhome');
});

Route::middleware(['auth', 'user-access:admkeuangan'])->group(function () {
    Route::get('/admkeuangan/home', [HomeController::class,'admkeuanganHome'])->name('admkeuanganhome');
});

Route::middleware(['auth', 'user-access:admakademik'])->group(function () {
    Route::get('/admakademik/home', [HomeController::class,'admakademikHome'])->name('admakademikhome');
});

Route::middleware(['auth', 'user-access:direktur'])->group(function () {
    Route::get('/direktur/home', [HomeController::class,'direkturHome'])->name('direkturhome');
});

Route::middleware(['auth', 'user-access:wakil1'])->group(function () {
    Route::get('/wakil1/home', [HomeController::class,'wakil1Home'])->name('wakil1home');
});

Route::middleware(['auth', 'user-access:wakil2'])->group(function () {
    Route::get('/wakil2/home', [HomeController::class,'wakil2Home'])->name('wakil2home');
});

Route::middleware(['auth', 'user-access:wakil3'])->group(function () {
    Route::get('/wakil3/home', [HomeController::class,'wakil3Home'])->name('wakil3home');
});

Route::middleware(['auth', 'user-access:admlppm'])->group(function () {
    Route::get('/admlppm/home', [HomeController::class,'admlppmHome'])->name('admlppmhome');
});

Route::middleware(['auth', 'user-access:admsdm'])->group(function () {
    Route::get('/admsdm/home', [HomeController::class,'admsdmHome'])->name('admsdmhome');
});