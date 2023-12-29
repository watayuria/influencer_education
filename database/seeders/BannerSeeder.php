<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Banner::create([
            'id' => '1',
            'image' => 'storage/Banner/Banner1.jpg',
        ]);

        \App\Models\Banner::create([
            'id' => '2',
            'image' => 'storage/Banner/Banner2.jpg',
        ]);

        \App\Models\Banner::create([
            'id' => '3',
            'image' => 'storage/Banner/Banner3.jpg',
        ]);

        \App\Models\Banner::create([
            'id' => '4',
            'image' => 'storage/Banner/Banner4.jpg',
        ]);
    }
}
