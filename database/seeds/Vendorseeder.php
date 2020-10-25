<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class Vendorseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $Faker)
    {
        for ($i = 0; $i < 10; $i++) :
            $vendor = new App\models\Vendor();
            $vendor->vendorid = 'VID' . rand(10000, 20000);
            $vendor->name = $Faker->firstNameMale;
            $vendor->email = $Faker->email;
            $vendor->phone = $Faker->phoneNumber;
            $vendor->address = $Faker->address;
            $vendor->status = 1;
            $vendor->branch_id = rand(1,5);
            $vendor->save();

        endfor;
    }
}
