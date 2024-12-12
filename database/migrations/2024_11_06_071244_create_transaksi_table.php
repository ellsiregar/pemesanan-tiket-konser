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
            $table->integer('id_tiket');
            $table->foreign('id_tiket')
                ->references('id_tiket')
                ->on('tiket')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->enum('payment_status', ['pending', 'completed']);
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
