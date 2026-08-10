<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnDelete();

            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable()->comment('Gambar cover utama / thumbnail');
            $table->longText('sub_description')->nullable()->comment('Isi detail artikel / deskripsi lengkap');
            $table->string('sub_image')->nullable()->comment('Gambar pendukung di dalam isi artikel');
            $table->enum('status', ['draft', 'published', 'archived'])
                ->nullable()
                ->default('draft');
            $table->unsignedInteger('views')->nullable()->default(0);

            $table->timestamps();

            $table->index(['status']);
            $table->index(['category_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
