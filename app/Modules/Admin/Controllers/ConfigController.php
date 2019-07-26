<?php

namespace App\Modules\Admin\Controllers;

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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $configs = Config::where(['name' => 'search-data'])->first();
        return view('Admin::config.config', [
            'configs' => $configs
        ]);
    }

    public function edit()
    { }
}
