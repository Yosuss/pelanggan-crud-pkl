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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan'); // Primary key untuk pengaduan
            $table->unsignedBigInteger('id_pelanggan'); // Kolom foreign key
            $table->foreignId('id_pelanggan') // Foreign key untuk pelanggan
                ->constrained('pelanggan') // Merujuk ke tabel pelanggan
                ->onDelete('cascade'); // Hapus pengaduan jika pelanggan dihapus
            $table->string('pengaduan'); // pengaduan
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('pengaduan');
    }
};