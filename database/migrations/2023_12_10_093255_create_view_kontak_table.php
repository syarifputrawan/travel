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
        Schema::create('view_kontak', function (Blueprint $table) {
            $table->id();
            $table->string('judul_sambutan');
            $table->text('penjelasan_view');
            $table->text('penjelasan_treveling');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_kontak');
    }
};
