<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
\Illuminate\Support\Facades\Schema::defaultStringLength(191);

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('judul');
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
        Schema::dropIfExists('pertanyaan');
    }
}
