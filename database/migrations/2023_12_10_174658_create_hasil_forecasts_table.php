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
        Schema::create('hasil_forecasts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('forecastings_id');
            $table->decimal("Y1");
            $table->decimal("Y2");
            $table->decimal("a");
            $table->decimal("b");
            $table->decimal("forecast");
            $table->decimal("mape", 8, 3);
            $table->decimal("mse");
            $table->decimal("alpha");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_forecasts');
    }
};
