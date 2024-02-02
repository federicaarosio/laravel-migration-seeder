<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker):void
    {
         for ($i=0; $i < 20; $i++) { 
            $actualTrain = new Train();
            $actualTrain->agency = $faker->sentence(3, true);
            $actualTrain->departure_station = $faker->sentence(5, true);
            $actualTrain->arrival_station = $faker->sentence(5, true);
            $actualTrain->departure_time = $faker->dateTime();
            $actualTrain->arrival_time = $faker->dateTime();
            $actualTrain->train_code = $faker->randomNumber(6, true);
            $actualTrain->wagon_number = $faker->randomNumber(2, false);
            $actualTrain->on_time = $faker->boolean();
            $actualTrain->deleted = $faker->boolean();

            $actualTrain->save();
        }
    }
}
