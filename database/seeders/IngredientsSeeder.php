<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        DB::table('ingredients')->truncate();
        
        DB::table('ingredients')->insert([
            [
                'category' => '1',
                'name' => '白米',
                'protein' => 0.0,
                'fat' => 0.0,
                'carbohydrate' => 0.0,
            ],
            [
                'category' => '2',
                'name' => '鶏むね肉（皮つき）',
                'protein' => 0.213,
                'fat' => 0.059,
                'carbohydrate' => 0.001,
            ],
            [
                'category' => '2',
                'name' => '鶏むね肉（皮なし）',
                'protein' => 0.233,
                'fat' => 0.019,
                'carbohydrate' => 0.001,
            ],
            [
                'category' => '2',
                'name' => '鶏もも肉（皮つき）',
                'protein' =>0.173 ,
                'fat' => 0.191,
                'carbohydrate' => 0.0,
            ],
            [
                'category' => '2',
                'name' => '鶏もも肉（皮なし）',
                'protein' =>0.220,
                'fat' => 0.048,
                'carbohydrate' => 0.0,
            ],
            [
                'category' => '2',
                'name' => 'ささみ',
                'protein' => 0.246,
                'fat' => 0.011,
                'carbohydrate' => 0.0,
            ],
            [
                'category' => '2',
                'name' => '手羽先',
                'protein' => 0.174,
                'fat' => 0.162,
                'carbohydrate' => 0.0,
            ],
            [
                'category' => '2',
                'name' => '豚バラ',
                'protein' => 0.144,
                'fat' => 0.354,
                'carbohydrate' => 0.001,
            ],
            [
                'category' => '2',
                'name' => '豚肩ロース',
                'protein' => 0.197,
                'fat' => 0.078,
                'carbohydrate' => 0.001,
            ],
            [
                'category' => '2',
                'name' => '牛バラ',
                'protein' => 0.144,
                'fat' => 0.329,
                'carbohydrate' => 0.002,
            ],
            [
                'category' => '2',
                'name' => ' 牛ロース',
                'protein' => 0.201,
                'fat' => 0.154,
                'carbohydrate' => 0.004,
            ],
            [
                'category' => '2',
                'name' => '牛肩ロース',
                'protein' => 0.179,
                'fat' => 0.174,
                'carbohydrate' => 0.001,
            ],
            [
                'category' => '2',
                'name' => '和牛バラ',
                'protein' => 0.110,
                'fat' => 0.50,
                'carbohydrate' => 0.001,
            ],
            [
                'category' => '2',
                'name' => '和牛ロース',
                'protein' => 0.097,
                'fat' => 0.565,
                'carbohydrate' => 0.001,
            ],
            [
                'category' => '3',
                'name' => 'ブロッコリー',
                'protein' => 0.043,
                'fat' => 0.005,
                'carbohydrate' => 0.05,
            ],
            [
                'category' => '3',
                'name' => 'トマト',
                'protein' => 0.011,
                'fat' => 0.001,
                'carbohydrate' => 0.072,
            ],
            [
                'category' => '3',
                'name' => 'きゅうり',
                'protein' =>0.010 ,
                'fat' => 0.001,
                'carbohydrate' => 0.03,
            ],
            [
                'category' => '3',
                'name' => 'ごぼう',
                'protein' => 0.018,
                'fat' => 0.001,
                'carbohydrate' => 0.154,
            ],
            [
                'category' => '3',
                'name' => '大根',
                'protein' => 0.005,
                'fat' => 0.001,
                'carbohydrate' => 0.041,
            ],
            [
                'category' => '3',
                'name' => '白菜',
                'protein' => 0.008,
                'fat' => 0.001,
                'carbohydrate' => 0.032,
            ],
            [
                'category' => '3',
                'name' => 'にんじん',
                'protein' => 0.018,
                'fat' => 0.002,
                'carbohydrate' => 0.100,
            ],
            [
                'category' => '3',
                'name' => 'キャベツ',
                'protein' =>0.013 ,
                'fat' => 0.002,
                'carbohydrate' => 0.050,
            ],
            [
                'category' => '3',
                'name' => 'なす',
                'protein' => 0.011,
                'fat' => 0.001,
                'carbohydrate' => 0.050,
            ],
            [
                'category' => '3',
                'name' => '長ネギ',
                'protein' => 0.050,
                'fat' => 0.001,
                'carbohydrate' => 0.070,
            ],
            [
                'category' => '3',
                'name' => '玉ねぎ',
                'protein' => 0.010,
                'fat' => 0.001,
                'carbohydrate' => 0.090,
            ],
            [
                'category' => '3',
                'name' => 'ピーマン',
                'protein' => 0.009,
                'fat' => 0.002,
                'carbohydrate' => 0.046,
            ],
            [
                'category' => '3',
                'name' => 'ほうれん草',
                'protein' => 0.029,
                'fat' => 0.004,
                'carbohydrate' => 0.036,
            ],
            [
                'category' => '3',
                'name' => 'レタス',
                'protein' => 0.029,
                'fat' => 0.004,
                'carbohydrate' => 0.036,
            ],
            [
                'category' => '3',
                'name' => 'かぼちゃ',
                'protein' => 0.010,
                'fat' => 0.001,
                'carbohydrate' => 0.070,
            ],
            [
                'category' => '3',
                'name' => 'とうもろこし',
                'protein' => 0.035,
                'fat' => 0.017,
                'carbohydrate' => 0.186,
            ],
            [
                'category' => '4',
                'name' => 'サケ',
                'protein' => 0.220,
                'fat' => 0.110,
                'carbohydrate' => 0.001,
            ],
            [
                'category' => '5',
                'name' => '卵',
                'protein' => 0.120,
                'fat' => 0.100,
                'carbohydrate' => 0.003,
            ],
            [
                'category' => '6',
                'name' => '醤油',
                'protein' => 0.08,
                'fat' => 0.0,
                'carbohydrate' => 0.10,
            ],
            [
                'category' => '6',
                'name' => '砂糖',
                'protein' => 0.0,
                'fat' => 0.0,
                'carbohydrate' => 1.0,
            ],
            [
                'category' => '6',
                'name' => '料理酒',
                'protein' => 0.002,
                'fat' => 0.0,
                'carbohydrate' => 0.047,
            ],
            [
                'category' => '6',
                'name' => 'みりん',
                'protein' => 0.003,
                'fat' => 0.0,
                'carbohydrate' => 0.430,
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
