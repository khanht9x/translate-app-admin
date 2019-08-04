<?php

$module_namespace = "App\Modules\Token\Controllers";

Route::namespace($module_namespace)->group(function () {
    Route::post('token/verify', "TokenController@verify")->name('token.verify');
    Route::post('token/verify-disk', "TokenController@verifyDisk")->name('token.verify.disk');
});
