<?php

use Illuminate\Database\Seeder;

class Loai_SPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Loai_SP')->insert([
            ['loaisp_ten'=> 'Loai Sản Phẩm 1'
        ]
        ]);
    }
}
