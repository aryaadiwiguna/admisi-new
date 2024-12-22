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
            $table->string('nama_lengkap')->nullable();
            $table->integer('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();
            $table->string('nisn')->nullable();
            $table->integer('id_ref_sekolah')->nullable();
            $table->string('jurusan')->nullable();
            $table->year('tahun_lulus')->nullable();
            $table->integer('id_ref_provinsi')->nullable();
            $table->integer('id_ref_kabupaten')->nullable();
            $table->string('nilai_akhir')->nullable();
            $table->string('kuesioner')->nullable();
            $table->integer('id_user')->nullable();
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
