<?php

$module_namespace = "App\Modules\Admin\Controllers";

Route::namespace($module_namespace)->group(function () {
    // Admin
    Route::get('admin/dashboard', "AdminController@dashboard")->name('admin.dashboard');
    Route::get('admin/user', "UserController@index")->name('admin.user');

    // Token
    Route::get('admin/token', "TokenController@index")->name('admin.token');
    Route::post('admin/token/create', "TokenController@create")->name('admin.token.create');

    // Log
    Route::get('admin/log', "LogController@index")->name('admin.log');

});
