<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//thư viện để dùng dât fake
use  Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();

        //fake 20 bản ghi
        for($i=0; $i<10;$i++){
            $data =[
                'name'=>$faker->name,
                'price'=>$faker->randomNumber(1,10),
                'quantity'=> $faker->randomNumber(1,10),
                'category_id'=>$faker->randomNumber(1,10),
                'image'=>$faker->image
            ];
            //truy cập vào đb và thêm dữ liệu vào
            DB::table('products')->insert($data);
        }
    }
}
