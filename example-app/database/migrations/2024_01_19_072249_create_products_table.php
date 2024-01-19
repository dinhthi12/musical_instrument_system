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
            $table->string('product_name');
            $table->decimal('product_price', 10, 2);
            $table->string('product_image')->default('');
            $table->integer('product_view')->default(0);
            $table->integer('product_quantity');
            $table->text('product_detail');
            $table->tinyInteger('product_discount')->default(0);
            $table->tinyInteger('product_hot')->default(0);
            $table->tinyInteger('product_status')->default(0);

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
