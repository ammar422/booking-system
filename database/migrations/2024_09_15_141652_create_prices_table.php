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
        Schema::create('prices', function (Blueprint $table) {
            $table->id(); // Primary key  
            $table->string('category'); // String column for category  
            $table->integer('max_age'); // Integer column for maximum age  
            $table->integer('min_age'); // Integer column for minimum age  
            $table->decimal('monthly_cost', 8, 2); // Decimal column for monthly cost  

            $table->timestamps(); // Includes created_at and updated_at timestamps 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
