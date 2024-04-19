<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videos')->insert([
            'title' => 'Car from the future',
            'video' => '/videos/Auto.mp4',
            'thumbnail' => '/videos/Thumbnails/Auto.png',
            'user' => 'eddi',
            'views' => '34k views - 12 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('videos')->insert([
            'title' => 'Car in Race - FAST!!!',
            'video' => '/videos/Car.mp4',
            'thumbnail' => '/videos/Thumbnails/Car.png',
            'user' => 'hossam',
            'views' => '89k views - 2 months ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('videos')->insert([
            'title' => 'Cool red car',
            'video' => '/videos/Car1.mp4',
            'thumbnail' => '/videos/Thumbnails/Car1.png',
            'user' => 'djennad',
            'views' => '4k views - 6 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
