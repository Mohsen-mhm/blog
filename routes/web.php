<?php

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

Route::get('/', function () {
    return redirect()->route('home', 'fa');
});

Route::group(['prefix' => '{locale}', 'middleware' => 'setlocale'], function () {

    Route::get('/', \App\Http\Livewire\Home::class)->name('home');

    Route::get('login', \App\Http\Livewire\Auth\Login::class)->name('login');
    Route::get('register', \App\Http\Livewire\Auth\Register::class)->name('register');

    Route::get('dashboard', \App\Http\Livewire\Dashboard\Index::class)->name('dashboard.home');

    Route::post('logout')->name('logout');
});
