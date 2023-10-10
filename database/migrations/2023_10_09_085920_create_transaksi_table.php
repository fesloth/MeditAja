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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // ID pengguna yang melakukan pembayaran
            $table->unsignedBigInteger('paket_id'); // ID paket premium yang dibeli
            $table->decimal('jumlah_pembayaran', 10, 2); // Jumlah pembayaran
            $table->dateTime('waktu_pembayaran');
            $table->timestamps();

            // Menambahkan indeks untuk kolom foreign key
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('paket_id')->references('id')->on('paket_premium');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
