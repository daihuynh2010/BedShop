<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCTHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CT_HoaDon', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';

            $table->integer('id_hd')->unsigned();
            $table->integer('id_sp')->unsigned();
            $table->integer('so_luong')->unsigned();
            $table->integer('so_tien')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->primary(['id_hd','id_sp']);
            $table->foreign('id_sp')->references('id_sp')->on('SanPham')->onDelete('cascade');
            $table->foreign('id_hd')->references('id_hd')->on('HoaDon')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CT_HoaDon');
    }
}
