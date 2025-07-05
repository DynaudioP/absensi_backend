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
        Schema::create('absensis', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
    $table->date('tanggal');
    $table->time('jam_masuk')->nullable();
    $table->time('jam_keluar')->nullable();
    $table->boolean('terlambat')->default(false);
    $table->boolean('pulang_cepat')->default(false);
    $table->enum('status', ['hadir', 'cuti', 'alpa', 'izin'])->default('hadir');

    // Tambahan data lokasi & verifikasi
    $table->string('foto_muka')->nullable();
    $table->string('foto_lokasi')->nullable();
    $table->text('lokasi')->nullable();

    $table->timestamps();

    // Satu absensi per user per hari
    $table->unique(['user_id', 'tanggal']);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};
