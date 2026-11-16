<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT Nusantara Net</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/filament/filament/style.css') }}">
</head>
<body class="auth-body">
    <div class="auth-card">
        <div class="auth-card-header">
            <div class="auth-logo">@include('layout.logo')</div>
            <div class="auth-intro">
                @yield('intro')
            </div>
        </div>
        <div class="auth-content">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/filament/app.js') }}"></script>
</body>
</html>
