<?php

use Illuminate\Database\Seeder;

class CT_MauSac_SPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CT_MauSac_SP')->insert([
            ['id_mau'=> '1',
            'id_sp'=>'1'
        ]
        ]);
    }
}
