<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Urban CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .sidebar {
            min-height: 100vh;
            background: #1a4d3c;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            left: 0;
            width: 260px;
            z-index: 1000;
        }
        
        .sidebar .brand {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .sidebar .brand h4 {
            color: #fff;
            font-weight: 700;
            margin: 0;
            font-size: 1.5rem;
        }
        
        .sidebar .nav {
            padding: 1rem 0;
        }
        
        .sidebar .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 0.75rem 1.5rem;
            margin: 0.25rem 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .sidebar .nav-link i {
            font-size: 1.1rem;
            width: 20px;
        }
        
        .sidebar .nav-link:hover {
            background: rgba(255,255,255,0.15);
            color: #fff;
            transform: translateX(5px);
        }
        
        .sidebar .nav-link.active {
            background: rgba(255,255,255,0.25);
            color: #fff;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }
        
        main {
            margin-left: 260px;
            padding: 2rem;
            min-height: 100vh;
        }
        
        .page-header {
            background: #fff;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }
        
        .page-header h1 {
            font-size: 1.75rem;
            font-weight: 700;
            color: #1a4d3c;
            margin: 0;
        }
        
        .stat-card {
            background: #fff;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border-left: 4px solid;
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(157, 179, 171, 0.2) 0%, transparent 70%);
            transition: all 0.5s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 25px rgba(26, 77, 60, 0.25);
        }
        
        .stat-card:hover::before {
            top: -30%;
            right: -30%;
        }
        
        .stat-card.primary {
            border-left-color: #1a4d3c;
            background: #1a4d3c;
            color: #fff;
        }
        
        .stat-card.success {
            border-left-color: #1a4d3c;
            background: #1a4d3c;
            color: #fff;
        }
        
        .stat-card.warning {
            border-left-color: #1a4d3c;
            background: #1a4d3c;
            color: #fff;
        }
        
        .stat-card.info {
            border-left-color: #1a4d3c;
            background: #1a4d3c;
            color: #fff;
        }
        
        .stat-card .stat-icon {
            font-size: 2.5rem;
            opacity: 0.3;
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
        }
        
        .stat-card .stat-value {
            font-size: 2rem;
            font-weight: 700;
            margin: 0.5rem 0;
        }
        
        .stat-card .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .card:hover {
            box-shadow: 0 5px 25px rgba(0,0,0,0.12);
        }
        
        .card-header {
            background: #1a4d3c;
            color: #fff;
            border-radius: 12px 12px 0 0 !important;
            padding: 1.25rem;
            font-weight: 600;
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table thead th {
            background: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            color: #495057;
        }
        
        .table tbody tr {
            transition: all 0.2s ease;
        }
        
        .table tbody tr:hover {
            background: #f8f9fa;
            transform: scale(1.01);
        }
        
        .badge {
            padding: 0.5rem 0.75rem;
            font-weight: 500;
            border-radius: 6px;
        }
        
        .btn {
            border-radius: 8px;
            padding: 0.5rem 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background: #1a4d3c;
            border-color: #1a4d3c;
        }
        
        .btn-primary:hover {
            background: #153d2f;
            border-color: #153d2f;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(26, 77, 60, 0.3);
        }
        
        .btn-outline-primary {
            color: #1a4d3c;
            border-color: #1a4d3c;
        }
        
        .btn-outline-primary:hover {
            background: #1a4d3c;
            border-color: #1a4d3c;
            color: #fff;
        }
        
        .btn-secondary {
            background: #6c757d;
            border-color: #6c757d;
            color: #fff;
        }
        
        .btn-secondary:hover {
            background: #5a6268;
            border-color: #5a6268;
            color: #fff;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }
        
        /* Override Bootstrap primary colors */
        .text-primary {
            color: #1a4d3c !important;
        }
        
        .bg-primary {
            background-color: #1a4d3c !important;
        }
        
        .border-primary {
            border-color: #1a4d3c !important;
        }
        
        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }
        
        .btn-success {
            background-color: #1a4d3c;
            border-color: #1a4d3c;
        }
        
        .btn-success:hover {
            background-color: #153d2f;
            border-color: #153d2f;
        }
        
        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
            color: #fff;
        }
        
        .btn-info:hover {
            background-color: #138496;
            border-color: #138496;
            color: #fff;
        }
        
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #000;
        }
        
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #e0a800;
            color: #000;
        }
        
        .card-footer {
            background-color: #f8f9fa !important;
        }
        
        .card-footer .btn-outline-primary {
            border-color: #1a4d3c;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav class="sidebar">
        <div class="brand">
            <h4><i class="bi bi-layout-text-window-reverse"></i> Urban CMS</h4>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-speedometer2"></i> <span>Dashboard</span>
                </a>
            </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}" href="{{ route('admin.blogs.index') }}">
                            <i class="bi bi-journal-text"></i> <span>Blogs</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}" href="{{ route('admin.categories.index') }}">
                            <i class="bi bi-tags"></i> <span>Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}" href="{{ route('admin.profile.show') }}">
                            <i class="bi bi-person-circle"></i> <span>Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('admin.logout') }}" method="POST" class="d-inline w-100">
                            @csrf
                            <button type="submit" class="nav-link border-0 bg-transparent text-white w-100 text-start">
                                <i class="bi bi-box-arrow-right"></i> <span>Logout</span>
                            </button>
                        </form>
                    </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main>
        <div class="page-header fade-in">
            <h1>
                @hasSection('page-icon')
                    <i class="bi bi-@yield('page-icon')"></i>
                @else
                    <i class="bi bi-speedometer2"></i>
                @endif
                @yield('page-title', 'Dashboard')
            </h1>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show fade-in" role="alert">
                <i class="bi bi-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show fade-in" role="alert">
                <i class="bi bi-exclamation-triangle"></i>
                <ul class="mb-0 mt-2">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
