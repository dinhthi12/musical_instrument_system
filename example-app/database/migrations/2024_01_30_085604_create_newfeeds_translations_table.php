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
        Schema::create('newfeeds_translations', function (Blueprint $table) {
            $table->id();
            $table->string('headline');
            $table->text('content');
            $table->enum('status',['Public','Private','Draft'])->default('Draft');
            $table->unsignedInteger('view')->default(0);
            $table->unsignedInteger('like')->default(0);
            $table->unsignedInteger('share')->default(0);
            $table->text('excerpt')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('locale')->index();

            $table->unsignedBigInteger('newfeeds_id');
            $table->foreign('newfeeds_id')->references('id')->on('newfeeds')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newfeeds_translations');
    }
};
