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
            $table->string('name');              // Product / Course Name
            $table->string('sku')->unique();     // SKU / Code (e.g., TOOL-001)
            $table->text('description')->nullable();
            $table->string('category');         // Category
            $table->integer('quantity')->default(0);      // Stock Quantity
            $table->integer('reorder_level')->default(10); // Reorder threshold
            $table->decimal('unit_price', 8, 2)->default(0); // Unit Price
            $table->string('supplier')->nullable();      // Supplier / Instructor
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