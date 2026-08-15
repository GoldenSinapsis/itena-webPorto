<?php

namespace App\Http\Controllers;

use App\Models\Article; // ✅ Gunakan Article (PascalCase)
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PortfolioController extends Controller
{
    /**
     * GET /articles — daftar artikel/portofolio published.
     * Mendukung ?category=slug-kategori dan ?search=kata-kunci.
     */
    public function index(Request $request): View
    {
        $articles = Article::query() // ✅ Gunakan Article
            ->published()
            ->with(['category', 'user'])
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->whereHas('category', function ($q) use ($request) {
                    $q->where('slug', $request->input('category'));
                });
            })
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->input('search') . '%');
            })
            ->latest()
            ->paginate(9)
            ->withQueryString();

        $categories = Category::query()
            ->withCount('articles')
            ->orderBy('name')
            ->get();

        return view('pages.articles', compact('articles', 'categories'));
    }

    /**
     * GET /articles/{article:slug} — detail artikel publik.
     */
    public function show(Article $article): View // ✅ Gunakan Article
    {
        if ($article->status !== Article::STATUS_PUBLISHED) { // ✅ Gunakan Article
            throw new NotFoundHttpException();
        }

        $article->load(['category', 'user']);
        $article->incrementViews();

        $relatedArticles = Article::query() // ✅ Gunakan Article
            ->published()
            ->where('category_id', $article->category_id)
            ->where('id', '!=', $article->id)
            ->latest()
            ->take(3)
            ->get();

        return view('pages.articles', compact('article', 'relatedArticles'));
        //                          ^^^^^^^ gunakan 'article' singular, bukan 'articles'
    }
}