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
        Schema::create('pengaduan_it', function (Blueprint $table) {
            $table->id('id_pengaduan_it'); // Primary key
            $table->string('nama');
            $table->string('bagian');
            $table->string('pengaduan');
            $table->string('update_pengaduan_it')->nullable();
            $table->timestamps(); // Created at and Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('pengaduan_it');
    }
};