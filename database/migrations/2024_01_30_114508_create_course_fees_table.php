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
        Schema::create('course_fees', function (Blueprint $table) {
            $table->id();
            $table->text('course_id')->nullable();
            $table->text('batch_id')->nullable();
            $table->text('amount')->nullable();
            $table->text('discount')->nullable();
            $table->text('status')->nullable();
            $table->text('admin_user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_fees');
    }
};
