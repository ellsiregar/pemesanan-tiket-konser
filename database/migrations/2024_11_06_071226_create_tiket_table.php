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
            $table->integer('id_tiket')->primary()->autoIncrement();

            $table->integer('id_kategori_tiket');
            $table->foreign('id_kategori_tiket')
                ->references('id_kategori_tiket')
                ->on('kategori_tiket')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('quantity');
            $table->integer('harga_tiket');
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
