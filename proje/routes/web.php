<?php

use App\Http\Controllers\PageHomeController;
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

Route::get('/kayit',[PageHomeController::class,'kayit'])->name('Cinema')->name('project');
Route::get('/login',[PageHomeController::class,'login'])->name('Cinema')->name('project');
Route::get('/admin',[PageHomeController::class,'admin'])->name('Cinema')->name('project');
Route::get('/aksiyon',[PageHomeController::class,'aksiyon'])->name('Cinema')->name('project');
Route::get('/animasyon',[PageHomeController::class,'animasyon'])->name('Cinema')->name('project');
Route::get('/biyografi',[PageHomeController::class,'biyografi'])->name('Cinema')->name('project');
Route::get('/dram',[PageHomeController::class,'dram'])->name('Cinema')->name('project');
Route::get('/korku',[PageHomeController::class,'korku'])->name('Cinema')->name('project');
Route::get('/kvk',[PageHomeController::class,'kvk'])->name('Cinema')->name('project');
Route::get('/kvkpol',[PageHomeController::class,'kvkpol'])->name('Cinema')->name('project');
Route::get('/romantik',[PageHomeController::class,'romantik'])->name('Cinema')->name('project');
Route::get('/araf',[PageHomeController::class,'araf'])->name('Cinema')->name('project');
Route::get('/askin',[PageHomeController::class,'askin'])->name('Cinema')->name('project');
Route::get('/dali',[PageHomeController::class,'dali'])->name('Cinema')->name('project');
Route::get('/galaksi',[PageHomeController::class,'galaksi'])->name('Cinema')->name('project');
Route::get('/hizliof',[PageHomeController::class,'hizliof'])->name('Cinema')->name('project');
Route::get('/karanlik',[PageHomeController::class,'karanlik'])->name('Cinema')->name('project');
Route::get('/kotu',[PageHomeController::class,'kotu'])->name('Cinema')->name('project');
Route::get('/kurak',[PageHomeController::class,'kurak'])->name('Cinema')->name('project');
Route::get('/mannu',[PageHomeController::class,'mannu'])->name('Cinema')->name('project');
Route::get('/neseli',[PageHomeController::class,'neseli'])->name('Cinema')->name('project');
Route::get('/resmiyaris',[PageHomeController::class,'resmiyaris'])->name('Cinema')->name('project');
Route::get('/iletisim',[PageHomeController::class,'iletisim'])->name('Cinema')->name('project');
Route::get('/biletal',[PageHomeController::class,'biletal'])->name('Cinema')->name('project');
Route::get('/biletsatinal',[PageHomeController::class,'biletsatinal'])->name('Cinema')->name('project');
Route::get('/odemeyap',[PageHomeController::class,'odemeyap'])->name('Cinema')->name('project');
Route::get('/oneri',[PageHomeController::class,'oneri'])->name('Cinema')->name('project');

Route::get('/',[PageHomeController::class,'index'])->name('Cinema')->name('project');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
