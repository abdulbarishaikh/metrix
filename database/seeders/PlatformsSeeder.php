<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platform;

class PlatformsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            ['title'=>'erp'],
            ['title'=>'web development'],
            ['title'=>'mobile development'],
            ['title'=>'ecommerce'],
            ['title'=>'crm'],
        ];
        Platform::insert($arr);
    }
}
