<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artikel | ITENA Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.partials.navbar')
        @include('admin.partials.sidebar')

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Artikel</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.articles.index') }}">Artikel</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <h5><i class="icon fas fa-ban"></i> Validasi Gagal!</h5>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-edit mr-2"></i>Edit Artikel: {{ $article->name }}
                            </h3>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Judul Artikel <span class="text-danger">*</span></label>
                                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" 
                                                   value="{{ old('name', $article->name) }}" required>
                                            @error('name')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="slug">Slug <span class="text-danger">*</span></label>
                                            <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" 
                                                   value="{{ old('slug', $article->slug) }}" required>
                                            @error('slug')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                            <small class="text-muted">URL: {{ url('/articles') }}/<span id="slug-preview">{{ $article->slug }}</span></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Deskripsi / Konten <span class="text-danger">*</span></label>
                                            <textarea name="description" id="description" rows="10" class="form-control @error('description') is-invalid @enderror" required>{{ old('description', $article->description) }}</textarea>
                                            @error('description')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="category_id">Kategori <span class="text-danger">*</span></label>
                                            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
                                                <option value="">Pilih Kategori</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="status">Status <span class="text-danger">*</span></label>
                                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                                                <option value="draft" {{ old('status', $article->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                                <option value="published" {{ old('status', $article->status) == 'published' ? 'selected' : '' }}>Published</option>
                                                <option value="archived" {{ old('status', $article->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                                            </select>
                                            @error('status')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        @if($article->image)
                                            <div class="form-group">
                                                <label>Gambar Cover Saat Ini</label>
                                                <div>
                                                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->name }}" class="img-thumbnail" style="max-height: 150px; max-width: 100%;">
                                                </div>
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="image">Ganti Gambar Cover</label>
                                            <div class="custom-file">
                                                <input type="file" name="image" id="image" class="custom-file-input @error('image') is-invalid @enderror" accept="image/*">
                                                <label class="custom-file-label" for="image">Pilih gambar...</label>
                                            </div>
                                            @error('image')
                                                <span class="invalid-feedback d-block">{{ $message }}</span>
                                            @enderror
                                            <small class="text-muted">Format: JPG, PNG, WEBP. Maks: 2MB</small>
                                        </div>

                                        @if($article->sub_image)
                                            <div class="form-group">
                                                <label>Gambar Pendukung Saat Ini</label>
                                                <div>
                                                    <img src="{{ asset('storage/' . $article->sub_image) }}" alt="Sub image" class="img-thumbnail" style="max-height: 150px; max-width: 100%;">
                                                </div>
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="sub_image">Ganti Gambar Pendukung</label>
                                            <div class="custom-file">
                                                <input type="file" name="sub_image" id="sub_image" class="custom-file-input @error('sub_image') is-invalid @enderror" accept="image/*">
                                                <label class="custom-file-label" for="sub_image">Pilih gambar...</label>
                                            </div>
                                            @error('sub_image')
                                                <span class="invalid-feedback d-block">{{ $message }}</span>
                                            @enderror
                                            <small class="text-muted">Format: JPG, PNG, WEBP. Maks: 2MB</small>
                                        </div>

                                        <div class="form-group">
                                            <label for="sub_description">Sub Deskripsi</label>
                                            <textarea name="sub_description" id="sub_description" rows="3" class="form-control @error('sub_description') is-invalid @enderror" 
                                                      placeholder="Sub deskripsi artikel...">{{ old('sub_description', $article->sub_description) }}</textarea>
                                            @error('sub_description')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <hr>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save mr-2"></i> Update Artikel
                                        </button>
                                        <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">
                                            <i class="fas fa-times mr-2"></i> Batal
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        @include('admin.partials.footer')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/jquery.overlayScrollbars.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Auto-generate slug from name
            $('#name').on('keyup', function() {
                const name = $(this).val();
                if (name) {
                    const slug = name.toLowerCase()
                        .replace(/[^a-z0-9-]/g, '-')
                        .replace(/-+/g, '-')
                        .replace(/^-|-$/g, '');
                    if ($('#slug').val() === '') {
                        $('#slug').val(slug);
                        $('#slug-preview').text(slug || '...');
                    }
                }
            });

            // File input display
            $('.custom-file-input').on('change', function() {
                const fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').html(fileName);
            });

            $('#slug').on('keyup', function() {
                $('#slug-preview').text($(this).val() || '...');
            });
        });
    </script>
</body>
</html>