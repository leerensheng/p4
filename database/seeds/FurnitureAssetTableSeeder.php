<?php

use Illuminate\Database\Seeder;

class FurnitureAssetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('furniture_assets')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Table',
            'description' => '6x3 feet',
            'purchase_price' => '1000',
            'purchase_date' => '2016-04-20'
        ]);

        DB::table('furniture_assets')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Chair',
            'description' => 'black metal, no cushion',
            'purchase_price' => '250',
            'purchase_date' => '2016-04-20'
        ]);
    }
}
