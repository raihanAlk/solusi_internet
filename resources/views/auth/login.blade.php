@extends('layout.auth')

@section('title', 'Login')

@section('intro')
<h1>Login</h1>
<p>Masuk untuk melanjutkan ke layanan PT Nusantara Net.</p>
@endsection

@section('content')
@if (session('success'))
    <div class="toast" role="status">{{ session('success') }}</div>
@endif

<form method="POST" action="{{ route('login.submit') }}" class="form">
    @csrf
    <label>Email
        <input type="email" name="email" value="{{ old('email') }}" autocomplete="email" required autofocus>
        @error('email')<span class="error">{{ $message }}</span>@enderror
    </label>
    <label>Password
        <input type="password" name="password" autocomplete="current-password" required>
        @error('password')<span class="error">{{ $message }}</span>@enderror
    </label>
    <button class="btn btn-primary btn-block" type="submit">Login</button>
</form>

<p>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
@endsection