<?php

use Illuminate\Database\Seeder;

class HoaDonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('HoaDon')->insert([
            ['cach_thanh_toan'=> 'Tiền mặt khi giao hàng',
            'tongtien'=>'1000000',
            'tinh_trang_hang'=>'Đang Giao',
            'dd_giao_hang'=>'Số 1-Võ Văn Ngân',
            'tong_sp'=>'1',
            'id_user'=>'1'
        ]
        ]);
    }
}
