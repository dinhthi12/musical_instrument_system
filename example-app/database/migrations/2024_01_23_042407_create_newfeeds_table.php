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
        Schema::create('newfeeds', function (Blueprint $table) {
            $table->id();
            $table->string('headline');
            $table->text('content');
            $table->enum('status',['Public','Private','Draft'])->default('Draft');
            $table->unsignedInteger('view')->default(0);
            $table->unsignedInteger('like')->default(0);
            $table->unsignedInteger('share')->default(0);
            $table->text('excerpt')->nullable();
            $table->string('featured_image')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newfeeds');
    }
};
