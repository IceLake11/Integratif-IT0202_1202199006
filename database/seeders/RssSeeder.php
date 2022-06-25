<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rss;

class RssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rss::create([
            // 'name' => 'Motorsoprt',
            // 'url' => "http://rss.cnn.com/rss/edition_motorsport.rss",

            // 'name' => 'Sport Insider',
            // 'url' => "https://esportsinsider.com/feed/",
            'name' => 'NBA News',
            'url' => "https://sports.ndtv.com/rss/nba",
        ]);
    }
}
