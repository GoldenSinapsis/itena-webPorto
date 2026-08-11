<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * GET /admin/categories
     */
    public function index(Request $request): View
    {
        $categories = Category::query()
            ->withCount('articles')
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->input('search') . '%');
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * GET /admin/categories/create
     */
    public function create(): View
    {
        return view('admin.categories.create');
    }

    /**
     * POST /admin/categories
     */
    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        Category::create($request->validated());

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Kategori berhasil dibuat.');
    }

    /**
     * GET /admin/categories/{category}/edit
     */
    public function edit(Category $category): View
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * PUT/PATCH /admin/categories/{category}
     */
    public function update(UpdateCategoryRequest $request, Category $category): RedirectResponse
    {
        $category->update($request->validated());

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * DELETE /admin/categories/{category}
     */
    public function destroy(Category $category): RedirectResponse
    {
        if ($category->articles()->exists()) {
            return redirect()
                ->route('admin.categories.index')
                ->with('error', 'Kategori tidak bisa dihapus karena masih memiliki artikel terkait.');
        }

        $category->delete();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}