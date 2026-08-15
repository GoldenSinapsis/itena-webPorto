@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        @if(isset($article))
            {{-- Detail Artikel --}}
            <article class="max-w-4xl mx-auto">
                <h1 class="text-3xl font-bold mb-4">{{ $article->name }}</h1>
                
                @if($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->name }}" class="w-full h-96 object-cover rounded-lg mb-6">
                @endif
                
                <div class="prose max-w-none">
                    {!! $article->description !!}
                </div>
                
                @if(isset($relatedArticles) && $relatedArticles->count() > 0)
                    <div class="mt-12">
                        <h2 class="text-2xl font-bold mb-4">Artikel Terkait</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            @foreach($relatedArticles as $related)
                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                    @if($related->image)
                                        <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->name }}" class="w-full h-48 object-cover">
                                    @endif
                                    <div class="p-4">
                                        <h3 class="font-semibold text-lg mb-2">
                                            <a href="{{ route('articles.show', $related->slug) }}" class="hover:text-blue-600">
                                                {{ $related->name }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </article>
        @else
            {{-- Daftar Artikel --}}
            <h1 class="text-3xl font-bold mb-8">Artikel & Portofolio</h1>
            
            {{-- Filter --}}
            <div class="mb-6 flex flex-wrap gap-2">
                <a href="{{ route('articles.index') }}" class="px-4 py-2 bg-gray-200 rounded-full hover:bg-gray-300 {{ !request('category') ? 'bg-blue-600 text-white' : '' }}">
                    Semua
                </a>
                @foreach($categories as $category)
                    <a href="{{ route('articles.index', ['category' => $category->slug]) }}" 
                       class="px-4 py-2 bg-gray-200 rounded-full hover:bg-gray-300 {{ request('category') == $category->slug ? 'bg-blue-600 text-white' : '' }}">
                        {{ $category->name }} ({{ $category->articles_count }})
                    </a>
                @endforeach
            </div>
            
            {{-- Grid Artikel --}}
            @if($articles->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($articles as $item)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-full h-48 object-cover">
                            @endif
                            <div class="p-4">
                                <h2 class="font-semibold text-xl mb-2">
                                    <a href="{{ route('articles.show', $item->slug) }}" class="hover:text-blue-600">
                                        {{ $item->name }}
                                    </a>
                                </h2>
                                <p class="text-gray-600 text-sm mb-2">{{ Str::limit($item->description, 100) }}</p>
                                <div class="flex justify-between items-center text-sm text-gray-500">
                                    <span>{{ $item->category->name ?? 'Uncategorized' }}</span>
                                    <span>{{ $item->created_at->format('d M Y') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="mt-6">
                    {{ $articles->links() }}
                </div>
            @else
                <div class="text-center py-12">
                    <p class="text-gray-500">Belum ada artikel yang dipublikasikan.</p>
                </div>
            @endif
        @endif
    </div>
@endsection