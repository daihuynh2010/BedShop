<?php

use Illuminate\Database\Seeder;

class MauSac_SPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('MauSac_SP')->insert([
            ['mau_ten'=> 'Đỏ'
        ],
        ['mau_ten'=> 'Xanh Dương'
    ],
    ['mau_ten'=> 'Đen'
    ]
            ]);
    }
}
