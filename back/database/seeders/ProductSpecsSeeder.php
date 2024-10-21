<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSpecsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i<50; $i++) {
            DB::table('product_specs')->insert([
                'product_id' => $i*2,
                'specificity_id' => rand(1,4),
            ]);
        }
    }
}
