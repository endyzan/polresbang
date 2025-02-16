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
        Schema::create('polseks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_polsek');
            $table->string('foto_kapolsek');
            $table->text('deskripsi_kapolsek');
            $table->string('foto_bangunan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polseks');
    }
};
