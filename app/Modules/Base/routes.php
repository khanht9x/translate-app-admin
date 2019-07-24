<?php

$module_namespace = "App\Modules\Base\Controllers";

Route::namespace($module_namespace)->group(function () {
    Route::get('/', "BaseController@index")->name('home');
});
