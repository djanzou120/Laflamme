<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'first_name' => 'admin',
                'last_name' => 'ADMIN',
                'email' => 'admin@bhent.net',
                'password' => bcrypt('password'),
                'role_id' => Role::ADMIN,
            ],
            [
                'id' => 2,
                'first_name' => 'member',
                'last_name' => 'MEMBER',
                'email' => 'member@bhent.net',
                'password' => bcrypt('password'),
                'role_id' => Role::MEMBER,
            ],
        ];

        User::insert($data);
    }
}
