<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\User;
use \Faker\Factory  as Faker;   

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        for($i=1; $i<=50; $i++)
      {
       $User  =new  User; 
       $User->name=$fake ->name;
       $User->gender="M";
       $User->gmail=$faker   ->gmail;
       $User->phone=$faker->Phone;
       $User->address=$faker ->address;
       $User->country=$faker ->country;
       $User->state=$faker   ->state;
        $User->save();
      }  
    }
}
