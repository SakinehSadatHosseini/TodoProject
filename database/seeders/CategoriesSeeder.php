<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("Categories")->insert([
            [
                'title'=>'Defualt',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'title'=>'Home Tasks',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'title'=>'Educational Tasks',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'title'=>'Worshipal Tasks',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
