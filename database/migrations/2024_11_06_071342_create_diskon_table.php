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
            $table->integer('id_diskon')->primary()->autoIncrement();

            $table->integer('id_tiket');
            $table->foreign('id_tiket')
                  ->references('id_tiket')
                  ->on('tiket')
                  ->onDelete('cascade')
                  ->onUpdate('cascade'); //relasi ke tiket

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
