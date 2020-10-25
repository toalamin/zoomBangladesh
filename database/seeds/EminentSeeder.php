<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class EminentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) :
            $eminentPleople =  new App\models\EminentPeople();
            $eminentPleople->name = $faker->name;
            $eminentPleople->email = $faker->unique()->safeEmail;
            $eminentPleople->short_description = $faker->text;
            $eminentPleople->phone = $faker->phoneNumber;
            $eminentPleople->designation = $faker->jobTitle;
            $eminentPleople->image = 'http://lorempixel.com/600/600/business/';
            $eminentPleople->fb_link = 'https://www.facebook.com/' . $faker->name;
            $eminentPleople->instagram = 'https://www.instagram.com/' . $faker->name;
            $eminentPleople->linkedin = 'https://www.linkedin.com/in/toalamin/' . $faker->name;
            $eminentPleople->visibility = 1;
            $eminentPleople->save();
        endfor;
    }
}
