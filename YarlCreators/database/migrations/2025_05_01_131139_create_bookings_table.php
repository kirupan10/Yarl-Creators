<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('profile')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('name');
            $table->string('service');
            $table->string('package')->nullable();
            $table->date('date');
            $table->text('message')->nullable();
            $table->string('status')->default('Pending');
            $table->string('payment')->default('Event Day');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
