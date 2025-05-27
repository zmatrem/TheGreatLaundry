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
    Schema::table('layanan', function (Blueprint $table) {
        $table->enum('layanan', ['Menunggu', 'Diproses', 'Selesai'])->default('Menunggu');
    });
}

public function down(): void
{
    Schema::table('layanan', function (Blueprint $table) {
        $table->dropColumn('layanan');
    });
}

};
