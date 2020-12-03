<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacancyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vacancies')->insert([
            'title' => Str::random(10),
            'min_reward' => rand(10, 99),
            'mid_reward' => rand(10, 99),
            'max_reward' => rand(10, 99),
            'text' => Str::random(100),
            'desc' => Str::random(100),
            'requirements' => Str::random(100),
            'work_time_start' => Carbon::now(),
            'work_time_end' => Carbon::now(),
            'work_time' => Carbon::now(),

        ]);
    }
}
