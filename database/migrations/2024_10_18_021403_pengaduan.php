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
            $table->string('pengaduan'); // pengaduan
            $table->timestamps(); // created_at dan updated_at
            $table->foreign('id_pelanggan')
                ->references('id_pelanggan')
                ->on('pelanggan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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