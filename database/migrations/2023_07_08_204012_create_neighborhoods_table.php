<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('neighborhoods', function(Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('code');
            $table->string('identifier');
            //            $table->foreignId('municipality_id')->constrained();
            $table->float('averagePrice')->nullable();
            //            $table->string('slug')->unique();
            $table->string('municipalityCode');
            $table->string('provinceCode');
            $table->string('regionCode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neighborhoods');
    }
};
