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
        Schema::create('income_details', function(Blueprint $table) {
            $table->id();
            $table->foreignId('income_id')->constrained()->cascadeOnDelete();
            $table->foreignId('income_subcategory_id')->constrained();
            $table->decimal('amount', 10, 2);
            $table->string('description')->nullable();
            $table->enum('status', ['ACTIVE', 'DEACTIVATE'])->default('ACTIVE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income_details');
    }
};
