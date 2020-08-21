<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
});
