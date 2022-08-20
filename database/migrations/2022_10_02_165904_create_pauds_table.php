<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pauds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('nama');
            $table->string('alamat');
            $table->string('kode_pos');
            $table->string('no_tlp');
            $table->integer('jmlh_anak');
            $table->integer('jmlh_pengajar');
            $table->string('lat');
            $table->string('leng');
            $table->integer('usia_anak');
            $table->integer('usia_pengajar');
            $table->integer('status_pengajar');
            $table->integer('waktu_pelaksanaan');
            $table->integer('fasilitas_paud');
            $table->string('metode_pembelajaran');
            $table->integer('biaya');
            $table->string('transportasi');
            $table->text('gambar');
            $table->string('paud_desc');
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
        Schema::dropIfExists('pauds');
    }
}
