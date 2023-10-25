<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class store_types_seeder extends Seeder
{
    /**
     * Run the database seeds.
     * store_type を判別するためのseeder
     */
    public function run()
    {
        \DB::table('store_types')->insert([
            [
                'name'=>'銭湯'
            ],
            [
                'name'=>'温泉'
            ],
            [
                'name'=>'漫画喫茶'
            ],
        ]);
    }
}
