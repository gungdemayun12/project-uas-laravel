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
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->integer('product_id'); 
                $table->string('nama_pemesan');
                $table->string('no_hp');
                $table->string('alamat');
                $table->string('ukuran'); 
                $table->integer('jumlah')->default(1);
                $table->string('catatan')->nullable();
                $table->enum('metode_pembayaran', ['cod'])->default('cod');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
