<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Artikel | ITENA Admin</title>
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
                            <h1>Manajemen Artikel</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Artikel</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle mr-2"></i>{{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-list mr-2"></i>Daftar Artikel
                            </h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.articles.create') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus mr-1"></i> Tambah Artikel
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin.articles.index') }}" method="GET" class="mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control form-control-sm" onchange="this.form.submit()">
                                                <option value="">Semua Status</option>
                                                <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>Published</option>
                                                <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                                <option value="archived" {{ request('status') == 'archived' ? 'selected' : '' }}>Archived</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cari Artikel</label>
                                            <div class="input-group input-group-sm">
                                                <input type="text" name="search" class="form-control" placeholder="Cari judul artikel..." value="{{ request('search') }}">
                                                <span class="input-group-append">
                                                    <button type="submit" class="btn btn-info btn-flat">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                    @if(request('search') || request('status'))
                                                        <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary btn-flat ml-1">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Gambar</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Penulis</th>
                                            <th>Status</th>
                                            <th>Views</th>
                                            <th>Dibuat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($articles as $article)
                                            <tr>
                                                <td>{{ $loop->iteration + ($articles->currentPage() - 1) * $articles->perPage() }}</td>
                                                <td>
                                                    @if($article->image)
                                                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->name }}" width="50" height="50" class="img-thumbnail" style="object-fit: cover;">
                                                    @else
                                                        <span class="text-muted">No image</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <strong>{{ Str::limit($article->name ?? 'Untitled', 40) }}</strong>
                                                    <br>
                                                    <small class="text-muted">Slug: {{ $article->slug }}</small>
                                                </td>
                                                <td>
                                                    <span class="badge badge-info">
                                                        {{ $article->category->name ?? 'Uncategorized' }}
                                                    </span>
                                                </td>
                                                <td>{{ $article->user->name ?? 'Unknown' }}</td>
                                                <td>
                                                    @if(($article->status ?? '') === 'published')
                                                        <span class="badge badge-success">
                                                            <i class="fas fa-check-circle mr-1"></i>Published
                                                        </span>
                                                    @elseif(($article->status ?? '') === 'archived')
                                                        <span class="badge badge-secondary">
                                                            <i class="fas fa-archive mr-1"></i>Archived
                                                        </span>
                                                    @else
                                                        <span class="badge badge-warning">
                                                            <i class="fas fa-pencil-alt mr-1"></i>Draft
                                                        </span>
                                                    @endif
                                                </td>
                                                <td>{{ number_format($article->views ?? 0) }}</td>
                                                <td>{{ $article->created_at ? $article->created_at->format('d/m/Y') : '-' }}</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="{{ route('articles.show', $article->slug) }}" target="_blank" class="btn btn-secondary" title="Lihat">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-info" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-danger" title="Hapus" data-toggle="modal" data-target="#deleteModal{{ $article->id }}">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>

                                                    <div class="modal fade" id="deleteModal{{ $article->id }}" tabindex="-1">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                                                                    <button type="button" class="close" data-dismiss="modal">
                                                                        <span>&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Apakah Anda yakin ingin menghapus artikel "<strong>{{ $article->name }}</strong>"?</p>
                                                                    <p class="text-danger"><small>Tindakan ini tidak dapat dibatalkan.</small></p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="9" class="text-center py-4">
                                                    <i class="fas fa-inbox fa-3x d-block mb-2 text-muted"></i>
                                                    <p class="text-muted">Belum ada artikel.</p>
                                                    <a href="{{ route('admin.articles.create') }}" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-plus mr-1"></i> Tambah Artikel Pertama
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="float-right">
                                {{ $articles->links() }}
                            </div>
                            <div class="clearfix"></div>
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
</body>
</html>