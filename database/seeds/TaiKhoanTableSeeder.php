<?php

use Illuminate\Database\Seeder;

class TaiKhoanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TaiKhoan')->insert([
            ['email'=> 'daihuynh2010@gmail.com',
            'password'=>'admin',
            'chuc_vu'=>'3',
            'tich_diem'=>'0',
            'dd_giaohang_md'=>'số 1 -võ văn ngân',
        ]
        ]);
    }
}
