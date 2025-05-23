<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('information', function (Blueprint $table): void {
            $table->uuid('id')->primary();

            $table->string('name', 255)->nullable();
            $table->date('date')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->unsignedInteger('number')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
