<?php

namespace Database\Seeders;

use App\Models\Method;
use Illuminate\Database\Seeder;

class MethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => Method::PAYPAL, 'label' => 'Paypal'],
            ['id' => Method::VIREMENT, 'label' => 'Virement Bancaire'],
            ['id' => Method::COINBASE, 'label' => 'BitPay'],
        ];

        Method::insert($data);
    }
}
