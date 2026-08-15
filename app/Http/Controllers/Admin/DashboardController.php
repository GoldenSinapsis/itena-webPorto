<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article; // Fixed: Article (PascalCase)
use App\Models\Category;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'total_articles' => Article::count(),
            'published_articles' => Article::where('status', Article::STATUS_PUBLISHED)->count(),
            'draft_articles' => Article::where('status', Article::STATUS_DRAFT)->count(),
            'total_categories' => Category::count(),
        ];

        $recentarticles = Article::with(['user', 'category'])
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recentarticles'));
    }
}