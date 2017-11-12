<?php

use Illuminate\Database\Seeder;

class SanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('SanPham')->insert([
            ['sp_ten'=> 'Sản Phẩm 1',
            'sp_gia'=>'200000',
            'sp_giasaukm'=>'0',
           'sp_hsd'=>'không có',
           'sp_mota'=>'sản phẩm tốt',
           'sp_gioithieu'=>'sản phẩm được nhập từ trung quốc',
           'sp_trongluong'=>'500gr',
           'sp_kichthuoc'=>'10x10',
           'sp_soluong'=>'100',
           'sp_somausac'=>'5',
           'sp_idnsx'=>'1',
           'sp_idloai'=>'1'
            ]
            ]);
    }
}
