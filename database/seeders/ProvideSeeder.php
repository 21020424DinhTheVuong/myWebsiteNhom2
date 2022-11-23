<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ProvideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provides')->insert([
            ['name'=>'Samsung', 'address'=>'Hàn Quoc', 'phone'=>'082423472384', 'email'=>'Samsung@gmail.com'],
            ['name'=>'Xiaomi', 'address'=>'Trung Quoc', 'phone'=>'03454535453', 'email'=>'Xiaomi@gmail.com'],
            ['name'=>'Oppo', 'address'=>'Trung Quoc', 'phone'=>'03454535454', 'email'=>'Oppo@gmail.com'],
            ['name'=>'Sony', 'address'=>'Nhật Bản', 'phone'=>'0345423434', 'email'=>'Sony@gmail.com'],
            ['name'=>'LG', 'address'=>'Nhật Bản', 'phone'=>'03454524242', 'email'=>'LG@gmail.com'],
            ['name'=>'Vivo', 'address'=>'Trung Quoc', 'phone'=>'03454534454', 'email'=>'Vivo@gmail.com'],
            ['name'=>'Apple', 'address'=>'USA', 'phone'=>'0345450974', 'email'=>'Apple@gmail.com'],
        ]);
    }
}
