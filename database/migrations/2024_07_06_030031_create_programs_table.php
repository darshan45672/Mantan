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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->enum('type', ['SDP', 'FDP', 'STTP', 'Workshop', 'Seminar', 'Conference', 'Webinar', 'Hackathon', 'Bootcamp', 'Other'])->default('Other');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('duration');
            $table->string('fees')->nullable();
            $table->string('location');
            $table->string('organiser')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
