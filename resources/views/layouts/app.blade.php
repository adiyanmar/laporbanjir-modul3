<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | LaporBanjir</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f7fb; color: #222; }
        header { background: #0b5ed7; color: #fff; padding: 14px 20px; text-align: center; }
        header h1 { margin: 0 0 8px; font-size: 24px; }
        nav a { color: #fff; text-decoration: none; margin: 0 12px; padding: 4px 8px; border-radius: 4px; }
        nav a:hover, nav a.active { background: rgba(255,255,255,.25); }
        main { max-width: 760px; margin: 20px auto; padding: 0 16px; min-height: 60vh; }
        footer { background: #e9eef5; padding: 12px; text-align: center; font-size: 14px; }
        .card { background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 15px; margin: 10px 0; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-top: 4px; box-sizing: border-box; border: 1px solid #bbb; border-radius: 4px; }
        button { margin-top: 16px; padding: 9px 18px; background: #0b5ed7; color: #fff; border: 0; border-radius: 4px; cursor: pointer; }
        .error { color: #c00; font-size: 13px; }
        .badge { padding: 2px 10px; border-radius: 10px; color: #fff; font-size: 13px; }
    </style>
</head>
<body>
    <header>
        <h1>LaporBanjir — BPBD Kabupaten Bandung</h1>
        <nav>
            <a href="{{ route('laporan.form') }}" class="{{ request()->routeIs('laporan.form') ? 'active' : '' }}">Form Lapor</a>
            <a href="{{ route('laporan.index') }}" class="{{ request()->routeIs('laporan.index') ? 'active' : '' }}">Daftar Laporan</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} LaporBanjir - BPBD Kabupaten Bandung (Prototipe)</p>
    </footer>
</body>
</html>