<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class HotelSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 30; $i++) { 
            \DB::table('hotels')->insert(
                array(
                    'created_at'=> date('Y-m-d H:m:s'),
                    'updated_at'=> date('Y-m-d H:m:s'),
                    'nombre'=>$faker-> streetName,
                    'costo'=>$faker->numberBetween(100000, 2000000),
                    'estrellas'=>$faker->numberBetween(1,5),
                    'direccion'=>$faker->address,
                    'ciudad'=>$faker->city
                )
            );
        }
    }
}
