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
        Schema::create('services', function (Blueprint $table) {
            $table->id(); // This will create an auto-incrementing primary key
            $table->string('nameser', 255); // Define the maximum length for the string column
            $table->text('description')->nullable(); // Nullable text column
            $table->decimal('prixser', 8, 3); // Decimal column with precision 8 and scale 3
            $table->timestamps(); // Optionally, if you want timestamps created_at and updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('services');
    }
};
