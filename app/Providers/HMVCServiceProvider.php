<?php

namespace App\Providers;

use File;
use Illuminate\Support\ServiceProvider;

class HMVCServiceProvider extends ServiceProvider
{
    private $pathModule = __DIR__ . '/../Modules';

    public function boot()
    {
        $listModule = array_map('basename', File::directories($this->pathModule));

        foreach ($listModule as $module) {
            if (is_dir($this->pathModule . '/' . $module . '/Views')) {
                $this->loadViewsFrom($this->pathModule . '/' . $module . '/Views', $module);
            }
        }
    }

    public function register()
    { }
}
