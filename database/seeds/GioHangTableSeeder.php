<?php

use Illuminate\Database\Seeder;

class GioHangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('GioHang')->insert([
            [
            'tongtien'=>'100000',
            'tong_sp'=>'1',
            'id_user'=>'1'
        ]
        ]);
    }
}
