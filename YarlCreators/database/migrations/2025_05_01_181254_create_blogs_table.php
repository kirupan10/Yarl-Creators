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
    Schema::create('blogs', function (Blueprint $table) {
        $table->id();
        $table->string('main_title');
        $table->date('date');
        $table->string('category');
        $table->string('image'); // path to main image
        $table->text('excerpt'); // short description
        $table->string('sub_heading')->nullable();
        $table->text('sub_details')->nullable();
        $table->longText('full_details');
        $table->json('additional_images')->nullable(); // store array of image paths
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
