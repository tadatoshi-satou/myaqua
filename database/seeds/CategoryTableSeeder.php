<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            'name' => '熱帯魚',
        ]);
        DB::table('categories')->insert([
            'name' => 'アクア用品',
        ]);
        DB::table('categories')->insert([
            'name' => '水草・流木・石',
        ]);
    }
}
