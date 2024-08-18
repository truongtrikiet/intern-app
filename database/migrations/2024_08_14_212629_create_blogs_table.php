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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable(false);
            $table->string('title');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->text('content')->nullable();
            $table->timestamp('publish_date')->nullable();
            $table->Integer('status_blog')->default(0);
            $table->timestamps();

            $table->foreign('user_email')->references('email')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
