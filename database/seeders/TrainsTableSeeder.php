<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 6; $i++ ){
            $newTrain = new Train();

            $newTrain->agency = $faker->company() ;
            $newTrain->departure_station = $faker->streetName();
            $newTrain->arrival_station = $faker->streetName();
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime() ;
            $newTrain->code = $faker->bothify('???###?##') ;
            $newTrain->carriages_amount = $faker->numberBetween(5,20);
            $newTrain->is_in_time = $faker->boolean() ;
            $newTrain->save();
        }
    }
}
