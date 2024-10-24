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
            $table->string('cabang');
            $table->string('nama'); 
            $table->string('alamat'); 
            $table->string('no_telepon'); 
            $table->string('kelompok_pelanggan'); 
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