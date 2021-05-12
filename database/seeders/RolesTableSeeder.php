<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => Role::ROOT, 'label' => 'Root', 'rank' => 100],
            ['id' => Role::ADMIN, 'label' => 'Admin', 'rank' => 50],
            ['id' => Role::MEMBER, 'label' => 'MEMBER', 'rank' => 25],
        ];

        Role::insert($data);
    }
}
