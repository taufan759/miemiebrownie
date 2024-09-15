<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pesanan_selesai', function (Blueprint $table) {
        $table->id();
        $table->string('no_pesanan');
        $table->string('nama_customer');
        $table->text('alamat');
        $table->decimal('total', 15, 2);
        $table->timestamp('tanggal');
        $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('pesanan_selesai');
}
};
