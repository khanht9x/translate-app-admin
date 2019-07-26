<?php

use Illuminate\Database\Seeder;
use App\Modules\User\Models\User;
use App\Modules\Role\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $roleCustomer = Role::where(['name' => 'customer'])->first();
        for ($i = 0; $i < 50; $i++) {
            $data = [
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'phone' => '09xxxxxx',
                'password' => bcrypt(123456),
                'created_at' => now(),
                'updated_at' => now()
            ];

            $user = User::create($data);
            $user->roles()->attach($roleCustomer->id, [
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
