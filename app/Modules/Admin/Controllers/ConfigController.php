<?php

namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Config\Models\Config;
use Excel;


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
    public function show()
    {
        $configs = Config::where(['name' => 'search-data'])->first();
        return view('Admin::config.config', [
            'configs' => $configs
        ]);
    }

    public function upload()
    {
        return view('admin.config.upload');
    }

    public function edit()
    {
        $results = [];
        Excel::load(request()->file('file'), function ($reader) use (&$results) {
            $reader->each(function ($row) use (&$results) {
                if (!empty($row->tieng_trung) && !empty($row->tieng_viet)) {
                    $results[] = array(
                        $row->tieng_trung => $row->tieng_viet
                    );
                }
            });
        });

        Config::create([
            'name' => 'data-search',
            'value' => json_encode($results)
        ]);
    }
}
