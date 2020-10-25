<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i < 11; $i++) :
            $photo = new App\models\Photo();
            $photo->title = $faker->title();
            $photo->image =  $faker->image();
            $photo->visibility = 1;
            $photo->save();
        endfor;
    }
}
