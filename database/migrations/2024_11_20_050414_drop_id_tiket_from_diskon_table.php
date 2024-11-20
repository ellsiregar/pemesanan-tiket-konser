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
        Schema::table('diskon', function (Blueprint $table) {
            $table->dropForeign(['id_tiket']);

            // Hapus kolom id_tiket
            $table->dropColumn('id_tiket');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('diskon', function (Blueprint $table) {
            $table->unsignedBigInteger('id_tiket')->nullable();
        });
    }
};
