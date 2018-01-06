<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';

            $table->increments('id_sp');
            $table->string('sp_ten');
            $table->integer('sp_gia')->unsigned();
            $table->integer('sp_km')->unsigned();
            $table->string('sp_hsd');
            $table->text('sp_mota');
            $table->text('sp_gioithieu');
            $table->string('sp_trongluong');
            $table->string('sp_kichthuoc');
            $table->integer('sp_soluong')->unsigned();
            $table->integer('sp_danhgia')->unsigned();
            $table->integer('sp_idnsx')->unsigned();
            $table->integer('sp_idloai')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
