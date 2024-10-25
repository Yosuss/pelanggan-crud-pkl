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
            $table->id('id_pengaduan'); // Primary key
            $table->string('pengaduan');
            $table->string('update_pengaduan')->nullable();
            $table->string('pegawai')->nullable();
            $table->foreignId('id_pelanggan') // Foreign key
                ->references('id_pelanggan')
                ->on('pelanggan')
                ->onDelete('cascade');
            $table->timestamps(); // Created at and Updated at
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