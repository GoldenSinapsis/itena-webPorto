<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * GET /api/categories
     */
    public function index(Request $request): JsonResponse
    {
        $categories = Category::query()
            ->withCount('articles')
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->input('search') . '%');
            })
            ->latest()
            ->paginate($request->integer('per_page', 15));

        return response()->json([
            'message' => 'Daftar kategori berhasil diambil.',
            'data' => CategoryResource::collection($categories),
            'meta' => [
                'current_page' => $categories->currentPage(),
                'last_page' => $categories->lastPage(),
                'total' => $categories->total(),
            ],
        ]);
    }

    /**
     * POST /api/categories
     */
    public function store(StoreCategoryRequest $request): JsonResponse
    {
        $category = Category::create($request->validated());

        return response()->json([
            'message' => 'Kategori berhasil dibuat.',
            'data' => new CategoryResource($category),
        ], 201);
    }

    /**
     * GET /api/categories/{category}
     */
    public function show(Category $category): JsonResponse
    {
        $category->loadCount('articles');

        return response()->json([
            'message' => 'Detail kategori berhasil diambil.',
            'data' => new CategoryResource($category),
        ]);
    }

    /**
     * PUT/PATCH /api/categories/{category}
     */
    public function update(UpdateCategoryRequest $request, Category $category): JsonResponse
    {
        $category->update($request->validated());

        return response()->json([
            'message' => 'Kategori berhasil diperbarui.',
            'data' => new CategoryResource($category),
        ]);
    }

    /**
     * DELETE /api/categories/{category}
     */
    public function destroy(Category $category): JsonResponse
    {
        $category->delete();

        return response()->json([
            'message' => 'Kategori berhasil dihapus.',
        ]);
    }
}
