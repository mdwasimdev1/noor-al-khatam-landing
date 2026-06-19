<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard') — Noor Al Khatam</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --admin-bg: #f1f5f9;
            --admin-surface: #ffffff;
            --admin-surface-2: #f8fafc;
            --admin-border: #e2e8f0;
            --admin-border-hover: rgba(245,158,11,0.4);
            --admin-gold: #d97706;
            --admin-gold-light: #f59e0b;
            --admin-gold-dark: #b45309;
            --admin-text: #0f172a;
            --admin-muted: #64748b;
            --admin-sidebar-w: 260px;
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--admin-bg);
            color: var(--admin-text);
            margin: 0;
            min-height: 100vh;
            display: flex;
        }

        /* ── SIDEBAR ── */
        .admin-sidebar {
            width: var(--admin-sidebar-w);
            min-height: 100vh;
            background: #ffffff;
            border-right: 1px solid var(--admin-border);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0; left: 0; bottom: 0;
            z-index: 50;
            box-shadow: 2px 0 8px rgba(0,0,0,0.04);
        }

        .sidebar-logo {
            padding: 28px 24px 20px;
            border-bottom: 1px solid var(--admin-border);
        }

        .sidebar-logo .brand-name {
            font-family: 'Cinzel', serif;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.15em;
            color: var(--admin-gold-dark);
            text-transform: uppercase;
            display: block;
            margin-top: 10px;
        }

        .sidebar-logo .brand-sub {
            font-size: 10px;
            color: var(--admin-muted);
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .sidebar-logo-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: linear-gradient(135deg, rgba(217,119,6,0.12), rgba(180,83,9,0.07));
            border: 1px solid rgba(217,119,6,0.25);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sidebar-logo-icon svg {
            width: 22px;
            height: 22px;
            color: var(--admin-gold);
        }

        .sidebar-nav {
            padding: 16px 12px;
            flex: 1;
            overflow-y: auto;
        }

        .nav-section-label {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: #94a3b8;
            padding: 12px 12px 6px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 12px;
            border-radius: 8px;
            color: #64748b;
            font-size: 13.5px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.18s ease;
            margin-bottom: 2px;
            cursor: pointer;
            border: none;
            background: transparent;
            width: 100%;
            text-align: left;
        }

        .nav-item:hover {
            background: #fef3c7;
            color: var(--admin-gold-dark);
        }

        .nav-item.active {
            background: linear-gradient(135deg, #fef3c7, #fde68a);
            color: var(--admin-gold-dark);
            border: 1px solid #fcd34d;
            font-weight: 600;
        }

        .nav-item svg {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
            opacity: 0.8;
        }

        .nav-badge {
            margin-left: auto;
            background: linear-gradient(135deg, var(--admin-gold-light), var(--admin-gold-dark));
            color: #fff;
            font-size: 9px;
            font-weight: 700;
            padding: 2px 7px;
            border-radius: 20px;
        }

        .sidebar-footer {
            padding: 16px 12px;
            border-top: 1px solid var(--admin-border);
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 12px;
            border-radius: 8px;
            background: var(--admin-surface-2);
            border: 1px solid var(--admin-border);
        }

        .user-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--admin-gold-light), var(--admin-gold-dark));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
            color: #fff;
            flex-shrink: 0;
        }

        .user-name { font-size: 12px; font-weight: 600; color: var(--admin-text); }
        .user-role { font-size: 10px; color: var(--admin-muted); }

        /* ── MAIN CONTENT ── */
        .admin-main {
            margin-left: var(--admin-sidebar-w);
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .admin-topbar {
            height: 64px;
            background: #ffffff;
            border-bottom: 1px solid var(--admin-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
            position: sticky;
            top: 0;
            z-index: 40;
            box-shadow: 0 1px 4px rgba(0,0,0,0.05);
        }

        .topbar-title {
            font-size: 15px;
            font-weight: 700;
            color: var(--admin-text);
        }

        .topbar-subtitle {
            font-size: 11px;
            color: var(--admin-muted);
            margin-top: 1px;
        }

        .topbar-actions { display: flex; align-items: center; gap: 12px; }

        .btn-view-site {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 7px 14px;
            border-radius: 8px;
            border: 1px solid #fcd34d;
            background: #fef9ee;
            color: var(--admin-gold-dark);
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.18s;
        }

        .btn-view-site:hover {
            background: #fef3c7;
            border-color: var(--admin-gold);
        }

        .btn-view-site svg { width: 13px; height: 13px; }

        .admin-content {
            padding: 32px;
            flex: 1;
        }

        /* ── CARDS ── */
        .card {
            background: #ffffff;
            border: 1px solid var(--admin-border);
            border-radius: 14px;
            overflow: hidden;
            transition: border-color 0.2s, box-shadow 0.2s;
            box-shadow: 0 1px 3px rgba(0,0,0,0.04);
        }

        .card:hover {
            border-color: #fcd34d;
            box-shadow: 0 4px 16px rgba(217,119,6,0.08);
        }

        .card-header {
            padding: 20px 24px 16px;
            border-bottom: 1px solid var(--admin-border);
            display: flex;
            align-items: center;
            gap: 12px;
            background: #fafafa;
        }

        .card-icon {
            width: 36px;
            height: 36px;
            border-radius: 9px;
            background: linear-gradient(135deg, #fef3c7, #fde68a);
            border: 1px solid #fcd34d;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .card-icon svg { width: 17px; height: 17px; color: var(--admin-gold-dark); }

        .card-title { font-size: 14px; font-weight: 700; color: var(--admin-text); }
        .card-subtitle { font-size: 11px; color: var(--admin-muted); margin-top: 1px; }
        .card-body { padding: 24px; }

        /* ── FORM ELEMENTS ── */
        .form-group { margin-bottom: 20px; }

        .form-label {
            display: block;
            font-size: 11.5px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #475569;
            margin-bottom: 7px;
        }

        .form-input, .form-textarea {
            width: 100%;
            padding: 10px 14px;
            background: #ffffff;
            border: 1.5px solid #e2e8f0;
            border-radius: 8px;
            color: var(--admin-text);
            font-size: 13.5px;
            font-family: 'Inter', sans-serif;
            outline: none;
            transition: border-color 0.18s, box-shadow 0.18s;
            resize: vertical;
        }

        .form-input:focus, .form-textarea:focus {
            border-color: #fbbf24;
            box-shadow: 0 0 0 3px rgba(251,191,36,0.12);
        }

        .form-input::placeholder, .form-textarea::placeholder { color: #94a3b8; }

        .form-textarea { min-height: 90px; }

        .form-grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .form-grid-3 { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 16px; }

        /* ── IMAGE UPLOAD ── */
        .image-upload-zone {
            border: 2px dashed #fcd34d;
            border-radius: 12px;
            padding: 28px;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s;
            background: #fffbeb;
            position: relative;
        }

        .image-upload-zone:hover, .image-upload-zone.dragover {
            border-color: var(--admin-gold-dark);
            background: #fef3c7;
        }

        .image-upload-zone input[type="file"] {
            position: absolute;
            inset: 0;
            opacity: 0;
            cursor: pointer;
            width: 100%;
            height: 100%;
        }

        .upload-icon { color: var(--admin-gold); margin-bottom: 10px; }
        .upload-text { font-size: 13px; color: #64748b; font-weight: 500; }
        .upload-hint { font-size: 11px; color: #94a3b8; margin-top: 4px; }

        .img-preview {
            width: 100%;
            max-height: 220px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid var(--admin-border);
            margin-top: 12px;
            display: none;
        }

        /* ── BUTTONS ── */
        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 22px;
            border-radius: 10px;
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: #ffffff;
            font-size: 13px;
            font-weight: 700;
            border: none;
            cursor: pointer;
            transition: all 0.18s;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            box-shadow: 0 2px 8px rgba(217,119,6,0.25);
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(217,119,6,0.35);
        }

        .btn-primary:active { transform: translateY(0); }
        .btn-primary svg { width: 15px; height: 15px; }

        /* ── TOAST NOTIFICATION ── */
        .toast {
            position: fixed;
            bottom: 28px;
            right: 28px;
            z-index: 9999;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 20px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 500;
            animation: slideUp 0.35s cubic-bezier(0.16,1,0.3,1);
            max-width: 360px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.12);
        }

        .toast.success {
            background: #f0fdf4;
            border: 1px solid #86efac;
            color: #166534;
        }

        .toast.error {
            background: #fef2f2;
            border: 1px solid #fca5a5;
            color: #991b1b;
        }

        .toast svg { width: 18px; height: 18px; flex-shrink: 0; }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(16px) scale(0.95); }
            to   { opacity: 1; transform: translateY(0) scale(1); }
        }

        /* ── STAT MINI CARDS ── */
        .stat-mini-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }

        .stat-mini-card {
            background: var(--admin-surface-2);
            border: 1px solid var(--admin-border);
            border-radius: 10px;
            padding: 12px 14px;
        }

        .stat-mini-label {
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--admin-muted);
            margin-bottom: 6px;
        }

        /* ── LIVE PREVIEW ── */
        .preview-panel {
            background: #f8fafc;
            border-radius: 12px;
            padding: 28px 24px;
            border: 1px solid #e2e8f0;
            position: sticky;
            top: 96px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.04);
        }

        .preview-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #059669;
            background: rgba(5,150,105,0.08);
            border: 1px solid rgba(5,150,105,0.2);
            padding: 3px 10px;
            border-radius: 20px;
            margin-bottom: 16px;
        }

        .preview-badge::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #059669;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }

        .preview-h1 {
            font-family: 'Cinzel', serif;
            font-size: 22px;
            font-weight: 700;
            color: #0f172a;
            line-height: 1.3;
            margin-bottom: 10px;
        }

        .preview-h1 .gradient-text {
            background: linear-gradient(to right, #b45309, #f59e0b, #92400e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .preview-p {
            font-size: 12px;
            color: #64748b;
            line-height: 1.7;
            margin-bottom: 14px;
        }

        .preview-cta {
            display: inline-flex;
            align-items: center;
            padding: 8px 16px;
            background: linear-gradient(135deg, #d97706, #b45309);
            color: #fff;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            text-decoration: none;
            margin-bottom: 16px;
        }

        .preview-stats {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 8px;
            border-top: 1px solid #e2e8f0;
            padding-top: 14px;
        }

        .preview-stat-val {
            font-family: 'Cinzel', serif;
            font-size: 16px;
            font-weight: 700;
            color: #d97706;
        }

        .preview-stat-lbl {
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #94a3b8;
            margin-top: 2px;
            font-weight: 600;
        }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 5px; height: 5px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #fbbf24; }

        /* Error messages */
        .field-error {
            font-size: 11px;
            color: #dc2626;
            margin-top: 4px;
        }

        .section-divider {
            border: none;
            border-top: 1px solid var(--admin-border);
            margin: 24px 0;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="admin-sidebar">
        <div class="sidebar-logo">
            <div class="sidebar-logo-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
            </div>
            <span class="brand-name">Noor Al Khatam</span>
            <span class="brand-sub">Admin Dashboard</span>
        </div>

        <nav class="sidebar-nav">
            <div class="nav-section-label">Content</div>

            <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard', 'admin.hero.*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                </svg>
                Hero Section
                <span class="nav-badge">Live</span>
            </a>

            <a href="{{ route('admin.gallery.index') }}" class="nav-item {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                Gallery
            </a>

            <a href="{{ route('admin.benefits.index') }}" class="nav-item {{ request()->routeIs('admin.benefits.*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Benefits
            </a>

            <a href="{{ route('admin.orders.index') }}" class="nav-item {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 3h14m-10 4a1 1 0 11-2 0 1 1 0 012 0zm10 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                </svg>
                Orders
            </a>

            <div class="nav-section-label" style="margin-top:8px;">System</div>

            <a href="{{ route('landing') }}" target="_blank" class="nav-item">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
                View Live Site
            </a>

            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="nav-item" style="color:#ef4444;">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Logout
                </button>
            </form>
        </nav>

        <div class="sidebar-footer">
            <div class="user-info">
                <div class="user-avatar">{{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}</div>
                <div>
                    <div class="user-name">{{ auth()->user()->name ?? 'Admin' }}</div>
                    <div class="user-role">Administrator</div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main -->
    <div class="admin-main">
        <!-- Topbar -->
        <div class="admin-topbar">
            <div>
                <div class="topbar-title">@yield('page-title', 'Dashboard')</div>
                <div class="topbar-subtitle">@yield('page-subtitle', 'Manage your landing page content')</div>
            </div>
            <div class="topbar-actions">
                <a href="{{ route('landing') }}" target="_blank" class="btn-view-site">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                    View Site
                </a>
            </div>
        </div>

        <!-- Content -->
        <main class="admin-content">
            @yield('content')
        </main>
    </div>

    <!-- Toast Notification -->
    @if(session('success'))
    <div class="toast success" id="admin-toast">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        {{ session('success') }}
    </div>
    <script>
        setTimeout(() => {
            const toast = document.getElementById('admin-toast');
            if (toast) {
                toast.style.transition = 'opacity 0.4s, transform 0.4s';
                toast.style.opacity = '0';
                toast.style.transform = 'translateY(10px)';
                setTimeout(() => toast.remove(), 400);
            }
        }, 4000);
    </script>
    @endif

    @if(session('error') || $errors->any())
    <div class="toast error" id="admin-toast-err">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        {{ session('error') ?? 'কিছু তথ্য সঠিক নয়। অনুগ্রহ করে ফর্মটি পর্যালোচনা করুন।' }}
    </div>
    <script>
        setTimeout(() => {
            const t = document.getElementById('admin-toast-err');
            if (t) { t.style.opacity='0'; setTimeout(()=>t.remove(),400); }
        }, 5000);
    </script>
    @endif

    @stack('scripts')
</body>
</html>
