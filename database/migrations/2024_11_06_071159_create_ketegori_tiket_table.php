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
        Schema::create('ketegori_tiket', function (Blueprint $table) {
            $table->integer('id_kategori_tiket')->primary()->autoIncrement();
            $table->integer('id_konser');
            $table->foreign('id_konser')
                ->references('id_konser')
                ->on('konser')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('nama_kategori', 10);
            $table->integer('harga_tiket');
            $table->integer('jumlah_tiket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketegori_tiket');
    }
};
