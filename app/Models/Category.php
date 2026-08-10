<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Relasi: satu kategori memiliki banyak artikel.
     */
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    /**
     * Route model binding menggunakan slug, bukan id.
     * Memungkinkan penggunaan /categories/{category:slug} di route.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
