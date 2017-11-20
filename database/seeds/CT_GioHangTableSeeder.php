<?php

use Illuminate\Database\Seeder;

class CT_GioHangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CT_GioHang')->insert([
            ['id_gh'=> '1',
            'id_sp'=>'1',
            'so_luong'=>'1'
        ],
        ['id_gh'=> '1',
        'id_sp'=>'2',
        'so_luong'=>'3'
    ]
        ]);
    }
}
