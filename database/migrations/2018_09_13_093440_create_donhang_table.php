<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('diachi');
            $table->dateTime('thoigian');
            $table->bigInteger('id_nv');
            $table->bigInteger('id_kh');
            $table->bigInteger('tongtien');
            $table->integer('trangthai');//0:giohang 1:donhang
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
        Schema::dropIfExists('donhang');
    }
}
