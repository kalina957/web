<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'itemName' => 'PaintingGuernica',
                'user_id' => 2,
                'description' => 'Black & White shapes',
                'price' => 300.00,
                'available' => false,
                'image' => 'Guernica.jpeg',
                'type' => 'painting'
            ],
            [
                'user_id' => 1,
                'itemName' => 'LaVie',
                'description' => 'Oil painting of people',
                'price' => 200.00,
                'available' => true,
                'image' => 'lavie.jpeg',
                'type' => 'photograph'
            ]
        ]);
    }
}
