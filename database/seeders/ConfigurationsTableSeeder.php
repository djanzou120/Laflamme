<?php

namespace Database\Seeders;

use App\Models\Configuration;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class ConfigurationsTableSeeder extends Seeder
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
                'COINBASE_API_KEY' => '189d999c-8ea9-4802-a62e-77819abd7a40',
                'COINBASE_WEBHOOK_SECRET' => '8f94d18e-04cc-4276-89ac-b2a694ee9e41',
                'PAYPAL_CLIENT_ID' => 'ARYsqyipfHu_u7NPf6NIsmgp0SMzOGwRleWFKmYx_r_PdDJ26xpHFJyoMawKpas1M9pFzfamGGqTxzfS',
                'PAYPAL_CLIENT_SECRET' => 'EBBRWrAxSisHUEcp5mfx_UF8z2ZAWrkgaqYmm9GyMILrPOj66sJPhj5w7SuRNXVY_fY2-ssUzQrOULGf',
                'IBAN' => bcrypt('CM21 10033 05212 12002007852 34'),
                'CODE_SWIFT' => bcrypt('UNAFCMCX'),
                'SMTP_EMAIL' => 'fortuna.trading@email.io',
                'SMTP_PASSWORD' => 'd64e9381aa7893',
            ],
        ];

        Configuration::insert($data);
    }
}
