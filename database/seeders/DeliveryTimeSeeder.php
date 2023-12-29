<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\DeliveryTime::create([
            'id' => '1',
            'curriculums_id' => '1',
            'delivery_from' => '2023-07-13 09:00',
            'delivery_to' => '2023-07-13 10:00',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '2',
            'curriculums_id' => '1',
            'delivery_from' => '2023-07-14 09:00',
            'delivery_to' => '2023-07-14 10:00',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '3',
            'curriculums_id' => '1',
            'delivery_from' => '2023-07-15 09:00',
            'delivery_to' => '2023-07-15 10:00',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '4',
            'curriculums_id' => '1',
            'delivery_from' => '2023-07-16 09:00',
            'delivery_to' => '2023-07-16 10:00',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '5',
            'curriculums_id' => '2',
            'delivery_from' => '2023-07-13 10:10',
            'delivery_to' => '2023-07-13 11:10',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '6',
            'curriculums_id' => '2',
            'delivery_from' => '2023-07-14 10:10',
            'delivery_to' => '2023-07-14 11:10',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '7',
            'curriculums_id' => '2',
            'delivery_from' => '2023-07-15 10:10',
            'delivery_to' => '2023-07-15 11:10',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '8',
            'curriculums_id' => '2',
            'delivery_from' => '2023-07-16 10:10',
            'delivery_to' => '2023-07-16 11:10',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '9',
            'curriculums_id' => '3',
            'delivery_from' => '2023-07-13 11:20',
            'delivery_to' => '2023-07-13 12:20',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '10',
            'curriculums_id' => '3',
            'delivery_from' => '2023-07-14 11:20',
            'delivery_to' => '2023-07-14 12:20',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '11',
            'curriculums_id' => '3',
            'delivery_from' => '2023-07-15 11:20',
            'delivery_to' => '2023-07-15 12:20',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '12',
            'curriculums_id' => '3',
            'delivery_from' => '2023-07-16 11:20',
            'delivery_to' => '2023-07-16 12:20',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '13',
            'curriculums_id' => '4',
            'delivery_from' => '2023-07-13 13:20',
            'delivery_to' => '2023-07-13 14:20',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '14',
            'curriculums_id' => '4',
            'delivery_from' => '2023-07-14 13:20',
            'delivery_to' => '2023-07-14 14:20',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '15',
            'curriculums_id' => '4',
            'delivery_from' => '2023-07-15 13:20',
            'delivery_to' => '2023-07-15 14:20',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '16',
            'curriculums_id' => '4',
            'delivery_from' => '2023-07-16 13:20',
            'delivery_to' => '2023-07-16 14:20',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '17',
            'curriculums_id' => '5',
            'delivery_from' => '2023-07-13 14:30',
            'delivery_to' => '2023-07-13 15:30',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '18',
            'curriculums_id' => '5',
            'delivery_from' => '2023-07-14 14:30',
            'delivery_to' => '2023-07-14 15:30',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '19',
            'curriculums_id' => '5',
            'delivery_from' => '2023-07-15 14:30',
            'delivery_to' => '2023-07-15 15:30',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '20',
            'curriculums_id' => '5',
            'delivery_from' => '2023-07-16 14:30',
            'delivery_to' => '2023-07-16 15:30',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '21',
            'curriculums_id' => '6',
            'delivery_from' => '2023-07-13 15:40',
            'delivery_to' => '2023-07-13 16:40',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '22',
            'curriculums_id' => '6',
            'delivery_from' => '2023-07-14 15:40',
            'delivery_to' => '2023-07-14 16:40',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '23',
            'curriculums_id' => '6',
            'delivery_from' => '2023-07-15 15:40',
            'delivery_to' => '2023-07-15 16:40',
        ]);

        \App\Models\DeliveryTime::create([
            'id' => '24',
            'curriculums_id' => '6',
            'delivery_from' => '2023-07-16 15:40',
            'delivery_to' => '2023-07-16 16:40',
        ]);
    }
}
