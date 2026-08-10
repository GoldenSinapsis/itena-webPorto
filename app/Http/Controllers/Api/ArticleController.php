<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Article\StoreArticleRequest;
use App\Http\Requests\Article\UpdateArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * GET /api/articles
     * Mendukung filter: ?status=published&category=slug-kategori&search=kata-kunci
     */
    public function index(Request $request): JsonResponse
    {
        $articles = Article::query()
            ->with(['user', 'category'])
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->input('status'));
            })
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->whereHas('category', function ($q) use ($request) {
                    $q->where('slug', $request->input('category'));
                });
            })
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->input('search') . '%');
            })
            ->latest()
            ->paginate($request->integer('per_page', 15));

        return response()->json([
            'message' => 'Daftar artikel berhasil diambil.',
            'data' => ArticleResource::collection($articles),
            'meta' => [
                'current_page' => $articles->currentPage(),
                'last_page' => $articles->lastPage(),
                'total' => $articles->total(),
            ],
        ]);
    }

    /**
     * POST /api/articles
     */
    public function store(StoreArticleRequest $request): JsonResponse
    {
        $data = $request->validated();
        $data['user_id'] = $request->user()->id;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('articles/covers', 'public');
        }

        if ($request->hasFile('sub_image')) {
            $data['sub_image'] = $request->file('sub_image')->store('articles/sub-images', 'public');
        }

        $article = Article::create($data);

        return response()->json([
            'message' => 'Artikel berhasil dibuat.',
            'data' => new ArticleResource($article->load(['user', 'category'])),
        ], 201);
    }

    /**
     * GET /api/articles/{article}
     */
    public function show(Article $article): JsonResponse
    {
        $article->load(['user', 'category']);
        $article->incrementViews();

        return response()->json([
            'message' => 'Detail artikel berhasil diambil.',
            'data' => new ArticleResource($article),
        ]);
    }

    /**
     * PUT/PATCH /api/articles/{article}
     */
    public function update(UpdateArticleRequest $request, Article $article): JsonResponse
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

        return response()->json([
            'message' => 'Artikel berhasil diperbarui.',
            'data' => new ArticleResource($article->load(['user', 'category'])),
        ]);
    }

    /**
     * DELETE /api/articles/{article}
     */
    public function destroy(Article $article): JsonResponse
    {
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        if ($article->sub_image) {
            Storage::disk('public')->delete($article->sub_image);
        }

        $article->delete();

        return response()->json([
            'message' => 'Artikel berhasil dihapus.',
        ]);
    }
}
