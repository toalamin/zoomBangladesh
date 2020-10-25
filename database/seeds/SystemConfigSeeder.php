<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class SystemConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $sConfig = new App\models\SystemConfig();
        $sConfig->website = 'www.sadullahpursomoti.com';
        $sConfig->name = $faker->name;
        $sConfig->email = $faker->safeEmail;
        $sConfig->phone = $faker->phoneNumber;
        $sConfig->address = $faker->address;
        $sConfig->fb_link = 'https://www.facebook.com/'.$faker->name;
        $sConfig->instagram_link = 'https://www.instagram.com/'.$faker->name;
        $sConfig->logo = 'http://lorempixel.com/100/100/';
        $sConfig->save();
    }
}
