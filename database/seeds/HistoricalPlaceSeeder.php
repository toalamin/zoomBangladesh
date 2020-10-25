<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HistoricalPlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i=0;$i<6;$i++):
            $historicalPlace = new App\models\HistoricalPlace();
            $historicalPlace->title = $faker->jobTitle;
            $historicalPlace->description = $faker->realText(500);
            $historicalPlace->image = 'http://lorempixel.com/300/400/animals/';
            $historicalPlace->visibility = 1;
            $historicalPlace->save();
        endfor;

        //http://lorempixel.com/400/200/


    }
}
