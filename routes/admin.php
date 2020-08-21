<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
    Route::get('settings', 'SettingController@index')->name('admin.settings');
    Route::post('settings', 'SettingController@update')->name('admin.settings.update');
});
