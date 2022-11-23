<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class MobileTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobile_types')->insert([
            ['mobileName'=>'Samsung galaxy s22'],
            ['mobileName'=>'Samsung A3s'],
            ['mobileName'=>'Samsung galaxy s20'],
            ['mobileName'=>'Samsung s10 plus'],
            ['mobileName'=>'Samsung note 20 plus'],
            ['mobileName'=>'Sony xz2'],
            ['mobileName'=>'sony xz2 premium'],
            ['mobileName'=>'sony xz3'],
            ['mobileName'=>'Apple Iphone 6s'],
            ['mobileName'=>'Apple Iphone 6 plus'],
            ['mobileName'=>'Apple Iphone 7 plus '],
            ['mobileName'=>'Apple Iphone 8 plus'],
            ['mobileName'=>'Apple Iphone x'],
            ['mobileName'=>'Apple Iphone xr'],
            ['mobileName'=>'Apple Iphone SE'],
            ['mobileName'=>'Apple Iphone 11 pro'],
            ['mobileName'=>'Apple Iphone 13 promax'],
            ['mobileName'=>'Apple Iphone 14'],
            ['mobileName'=>'Apple Iphone 14 pro'],
            ['mobileName'=>'Apple Iphone 14 promax']
        ]);
    }
}
