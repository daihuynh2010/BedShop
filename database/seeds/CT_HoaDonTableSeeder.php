<?php

use Illuminate\Database\Seeder;

class CT_HoaDonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CT_HoaDon')->insert([
            ['id_hd'=> '1',
            'id_sp'=>'1',
            'so_luong'=>'1',
            'so_tien'=>'200000'
        ]
        ]);
    }
}
