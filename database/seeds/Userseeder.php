<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $Faker)
    {
        $user = new App\User();
        $user->name = $Faker->firstNameMale;
        $user->branch_id = rand(1,5);
        $user->email = 'toalaminbd@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
    }
}
