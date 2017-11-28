<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoaDon', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';

            $table->increments('id_hd');
            $table->string('cach_thanh_toan');
            $table->integer('tongtien')->unsigned();
            $table->string('tinh_trang_hang');
            $table->string('dd_giao_hang');
            $table->integer('tong_sp')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HoaDon');
    }
}
