<?php

namespace Database\Seeders;

use App\Models\Vat;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vat::create([
            'name' => 'Taxa normal 23%',
            'tax_percent' => '23'
        ]);

        Vat::create([
            'name' => 'Taxa intermédia 13%',
            'tax_percent' => '13'
        ]);

        Vat::create([
            'name' => 'Taxa reduzida 6%',
            'tax_percent' => '6'
        ]);
    }
}
