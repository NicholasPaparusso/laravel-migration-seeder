<?php

namespace Database\Seeders;

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
        for($i = 0; $i < 9; $i++ ){
            $newTrain = new Train();

            $newTrain->agency = $faker->name() ;
            $newTrain->departure_station = $faker->address();
            $newTrain->arrival_station = $faker->address();
            $newTrain->departure_time = $faker->dateTime() ;
            $newTrain->arrival_time = $faker->dateTime() ;
            $newTrain->code = $faker->bothify('???###?##') ;
            $newTrain->carriages_amount = $faker->randomNumber(2, false) ;
            $newTrain->is_in_time = $faker-> faker->numberBetween(0, 1) ;

        }
    }
}
