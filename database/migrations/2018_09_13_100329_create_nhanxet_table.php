<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanxetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanxet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tieude');
            $table->integer('danhgia');
            $table->text('noidung');
            $table->bigInteger('id_kh');
            $table->bigInteger('id_sp');
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
        Schema::dropIfExists('nhanxet');
    }
}
