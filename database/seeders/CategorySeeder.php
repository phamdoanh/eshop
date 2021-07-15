<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//thư viện để dùng dât fake
use  Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();

        //fake 10 categories
        for($i=0; $i<10; $i++){
            $data = [
                'name'=>$faker->name,
            ];
        }

        DB::table('categories')->insert($data);
    }
}
