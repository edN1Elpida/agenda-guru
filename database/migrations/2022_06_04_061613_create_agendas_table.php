<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guru');
            $table->biginteger('nik_guru');
            $table->string('mapel');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guru');
            $table->string('mapel');
            $table->string('materi_pelajaran');
            $table->enum('dari_jam',['Jam-1','Jam-2','Jam-3','Jam-4','Jam-5','Jam-6']);
            $table->enum('sampai_jam',['Jam-1','Jam-2','Jam-3','Jam-4','Jam-5','Jam-6']);
            $table->string('siswa_yang_tidak_hadir');
            $table->string('kelas');
            $table->string('link_pembelajaran');
            $table->enum('metode',['Daring','Luring']);
            $table->string('foto');
            $table->string('keterangan');
            $table->timestamps();
        });
        Schema::create('kelass', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas');
            $table->string('wali_kelas');
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
        Schema::dropIfExists('gurus','agendas','kelass');
    }
};
