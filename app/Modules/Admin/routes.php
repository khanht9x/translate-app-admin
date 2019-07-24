<?php

$module_namespace = "App\Modules\Admin\Controllers";

Route::namespace($module_namespace)->group(function () {
    Route::get('admin/dashboard', "AdminController@dashboard")->name('admin.dashboard');
    Route::get('admin/user', "UserController@index")->name('admin.user');
    Route::get('admin/token', "TokenController@index")->name('admin.token');
    Route::get('admin/log', "LogController@index")->name('admin.log');

});
