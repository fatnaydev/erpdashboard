<?php

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

Route::namespace('Fatnaydev\Erpdashboard\Http\Controllers')->prefix('erp')->middleware('web','auth','verified')->group(function() {
    Route::get('/', 'ErpdashboardController')->name('erp.dashboard');
    Route::get('dashboard', 'ErpdashboardController')->name('erp.dashboard');
});
