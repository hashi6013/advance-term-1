<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => '寿司'
        ];
        DB::table('genres')->insert($param);
        $param = [
            'content' => '焼肉'
        ];
        DB::table('genres')->insert($param);
        $param = [
            'content' => '居酒屋'
        ];
        DB::table('genres')->insert($param);
        $param = [
            'content' => 'イタリアン'
        ];
        DB::table('genres')->insert($param);
        $param = [
            'content' => 'ラーメン'
        ];
        DB::table('genres')->insert($param);
    }
}
