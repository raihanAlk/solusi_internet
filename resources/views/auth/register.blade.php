@extends('layout.auth')

@section('title', 'Register')

@section('intro')
<h1>Daftar Akun</h1>
<p>Buat akun untuk memesan layanan PT Nusantara Net.</p>
@endsection

@section('content')
<form method="POST" action="{{ route('register.submit') }}" class="form">
    @csrf
    <label>Nama lengkap
        <input type="text" name="name" value="{{ old('name') }}" autocomplete="name" required autofocus>
        @error('name')<span class="error">{{ $message }}</span>@enderror
    </label>
    <label>Email
        <input type="email" name="email" value="{{ old('email') }}" autocomplete="email" required>
        @error('email')<span class="error">{{ $message }}</span>@enderror
    </label>
    <label>Password
        <input type="password" name="password" autocomplete="new-password" required>
        @error('password')<span class="error">{{ $message }}</span>@enderror
    </label>
    <label>Konfirmasi password
        <input type="password" name="password_confirmation" autocomplete="new-password" required>
    </label>
    <button class="btn btn-primary btn-block" type="submit">Daftar</button>
</form>

<p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
@endsection