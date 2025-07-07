<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('ukms', function (Blueprint $table) {
            // Tambahkan kolom 'nama_ukm' jika belum ada
            if (!Schema::hasColumn('ukms', 'nama_ukm')) {
                $table->string('nama_ukm');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ukms', function (Blueprint $table) {
            // Rollback: hapus kolom 'nama_ukm'
            $table->dropColumn('nama_ukm');
        });
    }
};
