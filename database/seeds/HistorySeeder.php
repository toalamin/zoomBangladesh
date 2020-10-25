<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
            $historicalPlace = new App\models\History();
            $historicalPlace->title = $faker->jobTitle;
            $historicalPlace->description = $faker->realText(1100);
            $historicalPlace->image = 'http://lorempixel.com/500/400/nature/';
            $historicalPlace->visibility = 1;
            $historicalPlace->save();
       

    }
}
