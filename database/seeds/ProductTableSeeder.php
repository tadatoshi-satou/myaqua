<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
           'name' => 'アフリカンランプアイ',
           'detail' => 'Sサイズ(5匹)',
           'fee' => 850,
           'imgpath' => 'ranpu.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'アフリカンランプアイ',
           'detail' => 'Sサイズ(10匹)',
           'fee' => 1000,
           'imgpath' => 'ranpu.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'アフリカンランプアイ',
           'detail' => 'Sサイズ(20匹)',
           'fee' => 1550,
           'imgpath' => 'ranpu.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'アフリカンランプアイ',
           'detail' => 'Sサイズ(40匹)',
           'fee' => 2550,
           'imgpath' => 'ranpu.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'アフリカンランプアイ',
           'detail' => 'Sサイズ(40匹)',
           'fee' => 5550,
           'imgpath' => 'ranpu.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'オトシンクルス',
           'detail' => '(3匹)',
           'fee' => 850,
           'imgpath' => 'otosin.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'オトシンクルス',
           'detail' => '(6匹)',
           'fee' => 1550,
           'imgpath' => 'otosin.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'ネオンテトラ',
           'detail' => 'Lサイズ(3匹)',
           'fee' => 550,
           'imgpath' => 'neon.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'ネオンテトラ',
           'detail' => 'Lサイズ(5匹)',
           'fee' => 850,
           'imgpath' => 'neon.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'ネオンテトラ',
           'detail' => 'Lサイズ(10匹)',
           'fee' => 1050,
           'imgpath' => 'neon.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'ベタトラディショナル',
           'detail' => '青系(1匹)',
           'fee' => 800,
           'imgpath' => 'beta.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'ミックスプラティ',
           'detail' => '(4匹)',
           'fee' => 850,
           'imgpath' => 'pura.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'ミックスプラティ',
           'detail' => '(12匹)',
           'fee' => 1500,
           'imgpath' => 'pura.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'カージナルテトラ',
           'detail' => '(3匹)',
           'fee' => 850,
           'imgpath' => 'kaji.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'カージナルテトラ',
           'detail' => '(5匹)',
           'fee' => 1050,
           'imgpath' => 'kaji.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'カージナルテトラ',
           'detail' => '(10匹)',
           'fee' => 1450,
           'imgpath' => 'kaji.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'トランスルーセントグラスキャット',
           'detail' => '(2匹)',
           'fee' => 1000,
           'imgpath' => 'toran.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'トランスルーセントグラスキャット',
           'detail' => '(5匹)',
           'fee' => 2000,
           'imgpath' => 'toran.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'コリドラスエネウス',
           'detail' => '(3匹)',
           'fee' => 850,
           'imgpath' => 'kori.jpg',
       ]);
        DB::table('products')->insert([
           'name' => 'コリドラスエネウス',
           'detail' => '(5匹)',
           'fee' => 1100,
           'imgpath' => 'kori.jpg',
       ]);
       
    }
}
