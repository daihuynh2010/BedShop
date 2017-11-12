<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCTMauSacSPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CT_MauSac_SP', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';

            $table->integer('id_mau')->unsigned();
            $table->integer('id_sp')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->primary(['id_mau','id_sp']);
            $table->foreign('id_sp')->references('id_sp')->on('SanPham')->onDelete('cascade');
            $table->foreign('id_mau')->references('id_mau')->on('MauSac_SP')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CT_MauSac_SP');
    }
}
