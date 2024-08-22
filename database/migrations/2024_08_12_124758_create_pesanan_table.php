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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('no_pesanan')->unique();
            $table->text('alamat');
            $table->string('metode_pembayaran');
            $table->string('nama_customer');
            $table->string('jumlah_pesanan');
            $table->string('status_kode')->nullable();
            $table->string('transaksi_id')->nullable();
            $table->datetime('tanggal');
            $table->string('harga');
            $table->string('status_pesanan');
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('produk_id')->references('id')->on('produk');
            $table->foreign('user_id')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
