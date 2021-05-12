<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
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
                'name' => 'Bhent',
                'website' => 'https://bhent.net/',
                'proof_of_residence' => 'https://bhent.net/',
                'certificate_of_incorporation' => 'https://bhent.net/',
                'country_id' => 38,
                'user_id' => 2
            ]
        ];

       // Company::insert($data);
    }
}
