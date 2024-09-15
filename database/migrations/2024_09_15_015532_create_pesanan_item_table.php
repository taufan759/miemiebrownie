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
        // Migration for pesanan_items
        Schema::create('pesanan_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pesanan_id'); // Relasi ke tabel pesanan
            $table->unsignedBigInteger('produk_id'); // Relasi ke tabel produk
            $table->integer('jumlah_pesanan'); // Jumlah produk yang dibeli
            $table->decimal('harga', 15, 2); // Harga produk
            $table->decimal('total_harga', 15, 2); // Total harga (harga * jumlah_pesanan)
            $table->timestamps();
        
            // Foreign key relations
            $table->foreign('pesanan_id')->references('id')->on('pesanan')->onDelete('cascade');
            $table->foreign('produk_id')->references('id')->on('produk')->onDelete('cascade');
        });
        

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_item');
    }
};
