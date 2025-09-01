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
        Schema::create('inventory_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('tbl_products')->onDelete('cascade');
            $table->enum('tipe_transaksi', ['masuk', 'keluar']);
            $table->integer('qty');
            $table->timestamp('tanggal_transaksi');
            $table->string('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_transactions');
    }
};
