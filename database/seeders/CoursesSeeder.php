<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'dept_id'=>Str::random(10),
            'course_name'=>Str::random(10),
            'course_start_date'=>Str::random(10),
            'course_duration'=>Str::random(10),
            'course_price'=>Str::random(10),
            'desc'=>Str::random(10),
            'prof'=>Str::random(10),
        ]);
    }
}
