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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['sale', 'rent', 'booking']);
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->enum('status', ['pending', 'approved', 'unapproved']);
            $table->decimal('price', 15, 2);
            $table->string('address')->nullable();
            $table->string('street')->nullable();
            $table->string('village_name')->nullable();
            $table->string('town_name')->nullable();
            $table->string('state_name')->nullable();
            $table->integer('size')->comment('Size in square feet')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
