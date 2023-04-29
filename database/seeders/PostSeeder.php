<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => "title1",
            'body' => "This is body1."
        ]);
        DB::table('posts')->insert([
            'title' => "title2",
            'body' => "This is body2."
        ]);
        DB::table('posts')->insert([
            'title' => "title3",
            'body' => "This is body3."
        ]);
        DB::table('posts')->insert([
            'title' => "title4",
            'body' => "This is body4."
        ]);
        DB::table('posts')->insert([
            'title' => "title5",
            'body' => "This is body5."
        ]);
        DB::table('posts')->insert([
            'title' => "title6",
            'body' => "This is body6."
        ]);
        DB::table('posts')->insert([
            'title' => "title7",
            'body' => "This is body7."
        ]);
        DB::table('posts')->insert([
            'title' => "title8",
            'body' => "This is body8."
        ]);
        DB::table('posts')->insert([
            'title' => "title9",
            'body' => "This is body9."
        ]);
        DB::table('posts')->insert([
            'title' => "title10",
            'body' => "This is body10."
        ]);
    }
}
