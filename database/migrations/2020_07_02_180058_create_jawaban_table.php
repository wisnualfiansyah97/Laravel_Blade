<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
\Illuminate\Support\Facades\Schema::defaultStringLength(191);

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('pertanyaan_id')->unsigned();
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            $table->string('isi');
            $table->date('tanggal_dibuat')->nullable();
            $table->date('tanggal_diperbaharui')->nullable(); 
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
        Schema::dropIfExists('jawaban');
    }
}
