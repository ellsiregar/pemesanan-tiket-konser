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
        Schema::create('tiket', function (Blueprint $table) {
            $table->integer('id_tiket')->primary();
            $table->string('order_id')->unique();

            $table->integer('users_id');
            $table->foreign('users_id')
                ->references('users_id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('id_kategori_tiket');
            $table->foreign('id_kategori_tiket')
                ->references('id_kategori_tiket')
                ->on('kategori')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('quantity');
            $table->enum('status', ['booked', 'paid', 'cancelled']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket');
    }
};
