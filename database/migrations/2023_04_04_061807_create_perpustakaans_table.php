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
        Schema::create('perpustakaan', function (Blueprint $table) {
            $table->integer('kode_buku')->primary();
            $table->string('judul',50);
            $table->string('pengarang',50);
            $table->string('jenis_buku',50);
            $table->string('harga',50);
            $table->string('qty',50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perpustakaan');
    }
};
