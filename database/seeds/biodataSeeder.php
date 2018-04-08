<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\biodata;

class biodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Faker = Factory::create();

        foreach (range(1,10) as $i) 
        {
        	biodata::create([
        		'nama'=>$Faker->name,
        		'hp'=>$Faker->phoneNumber,
        		'alamat'=>$Faker->address
        	]);
        }
    }
}
