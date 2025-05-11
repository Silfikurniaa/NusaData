<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tabel Users
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'petugas', 'warga']);
            $table->rememberToken();
            $table->timestamps();
        });

        // Tabel Petugas
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('pengguna')->onDelete('cascade');
            $table->string('nip')->unique();
            $table->string('jabatan');
            $table->timestamps();
        });

        // Tabel Warga
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('pengguna')->onDelete('cascade');
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
            $table->id();
            $table->foreignId('warga_id')->constrained('warga')->onDelete('cascade');
            $table->string('field_diubah');
            $table->text('nilai_lama');
            $table->text('nilai_baru');
            $table->enum('status', ['pending', 'disetujui', 'ditolak'])->default('pending');
            $table->text('catatan_petugas')->nullable();
            $table->timestamps();
        });

        // Tabel Wilayah Tugas
        Schema::create('wilayah_tugas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wilayah');
            $table->string('kecamatan');
            $table->timestamps();
        });

        // Pivot: Petugas-Wilayah (many-to-many)
        Schema::create('petugas_wilayah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petugas_id')->constrained('petugas')->onDelete('cascade');
            $table->foreignId('wilayah_tugas_id')->constrained('wilayah_tugas')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['petugas_id', 'wilayah_tugas_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('petugas_wilayah');
        Schema::dropIfExists('wilayah_tugas');
        Schema::dropIfExists('pengajuan_perubahan');
        Schema::dropIfExists('warga');
        Schema::dropIfExists('petugas');
        Schema::dropIfExists('pengguna');
    }
};
