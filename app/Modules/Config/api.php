<?php

$module_namespace = "App\Modules\Config\Controllers";

Route::namespace($module_namespace)->group(function () {
    Route::get('config/detail', "ConfigController@detail")->name('token.detail');
});
