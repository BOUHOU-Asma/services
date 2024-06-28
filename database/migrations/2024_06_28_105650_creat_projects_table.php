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
    Schema::create('projects', function (Blueprint $table) {
        $table->id(); // This will create an auto-incrementing primary key
        $table->unsignedBigInteger('user_id');
        $table->string('namepr', 255);
        $table->text('descriptionp')->nullable();
        $table->string('status', 255);
        $table->timestamps();
        
        $table->index('user_id');
        $table->foreign('user_id')->references('id')->on('users'); // Correct reference to 'users' table
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
