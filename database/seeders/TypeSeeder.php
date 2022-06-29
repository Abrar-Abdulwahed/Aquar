<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeSeeder extends Seeder
{
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Rent',
        ]);

        DB::table('types')->insert([
            'name' => 'Sell',
        ]);
    }
}
