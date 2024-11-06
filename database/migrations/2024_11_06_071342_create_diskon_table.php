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
        Schema::create('diskon', function (Blueprint $table) {
            $table->integer('id_diskon')->primary();

            $table->string('order_id');
            $table->foreign('order_id')
                  ->references('order_id')
                  ->on('tiket')
                  ->onDelete('casecade')
                  ->onUpdate('casecade'); //relasi ke tiket

            $table->string('diskon_kode', 20)->unique();
            $table->string('persentase_diskon', 10);
            $table->date('tanggal_kadaluarsa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diskon');
    }
};
