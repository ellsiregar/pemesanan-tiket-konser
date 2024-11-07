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
        Schema::create('tiket_diskon', function (Blueprint $table) {
            $table->integer('id_tiket_diskon')->primary()->autoIncrement();

            $table->integer('id_tiket');
            $table->foreign('id_tiket')
                  ->reference('id_tiket')
                  ->on('tiket')
                  ->onDelete('cascade')
                  ->onUpdate('cascade'); // relasi ke tiket

            $table->integer('id_diskon');
            $table->foreign('id_diskon')
                  ->references('id_didkon')
                  ->on('diskon')
                  ->onDelete('cascade')
                  ->onUpdate('cascade'); // relasi ke diskon

            $table->timestamp('appliad_date');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket_diskon');
    }
};
