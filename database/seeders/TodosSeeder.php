<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("Todos")->insert([
            [
                'title'=>'todo 1',
                'description'=>'description todo 1',
                'category_id'=>'1',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'title'=>'todo 2',
                'description'=>'description todo 2',
                'category_id'=>'1',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'title'=>'todo 3',
                'description'=>'description todo 3',
                'category_id'=>'2',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'title'=>'todo 4',
                'description'=>'description todo 4',
                'category_id'=>'1',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'title'=>'todo 5',
                'description'=>'description todo 5',
                'category_id'=>'3',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'title'=>'todo 6',
                'description'=>'description todo 6',
                'category_id'=>'3',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'title'=>'todo 7',
                'description'=>'description todo 7',
                'category_id'=>'2',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'title'=>'todo 8',
                'description'=>'description todo 8',
                'category_id'=>'4',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'title'=>'todo 9',
                'description'=>'description todo 9',
                'category_id'=>'2',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'title'=>'todo 10',
                'description'=>'description todo 10',
                'category_id'=>'4',
                'delete_status'=>0,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
