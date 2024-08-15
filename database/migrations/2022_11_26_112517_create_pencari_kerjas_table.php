<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePencariKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencari_kerjas', function (Blueprint $table) {
            $table->id('id_pk');
            $table->string('nama_pk');
            $table->string('alamat_pk');
            $table->string('kota_pk');
            $table->string('agama');
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->date('tgl_lahir');
            $table->string('telepon_pk');
            $table->string('email_pk');
            $table->string('foto');
            $table->enum('pendidikan', ['SMA/SMK', 'S1', 'S2', 'S3']);
            $table->string('keahlian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pencari_kerjas');
    }
}
