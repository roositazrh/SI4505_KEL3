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
        Schema::create('galeris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_desa');
            $table->string('slug');
            $table->text('alamat');
            $table->string('provinsi');
            $table->text('sumber_daya');
            $table->text('img_source');
            $table->decimal('lintang', 9, 6);
            $table->decimal('bujur', 9, 6);
            $table->dateTime('tanggal_publish');
            $table->longText('deskripsi_desa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
