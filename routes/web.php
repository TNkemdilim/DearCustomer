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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/sent-mails', 'DashboardController@sent_mails')->name('sent_mails');

Route::get('/dashboard/custom-messages', 'DashboardController@custom_messages')->name('custom_messages');

Route::get('/dashboard/subscribers', 'DashboardController@subscribers')->name('subscribers');

Route::get('/dashboard/mail-scheduler', 'DashboardController@mail_scheduler')->name('mail_scheduler');

Route::get('/dashboard/analytics', 'DashboardController@analytics')->name('analytics');

Route::get('/dashboard/profile', 'DashboardController@profile')->name('profile');