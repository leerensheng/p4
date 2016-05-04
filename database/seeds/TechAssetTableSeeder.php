<?php

use Illuminate\Database\Seeder;

class TechAssetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tech_assets')->insert([
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'serial_number' => 'C1MJ36GUDTY4',
            'manufacturer' => 'Apple',
            'model' => 'MacBook Pro (13-inch, Mid 2012)',
            'purchase_date' => '2013-05-01',
            'purchase_price' => '10000',
            'cpu' => '2.9 GHz Intel Core i7',
            'ram' => '16',
            'storage_size' => '500',
            'warranty_expiration' => '2014-05-01'
        ]);

        DB::table('tech_assets')->insert([
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'serial_number' => 'D1MJ36GUDTY4',
            'manufacturer' => 'Apple',
            'model' => 'MacBook Pro (13-inch, Mid 2012)',
            'purchase_date' => '2013-05-01',
            'purchase_price' => '10000',
            'cpu' => '2.9 GHz Intel Core i7',
            'ram' => '16',
            'storage_size' => '500',
            'warranty_expiration' => '2014-05-01'
        ]);
    }
}
