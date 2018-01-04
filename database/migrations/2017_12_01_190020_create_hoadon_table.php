<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
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
            $table->string('sdt');
            $table->integer('is_thanhtoan')->default(0);
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
        Schema::dropIfExists('hoadon');
    }
}
