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
            $table->integer('id_transaksi')->primary()->autoIncrement();
            $table->string('order_id');
            $table->foreign('order_id')
                ->references('order_id')
                ->on('tiket')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('payment_method');
            $table->enum('payment_status', ['pending', 'completed', 'failed']);
            $table->timestamp('transaction_date');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_allocations');
    }
};
