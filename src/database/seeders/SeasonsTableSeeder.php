<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('seasons')->insert([
            ['name' => '夏'],
            ['name' => '春'],
            ['name' => '秋'],
            ['name' => '冬']
         ]);
    }
}