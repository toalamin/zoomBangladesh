<?php


use App\models\Member;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=1;$i<100;$i++):
           $member =  new Member();
           $member->full_name = $faker->firstName.'-'.$faker->lastName;
           $member->email= $faker->safeEmail;
           $member->phone = $faker->phoneNumber;
           $member->present_address = $faker->address;
           $member->permanent_address = $faker->address;
           $member->facebook = 'htt://facebook.com/'.$faker->name();
           $member->instagram = 'http://instragram.com/'.$faker->name;
           $member->linked = 'http://linkedin.com/'.$faker->lastName;
           $member->type = rand(1,2);
           $member->image = 'http://lorempixel.com/200/200/cats/';
           $member->education = $faker->company;
           $member->last_institution = $faker->company;
           $member->designation = $faker->company;
           $member->visibility = 1;
           $member->save();
        endfor;
    }
}
