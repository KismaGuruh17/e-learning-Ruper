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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('nis');
            $table->string('nama_siswa');
            $table->string('tempat_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('kelas');
            $table->unsignedBigInteger('sekolah_id');
            $table->string('mata_pelajaran');
            $table->unsignedBigInteger('kelas_id')->nullable;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
