<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<10;$i++):
            $slider = new App\models\Slider();
            $slider->title = $faker->jobTitle;
            $slider->description = $faker->realText(500);
            $slider->image = 'http://lorempixel.com/1920/1080/nature/';
            $slider->visibility = 1;
            $slider->save();
        endfor;
    }
}
