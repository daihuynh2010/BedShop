<?php

use Illuminate\Database\Seeder;

class BL_MX_YTTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('BL_NX_YT')->insert([
            ['id_user'=> '1',
            'id_sp'=>'1',
            'danh_gia'=>'0',
            'noi_dung'=>'Rất Tốt',
            'is_thich'=>false
        ]
        ]);
    }
}
