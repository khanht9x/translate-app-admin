<?php

use Illuminate\Database\Seeder;
use App\Modules\Role\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'customer',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Role::truncate();
        Role::insert($data);
    }
}
