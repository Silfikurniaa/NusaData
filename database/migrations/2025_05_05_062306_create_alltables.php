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
       // Tabel Users
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'petugas', 'warga']);
            $table->rememberToken();
            $table->timestamps();
        });

        // Tabel Petugas
        Schema::create('petugas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('wilayah');
            $table->timestamps();
        });

        // Tabel Warga
        Schema::create('warga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nik')->unique();
            $table->string('kk');
            $table->string('alamat');
            $table->string('rt_rw');
            $table->string('desa');
            $table->string('kecamatan');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->timestamps();
        });

        // Tabel Pengajuan Perubahan
        Schema::create('pengajuan_perubahan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('warga_id')->constrained('warga')->onDelete('cascade');
            $table->string('field_diubah');
            $table->text('nilai_lama');
            $table->text('nilai_baru');
            $table->enum('status', ['pending', 'disetujui', 'ditolak'])->default('pending');
            $table->text('catatan_petugas')->nullable();
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
        Schema::dropIfExists('pengajuan_perubahan');
        Schema::dropIfExists('warga');
        Schema::dropIfExists('petugas');
        Schema::dropIfExists('users');
    }
};
