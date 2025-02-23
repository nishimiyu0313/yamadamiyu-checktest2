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
            ['name' => 'summer'],
            ['name' => 'spring'],
            ['name' => 'fall'],
            ['name' => 'winter']
         ]);
    }
}