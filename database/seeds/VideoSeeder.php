<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i < 11; $i++) :
            $video = new App\models\Video();
            $video->title = $faker->title();
            $video->link =  $faker->title();
            $video->visibility = 1;
            $video->save();
        endfor;
    }
}
