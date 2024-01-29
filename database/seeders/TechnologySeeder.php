<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            ['title'=>'javascript'],
            ['title'=>'python'],
            ['title'=>'go'],
            ['title'=>'java'],
            ['title'=>'kotlin'],
            ['title'=>'php'],
            ['title'=>'c#'],
            ['title'=>'swift'],
            ['title'=>'r'],
            ['title'=>'ruby'],
            ['title'=>'c and c++'],
            ['title'=>'matlab'],
            ['title'=>'typeScript'],
            ['title'=>'scala'],
            ['title'=>'sql'],
            ['title'=>'html'],
            ['title'=>'css'],
            ['title'=>'nosql'],
            ['title'=>'rust'],
            ['title'=>'perl'],
        ];
        Technology::insert($arr);
    }
}
