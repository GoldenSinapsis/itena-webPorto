<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | ITENA Admin</title>

    <!-- AdminLTE 3 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- ======================== NAVBAR ======================== -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">Dashboard</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- User Info -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-user-circle fa-lg"></i>
                        <span class="ml-1 d-none d-sm-inline">{{ Auth::user()->name ?? 'Admin' }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <span class="dropdown-item text-muted text-sm">
                            <i class="fas fa-envelope mr-2"></i>{{ Auth::user()->email ?? 'admin@itena.com' }}
                        </span>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- ======================== END NAVBAR ======================== -->

        <!-- ======================== SIDEBAR ======================== -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('admin.dashboard') }}" class="brand-link">
                <span class="brand-text font-weight-light">ITENA <span style="color: #fbbf24;">Admin</span></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <i class="fas fa-user-circle fa-2x text-white"></i>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name ?? 'Administrator' }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <!-- Dashboard -->
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <!-- Artikel -->
                        <li class="nav-item">
                            <a href="{{ route('admin.articles.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>Artikel</p>
                            </a>
                        </li>

                        <!-- Kategori -->
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>Kategori</p>
                            </a>
                        </li>

                        <!-- Kontak Messages -->
                        <li class="nav-item">
                            <a href="{{ route('admin.messages.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>Pesan Kontak</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- ======================== END SIDEBAR ======================== -->

        <!-- ======================== CONTENT WRAPPER ======================== -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Dashboard Analytics</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- ========== STATS BOXES ========== -->
                    <div class="row">
                        <!-- Total articless -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $stats['total_articless'] ?? 0 }}</h3>
                                    <p>Total Artikel</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-newspaper"></i>
                                </div>
                                <a href="{{ route('admin.articles.index') }}" class="small-box-footer">
                                    Lihat Semua <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Published articless -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $stats['published_articless'] ?? 0 }}</h3>
                                    <p>Artikel Published</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <a href="{{ route('admin.articles.index') }}" class="small-box-footer">
                                    Lihat Semua <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Draft articless -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{ $stats['draft_articless'] ?? 0 }}</h3>
                                    <p>Artikel Draft</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <a href="{{ route('admin.articles.index') }}" class="small-box-footer">
                                    Lihat Semua <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Total Categories -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $stats['total_categories'] ?? 0 }}</h3>
                                    <p>Total Kategori</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-folder"></i>
                                </div>
                                <a href="{{ route('admin.categories.index') }}" class="small-box-footer">
                                    Lihat Semua <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- ========== END STATS BOXES ========== -->

                    <!-- ========== RECENT articlesS TABLE ========== -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-clock mr-2"></i>Artikel Terbaru
                                    </h3>
                                    <div class="card-tools">
                                        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus mr-1"></i> Tambah Artikel
                                        </a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Penulis</th>
                                                <th>Status</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($recentarticless ?? [] as $articles)
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('articles.show', $articles->slug) }}" target="_blank">
                                                            {{ Str::limit($articles->title ?? 'Untitled', 40) }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-info">
                                                            {{ $articles->category->name ?? 'Uncategorized' }}
                                                        </span>
                                                    </td>
                                                    <td>{{ $articles->user->name ?? 'Unknown' }}</td>
                                                    <td>
                                                        @if(($articles->status ?? '') === 'published')
                                                            <span class="badge badge-success">
                                                                <i class="fas fa-check-circle mr-1"></i>Published
                                                            </span>
                                                        @else
                                                            <span class="badge badge-warning">
                                                                <i class="fas fa-pencil-alt mr-1"></i>Draft
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $articles->created_at ? $articles->created_at->format('d/m/Y H:i') : '-' }}</td>
                                                    <td>
                                                        <div class="btn-group btn-group-sm">
                                                            <a href="{{ route('admin.articles.edit', $articles->id) }}" class="btn btn-info">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="{{ route('articles.show', $articles->slug) }}" target="_blank" class="btn btn-secondary">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center py-4 text-muted">
                                                        <i class="fas fa-inbox fa-2x d-block mb-2"></i>
                                                        Belum ada artikel. <a href="{{ route('admin.articles.create') }}">Buat artikel pertama</a>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <div class="float-right">
                                        <a href="{{ route('admin.articles.index') }}" class="btn btn-sm btn-outline-secondary">
                                            Lihat Semua Artikel <i class="fas fa-arrow-right ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- ========== END RECENT articlesS TABLE ========== -->

                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- ======================== END CONTENT WRAPPER ======================== -->

        <!-- ======================== FOOTER ======================== -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>&copy; {{ date('Y') }} <a href="#">ITENA</a>.</strong> All rights reserved.
        </footer>
        <!-- ======================== END FOOTER ======================== -->

    </div>
    <!-- ./wrapper -->

    <!-- ======================== SCRIPTS ======================== -->
    <!-- jQuery, Bootstrap 4, AdminLTE 3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/jquery.overlayScrollbars.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>

    <!-- Optional: Auto-hide sidebar on mobile -->
    <script>
        $(document).ready(function() {
            $('[data-widget="pushmenu"]').on('click', function() {
                $('body').toggleClass('sidebar-collapse');
            });
        });
    </script>
</body>
</html>