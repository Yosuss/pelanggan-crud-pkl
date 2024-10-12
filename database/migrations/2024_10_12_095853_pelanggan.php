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
        //
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id('id_pelanggan'); // Primary key
            $table->string('cabang'); // Nama cabang
            $table->string('nama'); // Nama pelanggan
            $table->string('alamat'); // Alamat pelanggan
            $table->string('kelompok_pelanggan'); // kelompok pelanggan
            $table->string('no_telepon'); // Nomor telepon pelanggan
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('pelanggan');
    }
};