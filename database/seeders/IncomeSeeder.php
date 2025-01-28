<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Income;
use Illuminate\Support\Facades\DB;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $now = now();
        $data = [];
        for($i= 0;$i<50;$i++){
            $data[]=[
            'amount' => rand(50, 100),
            'create_at' => $now,
            'updated_at' => $now,
            ];
        }
        DB::table('incomes')->insert(
            $data
        );
    }
}
