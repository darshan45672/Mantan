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
        Schema::create('ho_d_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDeleteCascade();
            $table->foreignId('college_id')->constrained('colleges')->onDeleteCascade();
            $table->foreignId('department_id')->constrained('departments')->onDeleteCascade();
            $table->boolean('status')->default(false);
            $table->string('qualification');
            $table->string('experience');
            $table->string('specialization');
            $table->dateTime('joining_date');
            $table->dateTime('leaving_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ho_d_s');
    }
};
