<?php

$module_namespace = "App\Modules\User\Controllers";

Route::namespace($module_namespace)->group(function () {
    Route::post('user/login', "UserController@login")->name('user.login');
});
