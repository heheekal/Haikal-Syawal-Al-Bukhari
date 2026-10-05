<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'LaporBanjir') | BPBD Kabupaten Bandung</title>
    <style>
        :root { color-scheme: light; font-family: Arial, sans-serif; color: #24332d; background: #f3f7f4; }
        * { box-sizing: border-box; }
        body { margin: 0; min-height: 100vh; display: flex; flex-direction: column; }
        header { background: #176b4d; color: #fff; padding: 18px 24px; }
        .header-inner, main, footer { width: min(900px, 100%); margin: 0 auto; }
        .brand { margin: 0; font-size: 24px; }
        .subtitle { margin: 4px 0 14px; color: #d7eee3; font-size: 14px; }
        nav { display: flex; gap: 18px; flex-wrap: wrap; }
        nav a { color: #fff; text-decoration: none; font-weight: 600; }
        nav a:hover { text-decoration: underline; }
        main { flex: 1; padding: 32px 24px; }
        h2 { margin-top: 0; }
        .panel, .report-card { background: #fff; border: 1px solid #d9e4dd; border-radius: 6px; padding: 20px; }
        .panel { max-width: 620px; }
        .field { margin-bottom: 16px; }
        label { display: block; margin-bottom: 6px; font-weight: 600; }
        input { width: 100%; padding: 10px; border: 1px solid #aebdb4; border-radius: 4px; font: inherit; }
        input:focus { outline: 2px solid #87c6a5; border-color: #176b4d; }
        button, .button { display: inline-block; background: #176b4d; color: #fff; border: 0; border-radius: 4px; padding: 10px 16px; font: inherit; text-decoration: none; cursor: pointer; }
        button:hover, .button:hover { background: #10543b; }
        .error { color: #a32929; font-size: 14px; margin: 5px 0 0; }
        .report-list { display: grid; gap: 12px; }
        .report-card h3 { margin: 0 0 10px; font-size: 18px; }
        .report-card p { margin: 6px 0; }
        .status { display: inline-block; margin-top: 8px; padding: 4px 9px; border-radius: 12px; font-size: 13px; font-weight: 700; }
        .waspada { color: #765200; background: #fff0bd; }
        .siaga { color: #8a4600; background: #ffe0bf; }
        .awas { color: #922727; background: #f9d2d2; }
        .alert { padding: 12px 14px; margin-bottom: 18px; border: 1px solid #9ac9a6; border-radius: 4px; background: #e8f5eb; color: #205b31; }
        .details { margin: 0 0 20px; }
        .details div { padding: 9px 0; border-bottom: 1px solid #e5ebe7; }
        .details dt { font-weight: 700; }
        .details dd { margin: 3px 0 0; }
        footer { padding: 16px 24px; color: #52645a; font-size: 13px; border-top: 1px solid #d9e4dd; }
        @media (max-width: 560px) { header { padding: 16px; } main { padding: 24px 16px; } footer { padding: 14px 16px; } }
    </style>
</head>
<body>
    <header>
        <div class="header-inner">
            <h1 class="brand">LaporBanjir</h1>
            <p class="subtitle">Badan Penanggulangan Bencana Daerah Kabupaten Bandung</p>
            <nav aria-label="Navigasi utama">
                <a href="{{ route('laporan.form') }}">Form Pelaporan</a>
                <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>Haikal Syawal Al Bukhari - TA pekan 3</footer>
</body>
</html>