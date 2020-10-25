<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<10;$i++):
            $mission = new App\models\Mission();
            $mission->title = $faker->jobTitle;
            $mission->description = $faker->realText(1500);
            $mission->visibility = 1;
            $mission->save();
        endfor;
    }
}
