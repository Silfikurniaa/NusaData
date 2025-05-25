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
        // Pivot: Petugas-Wilayah (many-to-many)
        Schema::create('petugaswilayah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petugas_id')->constrained('petugas')->onDelete('cascade');
            $table->foreignId('wilayah_tugas_id')->constrained('wilayah_tugas')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['petugas_id', 'wilayah_tugas_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugaswilayah');

    }
};
