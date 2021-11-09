<?php

use Illuminate\Database\Seeder;
use App\House;
use Faker\Generator as Faker;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ( $i = 0; $i < 100; $i++ ) {
            $newHouse = new House();
            $newHouse->code = $faker->ean8();
            $newHouse->address = $faker->streetAddress();
            $newHouse->postal_code = $faker->postcode();
            $newHouse->city = $faker->city();
            $newHouse->state = $faker->country();
            $newHouse->sqm = $faker->numberBetween(10, 400);
            $newHouse->rooms = $faker->numberBetween(1, 10);
            $newHouse->bathrooms = $faker->numberBetween(1, 4);
            $newHouse->description = $faker->paragraph(5);
            $newHouse->date = $faker->year();
            $newHouse->price = $faker->randomFloat(2, 1000, 5000000);
            $newHouse->save();
        }
    }
}