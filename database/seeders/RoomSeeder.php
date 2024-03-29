<?php

namespace Database\Seeders;
use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 50 ; $i++) {
            $room = Room::create([
                'id' => $faker->unique()->numberBetween($min = 100, $max = 200),
                'name' => $faker->word,
                'floor'=> $faker->numberBetween($min = 1, $max = 3),
                'capacity' => $faker->numberBetween($min = 30, $max = 100),
                'building' => 'FTUMJ',
            ]);
        }
    }
}
