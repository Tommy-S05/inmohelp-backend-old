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
        Schema::create('expense_details', function(Blueprint $table) {
            $table->id();
            $table->foreignId('expense_id')->constrained();
            $table->foreignId('expense_subcategory_id')->constrained();
            //            $table->foreignId('expense_category_id')->constrained();
            $table->decimal('amount', 10, 2);
            $table->string('description')->nullable();
            $table->enum('status', ['ACTIVE', 'DEACTIVATE'])->default('ACTIVE');
            //            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expense_details');
    }
};
