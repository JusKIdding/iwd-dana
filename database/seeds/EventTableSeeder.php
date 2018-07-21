<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event')->insert([
            'event_name' => str_random(10),
            'event_details' => str_random(10),
            'event_date' => str_random(10),
            'event_time' => str_random(10),
            'event_location' => str_random(10),
            'event_distance' => str_random(10),
            'contact_info_social_facebook' => str_random(10),
            'event_thumbnail' => 'https://d2z0k43lzfi12d.cloudfront.net/blog/vcdn226/wp-content/uploads/2017/08/08.08._Running-ABC.jpg',
            'contact_info_social_twitter' => str_random(10),

        ]);
    }
}
