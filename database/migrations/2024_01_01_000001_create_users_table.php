<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * NOTE: Kolom mengikuti DDL yang diberikan secara ketat.
     * Jika nanti menggunakan Laravel Sanctum/Breeze untuk auth,
     * Anda mungkin perlu menambahkan kolom email_verified_at,
     * remember_token, dsb melalui migration terpisah.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'editor', 'author'])
                ->nullable()
                ->default('author');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
