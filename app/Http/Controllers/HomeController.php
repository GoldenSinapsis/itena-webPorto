<?php

namespace App\Http\Controllers;

use App\Models\articles;
use App\Models\Category;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * GET / — landing page, menyisipkan artikel/portofolio terbaru + kategori.
     */
    public function home(): View
    {
        $articles = articles::query()
            ->published()
            ->with('category')
            ->latest()
            ->take(3)
            ->get();

        $categories = Category::query()
            ->withCount('articles')
            ->orderBy('name')
            ->take(6)
            ->get();

        return view('welcome', compact('articles', 'categories'));
    }

    /**
     * GET /tentang-kami
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * GET /harga
     */
    public function pricing(): View
    {
        return view('pages.pricing');
    }

    /**
     * GET /hubungi-kami — hanya menampilkan form (submit ditangani ContactController).
     */
    public function contact(): View
    {
        return view('pages.contact');
    }
}
