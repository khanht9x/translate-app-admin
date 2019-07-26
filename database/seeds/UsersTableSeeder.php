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
        $this->createUserAdmin();
        $this->createUserCustomer();
        // Customer
    }

    public function createUserAdmin()
    {
        // Admin
        $roleCustomer = Role::where(['name' => 'admin'])->first();
        $user = User::create([
            'name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'phone' => '09xxxxxx',
            'password' => bcrypt(123456),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user->roles()->attach($roleCustomer->id, [
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    public function createUserCustomer()
    {
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
