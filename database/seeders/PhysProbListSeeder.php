<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhysProbListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('phys_prob_lists')->insert(
            [
                [
                    'Workbook' => 'なお',
                    'ProbNo' => 0,
                    'Field' => '円運動',
                    'Class' => '鉛直面の円運動',
                    'Level' => 5,
                    'UsedDay' => now(),
                    'updated_at' => now(),
                    'created_at' => now(),
                ],
                [
                    'Workbook' => 'はるか',
                    'ProbNo' => 1,
                    'Field' => '単振動',
                    'Class' => 'ばね付き単振動',
                    'Level' => 4,
                    'UsedDay' => now(),
                    'updated_at' => now(),
                    'created_at' => now(),
                ],
                [
                    'Workbook' => 'さき',
                    'ProbNo' => 2,
                    'Field' => 'PVグラフ',
                    'Class' => '断熱変化と等温変化',
                    'Level' => 3,
                    'UsedDay' => now(),
                    'updated_at' => now(),
                    'created_at' => now(),
                ],
                [
                    'Workbook' => '平澤',
                    'ProbNo' => 3,
                    'Field' => '音',
                    'Class' => 'ドップラー効果',
                    'Level' => 2,
                    'UsedDay' => now(),
                    'updated_at' => now(),
                    'created_at' => now(),
                ],
                [
                    'Workbook' => '服部',
                    'ProbNo' => 4,
                    'Field' => '光',
                    'Class' => 'ニュートンリング',
                    'Level' => 1,
                    'UsedDay' => now(),
                    'updated_at' => now(),
                    'created_at' => now(),
                ],
            ]
        );
    }
}
