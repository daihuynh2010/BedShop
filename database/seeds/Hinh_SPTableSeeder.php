<?php

use Illuminate\Database\Seeder;

class Hinh_SPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Hinh_SP')->insert([
            ['vitri_hinh'=> 'data/imahgeacsacdscasdvsavsdddddddddddddddddvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv',
            'hinh_idsp'=>'1',
            'is_hinhchinh'=>true,
        ]
        ]);
    }
}
