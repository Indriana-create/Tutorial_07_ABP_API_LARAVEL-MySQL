<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variants')->insert([
            'name' => "Varian A",
            'description' => "Desc A",
            'processor' => "Proc A",
            'memory' => "Mem A",
            'storage' => "Storage A",
            'product_id' => 1,
        ]);

        DB::table('variants')->insert([
            'name' => "Varian B",
            'description' => "Desc B",
            'processor' => "Proc B",
            'memory' => "Mem B",
            'storage' => "Storage B",
            'product_id' => 1,
        ]);

        DB::table('variants')->insert([
            'name' => "Varian C",
            'description' => "Desc C",
            'processor' => "Proc C",
            'memory' => "Mem C",
            'storage' => "Storage C",
            'product_id' => 2,
        ]);

        DB::table('variants')->insert([
            'name' => "Varian D",
            'description' => "Desc D",
            'processor' => "Proc D",
            'memory' => "Mem D",
            'storage' => "Storage D",
            'product_id' => 3,
        ]);

        DB::table('variants')->insert([
            'name' => "Varian E",
            'description' => "Desc E",
            'processor' => "Proc E",
            'memory' => "Mem E",
            'storage' => "Storage E",
            'product_id' => 4,
        ]);
    }
}
