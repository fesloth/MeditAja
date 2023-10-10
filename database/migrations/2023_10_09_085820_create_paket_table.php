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
        Schema::create('paket_premium', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->string('deskripsi');
            $table->decimal('harga', 10, 2); // Gunakan tipe data ini sesuai dengan kebutuhan Anda
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket');
    }
};
