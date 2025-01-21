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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->text('short_description');
            $table->text('tags')->nullable();
            $table->text('description');
            $table->decimal('price', 15, 2);
            $table->decimal('discount_price', 15, 2)->nullable();
            $table->boolean('status')->default(1);
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
