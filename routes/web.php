<?php

use App\Http\Controllers\ControllerPage;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\admin;

Route::get('/', [ControllerPage::class, 'welcome'])->name('welcome');
Route::get('store', [ControllerPage::class, 'store'])->name('store');
Route::get('update', [ControllerPage::class, 'update'])->name('update')->middleware(admin::class);
Route::post('uploadTitolo',[ControllerPage::class, 'uploadTitolo'])->name('uploadTitolo');
Route::get('titolo{film}',[ControllerPage::class, 'titolo'])->name('titolo');








/* ROTTE LOGIN/REGISTER----------- */
Route::get('loginPage', function (){
    return view('auth/login');
})->name('loginpage');

Route::get('registerPage', function (){
    return view('auth/register');
})->name('registerpage');