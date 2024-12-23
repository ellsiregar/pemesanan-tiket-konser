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
        Schema::create('reviews', function (Blueprint $table) {
            $table->integer('id_review')->primary()->autoIncrement();

            $table->integer('id_konser');
            $table->foreign('id_konser')
                  ->references('id_konser')
                  ->on('konser')
                  ->onDelete('cascade')
                  ->onUpdate('cascade'); // relasi ke konser

            $table->integer('users_id');
            $table->foreign('users_id')
                  ->references('users_id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade'); // relasi ke user

            $table->integer('rating');
            $table->text('comment');
            $table->timestamp('review_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
