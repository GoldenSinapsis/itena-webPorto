<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\articles\StorearticlesRequest;
use App\Http\Requests\articles\UpdatearticlesRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * GET /admin/articles
     */
    public function index(Request $request): View
    {
        $articles = Article::query()
            ->with(['user', 'category'])
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->input('status'));
            })
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->input('search') . '%');
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.articles.index', compact('articles'));
    }

    /**
     * GET /admin/articles/create
     */
    public function create(): View
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.articles.create', compact('categories'));
    }

    /**
     * POST /admin/articles
     */
    public function store(StorearticlesRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['user_id'] = $request->user()->id;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('articles/covers', 'public');
        }

        if ($request->hasFile('sub_image')) {
            $data['sub_image'] = $request->file('sub_image')->store('articles/sub-images', 'public');
        }

        Article::create($data);

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil dibuat.');
    }

    /**
     * GET /admin/articles/{article}/edit
     */
    public function edit(Article $article): View
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.articles.edit', compact('article', 'categories'));
    }

    /**
     * PUT/PATCH /admin/articles/{article}
     */
    public function update(UpdatearticlesRequest $request, Article $article): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $data['image'] = $request->file('image')->store('articles/covers', 'public');
        }

        if ($request->hasFile('sub_image')) {
            if ($article->sub_image) {
                Storage::disk('public')->delete($article->sub_image);
            }
            $data['sub_image'] = $request->file('sub_image')->store('articles/sub-images', 'public');
        }

        $article->update($data);

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * DELETE /admin/articles/{article}
     */
    public function destroy(Article $article): RedirectResponse
    {
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        if ($article->sub_image) {
            Storage::disk('public')->delete($article->sub_image);
        }

        $article->delete();

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil dihapus.');
    }
}