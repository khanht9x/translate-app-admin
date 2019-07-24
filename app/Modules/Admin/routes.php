<?php

$module_namespace = "App\Modules\Admin\Controllers";

Route::namespace($module_namespace)->group(function () {
    Route::get('admin/dashboard', "AdminController@dashboard")->name('admin.dashboard');
});
