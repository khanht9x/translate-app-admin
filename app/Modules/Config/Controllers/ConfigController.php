<?php

namespace App\Modules\Config\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Config\Models\Config;

class ConfigController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function detail()
    {
        $configs = Config::where(['name' => 'data-search'])->first();
        return response()->json([
            'status' => 'success',
            'data' => $configs,
        ]);
    }
}
