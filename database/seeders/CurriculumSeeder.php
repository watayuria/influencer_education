<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Curriculum::create([
            'id' => '1',
            'title' => '授業タイトル1',
            'thumbnail' => 'storage/public/Thumbnail/Thumbnail.jpg',
            'description' => 'これは授業タイトル1です。',
            'video_url' => 'https://xxx',
            'alway_delivery_flg' => '0',
            'classes_id' => '1',
        ]);

        \App\Models\Curriculum::create([
            'id' => '2',
            'title' => '授業タイトル2',
            'thumbnail' => 'storage/public/Thumbnail/Thumbnail.jpg',
            'description' => 'これは授業タイトル2です。',
            'video_url' => 'https://xxx',
            'alway_delivery_flg' => '0',
            'classes_id' => '1',
        ]);

        \App\Models\Curriculum::create([
            'id' => '3',
            'title' => '授業タイトル3',
            'thumbnail' => 'storage/public/Thumbnail/Thumbnail.jpg',
            'description' => 'これは授業タイトル3です。',
            'video_url' => 'https://xxx',
            'alway_delivery_flg' => '0',
            'classes_id' => '1',
        ]);

        \App\Models\Curriculum::create([
            'id' => '4',
            'title' => '授業タイトル4',
            'thumbnail' => 'storage/public/Thumbnail/Thumbnail.jpg',
            'description' => 'これは授業タイトル4です。',
            'video_url' => 'https://xxx',
            'alway_delivery_flg' => '0',
            'classes_id' => '1',
        ]);

        \App\Models\Curriculum::create([
            'id' => '5',
            'title' => '授業タイトル5',
            'thumbnail' => 'storage/public/Thumbnail/Thumbnail.jpg',
            'description' => 'これは授業タイトル5です。',
            'video_url' => 'https://xxx',
            'alway_delivery_flg' => '0',
            'classes_id' => '1',
        ]);

        \App\Models\Curriculum::create([
            'id' => '6',
            'title' => '授業タイトル6',
            'thumbnail' => 'storage/public/Thumbnail/Thumbnail.jpg',
            'description' => 'これは授業タイトル6です。',
            'video_url' => 'https://xxx',
            'alway_delivery_flg' => '0',
            'classes_id' => '1',
        ]);
        }
}
