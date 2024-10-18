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
            $table->foreignId('id_pelanggan') // Menambahkan foreign key
                ->constrained('pelanggan', 'id_pelanggan') // Mengacu pada tabel pelanggan
                ->onDelete('cascade'); // Menghapus pengaduan jika pelanggan dihapus
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