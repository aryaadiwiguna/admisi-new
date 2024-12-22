<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pmb', function (Blueprint $table) {
            $table->id('id_pmb');
            $table->string('nama_lengkap');
            $table->integer('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->string('nisn');
            $table->integer('id_ref_sekolah');
            $table->string('jurusan');
            $table->year('tahun_lulus');
            $table->integer('id_ref_provinsi');
            $table->integer('id_ref_kabupaten');
            $table->string('nilai_akhir');
            $table->string('kuesioner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pmb');
    }
};
