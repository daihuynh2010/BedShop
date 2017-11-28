<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBLNXYTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BL_NX_YT', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';

            $table->integer('id_user')->unsigned();
            $table->integer('id_sp')->unsigned();
            $table->integer('danh_gia')->unsigned()->nullable();
            $table->string('noi_dung');
            $table->boolean('is_thich')->default(false);
            $table->softDeletes();
            $table->timestamps();

            $table->primary(['id_user','id_sp']);
            $table->foreign('id_sp')->references('id_sp')->on('SanPham')->onDelete('cascade');
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
        Schema::dropIfExists('BL_NX_YT');
    }
}
