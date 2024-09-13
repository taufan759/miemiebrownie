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
            $table->enum('metode_pembayaran', ['bank_transfer', 'credit_card', 'cod']); // Pembatasan metode pembayaran
            $table->string('nama_customer');
            $table->integer('jumlah_pesanan'); // Menambahkan jumlah pesanan sebagai integer
            $table->decimal('total', 15, 2); // Total tanpa after karena kolom jumlah_pesanan sudah ada
            $table->string('status_kode')->nullable();
            $table->string('transaksi_id')->nullable(); 
            $table->datetime('tanggal')->default(now());
            $table->decimal('harga', 15, 2); // Menggunakan decimal untuk harga, mendukung angka besar
            $table->enum('status_pesanan', ['pending', 'proses', 'selesai', 'batal']); // Menggunakan enum untuk status pesanan
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // Relasi foreign key
            $table->foreign('produk_id')->references('id')->on('produk')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade'); // onDelete cascade
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
