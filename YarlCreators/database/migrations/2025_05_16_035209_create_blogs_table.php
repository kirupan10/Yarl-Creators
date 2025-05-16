<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date');
            $table->string('category');
            $table->string('main_image');
            $table->text('excerpt');
            $table->string('sub_heading')->nullable();
            $table->text('sub_details')->nullable();
            $table->longText('details');
            $table->json('gallery_images')->nullable();
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
