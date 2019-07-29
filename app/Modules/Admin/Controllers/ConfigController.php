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
        $configs = Config::where(['name' => 'data-search'])->first();
        $configs = json_decode($configs->value);
        return view('Admin::config.detail', [
            'configs' => $configs
        ]);
    }

    public function upload()
    {
        return view('Admin::config.upload');
    }

    public function edit()
    {
        $results = [];
        Excel::load(request()->file('file'), function ($reader) use (&$results) {
            $reader->each(function ($row) use (&$results) {
                if (!empty($row->tieng_trung) && !empty($row->tieng_viet)) {
                    $results[] = array(
                        'key' => $row->tieng_trung,
                        'value' => $row->tieng_viet
                    );
                }
            });
        });

        Config::updateOrInsert([
            'name' => 'data-search',
        ], [
            'name' => 'data-search',
            'value' => json_encode($results)
        ]);

        return redirect()->route('admin.config.detail');
    }
}
