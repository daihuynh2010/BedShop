<?php

use Illuminate\Database\Seeder;

class NSXTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('NSX')->insert([
            ['nsx_ten'=> 'Nhà Đầu Tư 1',
            'nsx_diachi'=>'1/cdá/dcsca'
        ]
        ]);
    }
}
