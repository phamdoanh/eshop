<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//thư viện để dùng dât fake
use  Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
        for($i=0; $i<20;$i++){
            $data =[
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'address'=>$faker->address
            ];
            //truy cập vào đb và thêm dữ liệu vào
            DB::table('users')->insert($data);
        }
    }
}
