<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();

            // link to models table (your earlier table name was 'models')
            $table->foreignId('model_id')->constrained('models')->cascadeOnDelete();

            // logical name for the asset (close_up_image, full_body_image, video, signature, etc.)
            $table->string('name');

            // storage path (relative) and public URL
            $table->string('path'); // e.g. "models/2025/9/7/filename.jpg"
            $table->string('url');  // Storage::url(path) for quick use in views

            // type classification
            $table->enum('type', ['image', 'video'])->index();

            // metadata
            $table->string('mime_type')->nullable();
            $table->unsignedBigInteger('size')->nullable(); // bytes
            $table->string('disk')->default('public'); // which disk was used
            $table->string('original_name')->nullable();

            // optional image dimensions
            $table->unsignedSmallInteger('width')->nullable();
            $table->unsignedSmallInteger('height')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // convenience indexes / constraint
            $table->unique(['model_id', 'name']); // one named asset per model (change if you want multiples)
            $table->index(['model_id', 'type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
