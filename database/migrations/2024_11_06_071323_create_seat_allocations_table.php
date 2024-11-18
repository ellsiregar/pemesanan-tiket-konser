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
        Schema::create('seat_allocations', function (Blueprint $table) {
            $table->integer('id_lokasi')->primary()->autoIncrement();

            $table->integer('id_tiket');
            $table->foreign('id_tiket')
                ->references('id_tiket')
                ->on('tiket')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->integer('nomor_tempat_duduk');
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
