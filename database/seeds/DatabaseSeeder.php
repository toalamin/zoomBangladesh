<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         $this->call(Userseeder::class);
         $this->call(EminentSeeder::class);
         $this->call(HistoricalPlaceSeeder::class);
         $this->call(HistorySeeder::class);
         $this->call(MissionSeeder::class);
         $this->call(SliderSeeder::class);
         $this->call(SystemConfigSeeder::class);
         $this->call(NoticeSeeder::class);
         $this->call(UpdateSeeder::class);
         $this->call(PhotoSeeder::class);
         $this->call(VideoSeeder::class);
         $this->call(MemberSeeder::class);
    
    }
}
