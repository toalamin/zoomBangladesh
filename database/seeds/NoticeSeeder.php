<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i < 11; $i++) :
            $notice = new App\models\Notice();
            $notice->title = $faker->title();
            $notice->description = $faker->text();
            $notice->image =  $faker->title();
            $notice->visibility = 1;
            $notice->save();
        endfor;
    }
}
