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
        Schema::create('ramalan_selanjutnyas', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('periode');
            $table->decimal('forecast');
            $table->decimal('alpha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramalan_selanjutnyas');
    }
};
