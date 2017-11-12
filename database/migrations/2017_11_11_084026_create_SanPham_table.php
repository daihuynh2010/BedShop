<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPham', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';

            $table->increments('id_sp');
            $table->string('sp_ten');
            $table->integer('sp_gia')->unsigned();
            $table->integer('sp_giasaukm')->unsigned();
            $table->string('sp_hsd');
            $table->text('sp_mota');
            $table->text('sp_gioithieu');
            $table->string('sp_trongluong');
            $table->string('sp_kichthuoc');
            $table->integer('sp_soluong')->unsigned();
            $table->integer('sp_somausac')->unsigned();
            $table->integer('sp_idnsx')->unsigned();
            $table->integer('sp_idloai')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            //$table->primary('id_sp');
            $table->foreign('sp_idnsx')->references('id_nsx')->on('NSX')->onDelete('cascade');
            $table->foreign('sp_idloai')->references('id_loaisp')->on('Loai_SP')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SanPham');
    }
}
