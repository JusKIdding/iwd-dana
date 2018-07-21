<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item')->insert([
            'item_name' => str_random(10),
            'item_pic' => 'https://images.pexels.com/photos/19090/pexels-photo.jpg',
            'item_count' => 5
        ]);
    }
}
