<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCTGioHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CT_GioHang', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';

            $table->integer('id_gh')->unsigned();
            $table->integer('id_sp')->unsigned();
            $table->integer('so_luong')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->primary(['id_gh','id_sp']);
            $table->foreign('id_sp')->references('id_sp')->on('SanPham')->onDelete('cascade');
            $table->foreign('id_gh')->references('id_gh')->on('GioHang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CT_GioHang');
    }
}
