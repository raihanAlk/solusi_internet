<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PT Nusantara Net</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/filament/filament/style.css') }}">
</head>
<body>
<header class="navbar">
    <div class="container nav-inner">
        <a href="{{ route('home') }}#beranda" aria-label="PT Nusantara Net - Beranda">@include('layout.logo')</a>
        <button class="nav-toggle" id="navToggle" aria-label="Menu" aria-controls="navMenu" aria-expanded="false">☰</button>
        <nav class="nav-menu" id="navMenu">
            @foreach (['beranda' => 'Beranda', 'tentang' => 'Tentang', 'layanan' => 'Layanan', 'galeri' => 'Galeri', 'artikel' => 'Artikel', 'kontak' => 'Kontak'] as $section => $label)
                <a href="{{ route('home') }}#{{ $section }}">{{ $label }}</a>
            @endforeach
            <form method="POST" action="{{ route('logout') }}" class="nav-logout">@csrf
                <button type="submit" class="btn btn-sm btn-light">Logout</button>
            </form>
        </nav>
    </div>
</header>

@if (session('success'))
    <div class="toast" id="toast" role="status">{{ session('success') }}</div>
@endif

<main>@yield('content')</main>

<footer class="footer">
    <div class="container footer-grid">
        <div>
            <div class="footer-logo">@include('layout.logo')</div>
            <p>Penyedia jasa internet dan jaringan untuk rumah, usaha, dan instansi di seluruh Nusantara.</p>
        </div>
        <div>
            <h4>Hubungi Kami</h4>
            <ul>
                <li>Jl. KH. Sholeh Iskandar Km. 4, Cibadak, Tanah Sareal, Kota Bogor, Jawa Barat 16161</li>
                <li><a href="mailto:raihan.alkhalifipk@gmail.com">raihan.alkhalifipk@gmail.com</a></li>
                <li><a href="https://www.instagram.com/rhn_alk/" target="_blank" rel="noopener">Instagram @rhn_alk</a></li>
                <li>Senin–Sabtu, 08.00–17.00 WIB</li>
            </ul>
        </div>
        <div>
            <h4>Lokasi</h4>
            <iframe class="map" loading="lazy" title="map"
                src="https://maps.google.com/maps?q={{ urlencode('Jl. KH. Sholeh Iskandar Km. 4, Cibadak, Tanah Sareal, Kota Bogor, Jawa Barat 16161') }}&output=embed"></iframe>
        </div>
    </div>
    <div class="footer-bottom">© {{ date('Y') }} PT Nusantara Net. Hak cipta dilindungi.</div>
</footer>
<script src="{{ asset('js/filament/app.js') }}"></script>
@stack('scripts')
</body>
</html>
