<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            ['tittle'=> 'Tin tức 1','content' => 'Nội dung tin tức 1'],
            ['tittle'=> 'Tin tức 2','content' => 'Nội dung tin tức 2']
        ]);
    }
}
