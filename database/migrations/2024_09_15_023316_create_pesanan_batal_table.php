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
// Migration for pesanan_batal
Schema::create('pesanan_batal', function (Blueprint $table) {
    $table->id();
    $table->string('no_pesanan')->unique();
    $table->string('nama_customer');
    $table->text('alamat');
    $table->decimal('total', 10, 2);
    $table->timestamp('tanggal');
    $table->unsignedBigInteger('user_id');
    $table->timestamps();
});

}

public function down()
{
    Schema::dropIfExists('pesanan_batal');
}

};
