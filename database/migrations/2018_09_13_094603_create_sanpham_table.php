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
            $table->bigIncrements('id');
            $table->string('tensp');
            $table->string('hinhanh', 255);
            $table->text('thongtin');
            $table->bigInteger('gia');
            $table->bigInteger('id_hsx');//id_hangsanxuat
            $table->bigInteger('id_lsp');//ud_loaisanpham
            $table->bigInteger('id_tt');//id_trangthai
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
