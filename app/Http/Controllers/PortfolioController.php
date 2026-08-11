<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PortfolioController extends Controller
{
    /**
     * GET / — daftar artikel/portofolio yang published.
     */
    public function index(): View
    {
        $articles = Article::query()
            ->published()
            ->with(['category', 'user'])
            ->latest()
            ->paginate(9);

        return view('portfolio.index', compact('articles'));
    }

    /**
     * GET /artikel/{article:slug} — detail artikel publik.
     */
    public function show(Article $article): View
    {
        if ($article->status !== Article::STATUS_PUBLISHED) {
            throw new NotFoundHttpException();
        }

        $article->load(['category', 'user']);
        $article->incrementViews();

        return view('portfolio.show', compact('article'));
    }
}