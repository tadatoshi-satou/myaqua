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
           'category_id' => 1,
           'name' => 'アフリカンランプアイ',
           'detail' => 'Sサイズ(5匹)',
           'fee' => 850,
           'imgpath' => 'ranpu.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'アフリカンランプアイ',
           'detail' => 'Sサイズ(10匹)',
           'fee' => 1000,
           'imgpath' => 'ranpu.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'アフリカンランプアイ',
           'detail' => 'Sサイズ(20匹)',
           'fee' => 1550,
           'imgpath' => 'ranpu.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'アフリカンランプアイ',
           'detail' => 'Sサイズ(40匹)',
           'fee' => 2550,
           'imgpath' => 'ranpu.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'アフリカンランプアイ',
           'detail' => 'Sサイズ(40匹)',
           'fee' => 5550,
           'imgpath' => 'ranpu.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'オトシンクルス',
           'detail' => '(3匹)',
           'fee' => 850,
           'imgpath' => 'otosin.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'オトシンクルス',
           'detail' => '(6匹)',
           'fee' => 1550,
           'imgpath' => 'otosin.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'ネオンテトラ',
           'detail' => 'Lサイズ(3匹)',
           'fee' => 550,
           'imgpath' => 'neon.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'ネオンテトラ',
           'detail' => 'Lサイズ(5匹)',
           'fee' => 850,
           'imgpath' => 'neon.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'ネオンテトラ',
           'detail' => 'Lサイズ(10匹)',
           'fee' => 1050,
           'imgpath' => 'neon.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'ベタトラディショナル',
           'detail' => '青系(1匹)',
           'fee' => 800,
           'imgpath' => 'beta.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'ミックスプラティ',
           'detail' => '(4匹)',
           'fee' => 850,
           'imgpath' => 'pura.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'ミックスプラティ',
           'detail' => '(12匹)',
           'fee' => 1500,
           'imgpath' => 'pura.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'カージナルテトラ',
           'detail' => '(3匹)',
           'fee' => 850,
           'imgpath' => 'kaji.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'カージナルテトラ',
           'detail' => '(5匹)',
           'fee' => 1050,
           'imgpath' => 'kaji.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'カージナルテトラ',
           'detail' => '(10匹)',
           'fee' => 1450,
           'imgpath' => 'kaji.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'トランスルーセントグラスキャット',
           'detail' => '(2匹)',
           'fee' => 1000,
           'imgpath' => 'toran.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'トランスルーセントグラスキャット',
           'detail' => '(5匹)',
           'fee' => 2000,
           'imgpath' => 'toran.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'コリドラスエネウス',
           'detail' => '(3匹)',
           'fee' => 850,
           'imgpath' => 'kori.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 1,
           'name' => 'コリドラスエネウス',
           'detail' => '(5匹)',
           'fee' => 1100,
           'imgpath' => 'kori.jpg',
       ]);
        DB::table('products')->insert([
           'category_id' => 2,
           'name' => 'GEX グラステリア サイレント 200キューブH',
           'detail' => '20cmキューブ水槽 水槽セット',
           'fee' => 2780,
           'imgpath' => 'gex20.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 2,
           'name' => 'GEX グラステリア サイレント 360スリムH',
           'detail' => '36cmスリム水槽 水槽セット 初心者',
           'fee' => 3656,
           'imgpath' => 'gex36.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 2,
           'name' => 'GEX グラステリア アクアキャンバス',
           'detail' => 'サイレントセット450スリム',
           'fee' => 8860,
           'imgpath' => 'gex45.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 2,
           'name' => 'GEX ラピレスRV60GT LEDセット',
           'detail' => '水槽セット アクアリウム',
           'fee' => 11763,
           'imgpath' => 'gex60.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 2,
           'name' => 'GEX ラピレスRV90 LEDセット',
           'detail' => '90cm水槽セット',
           'fee' => 32592,
           'imgpath' => 'gex90.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 2,
           'name' => 'レッドシー Fresher 130 ホワイト',
           'detail' => '60cm水槽 キャビネットセット',
           'fee' => 105000,
           'imgpath' => 'cabi60.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 2,
           'name' => 'レッドシー Fresher 200 ホワイト',
           'detail' => '90cm水槽 キャビネットセット',
           'fee' => 145000,
           'imgpath' => 'cabi90.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 2,
           'name' => 'エーハイム クラシックフィルター 2213',
           'detail' => 'ろ材付きセット 水槽用外部フィルター',
           'fee' => 9480,
           'imgpath' => 'eheim2213.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 2,
           'name' => 'サプリソイル ノーマル',
           'detail' => '3リットル',
           'fee' => 1130,
           'imgpath' => 'soil3.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 2,
           'name' => 'サプリソイル パウダー',
           'detail' => '8リットル',
           'fee' => 2026,
           'imgpath' => 'soil8.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 3,
           'name' => 'ロタラ',
           'detail' => '10本',
           'fee' => 800,
           'imgpath' => 'rotara.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 3,
           'name' => 'ヘアーグラス',
           'detail' => '3個',
           'fee' => 2050,
           'imgpath' => 'hea.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 3,
           'name' => '南米ウィローモス',
           'detail' => '1パック',
           'fee' => 950,
           'imgpath' => 'mosu.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 3,
           'name' => 'ポゴステモン',
           'detail' => '1株',
           'fee' => 1150,
           'imgpath' => 'pogo.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 3,
           'name' => '流木',
           'detail' => 'Sサイズ',
           'fee' => 420,
           'imgpath' => 'rutus.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 3,
           'name' => '流木',
           'detail' => 'Mサイズ',
           'fee' => 560,
           'imgpath' => 'rutum.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 3,
           'name' => '流木',
           'detail' => 'Lサイズ',
           'fee' => 830,
           'imgpath' => 'rutul.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 3,
           'name' => '魔光石',
           'detail' => '3kg',
           'fee' => 3198,
           'imgpath' => 'makou.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 3,
           'name' => '風山石',
           'detail' => '5kg',
           'fee' => 3320,
           'imgpath' => 'fuzan.jpg',
       ]);
       DB::table('products')->insert([
           'category_id' => 3,
           'name' => '溶岩石',
           'detail' => '3個',
           'fee' => 1350,
           'imgpath' => 'yogan.jpg',
       ]);
       
       
    }
}
