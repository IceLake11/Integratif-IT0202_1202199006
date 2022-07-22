<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            // 'name' => 'Tekno',
            // 'url' => "https://www.suara.com/rss/tekno"
            // 'name' => 'Otomotif',
            // 'url' => "https://www.suara.com/rss/otomotif"
            'name' => 'Lifestyle',
            'url' => "https://www.suara.com/rss/lifestyle"
        ]);    
    }
}
