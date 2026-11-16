@extends('layout.app')
@section('title', 'Beranda')
@section('content')
<section class="hero" id="beranda">
    <div class="container hero-layout">
        <div class="hero-content">
            <span class="eyebrow">INTERNET &amp; JARINGAN TERPERCAYA</span>
            <h1>Koneksi andal untuk setiap kebutuhan Anda</h1>
            <p>Internet stabil, instalasi jaringan profesional, dan dukungan teknis untuk rumah, bisnis, serta instansi di Kota Bogor dan sekitarnya.</p>
            <div class="hero-actions">
                <a href="#layanan" class="btn btn-primary">Lihat pilihan layanan</a>
                <a href="#kontak" class="btn btn-outline">Konsultasi dengan kami</a>
            </div>
        </div>
    </div>
</section>

<section class="section about-section" id="tentang">
    <div class="container about">
        <div class="about-image-wrap">
            <img src="{{ asset('assets/tentang_kami.webp') }}" alt="Infrastruktur jaringan PT Nusantara Net">
        </div>
        <div class="about-copy">
            <span class="section-kicker">TENTANG KAMI</span>
            <h2>Membangun koneksi yang bisa diandalkan</h2>
            <p>PT Nusantara Net adalah penyedia jasa internet dan jaringan yang berbasis di Kota Bogor. Kami membantu rumah tangga, pelaku usaha, dan instansi mendapatkan koneksi serta infrastruktur jaringan yang sesuai kebutuhan.</p>
            <p>Mulai dari pemilihan paket, instalasi, hingga dukungan teknis, tim kami siap mendampingi agar jaringan Anda bekerja dengan baik.</p>
        </div>
    </div>
</section>

<section class="section services-section" id="layanan">
    <div class="container">
        <div class="section-heading">
            <div><span class="section-kicker">PILIHAN LAYANAN</span><h2>Paket internet untuk kebutuhan Anda</h2></div>
        </div>
        <div class="grid cards-3">
        <?php if ($pakets->isNotEmpty()): ?>
        <?php foreach ($pakets as $p): ?>
            <article class="card paket" data-order data-id="{{ $p->id }}" data-nama="{{ $p->nama_paket }}" role="button" tabindex="0">
                <div class="card-body">
                    <span class="package-label">PAKET INTERNET</span>
                    <h3>{{ $p->nama_paket }}</h3>
                    <p class="package-speed"><strong>Kecepatan</strong><span>{{ $p->kecepatan }}</span></p>
                    <p class="price">Rp {{ number_format($p->harga, 0, ',', '.') }}<small> / bulan</small></p>
                    <div class="package-description">
                        <strong>Detail paket</strong>
                        <div>{{ strip_tags($p->deskripsi) }}</div>
                    </div>
                    <button class="btn btn-primary btn-block" type="button">Pilih paket ini</button>
                </div>
            </article>
        <?php endforeach; ?>
        <?php else: ?>
            <p class="empty">Belum ada paket tersedia. Silakan kembali lagi nanti.</p>
        <?php endif; ?>
        </div>
        <p class="section-footnote">Informasi paket dan biaya bulanan ditampilkan sesuai ketersediaan.</p>
    </div>
</section>

<section class="section gallery-section" id="galeri">
    <div class="container">
        <div class="section-heading">
            <div><span class="section-kicker">GALERI KEGIATAN</span><h2>Melihat lebih dekat pekerjaan kami</h2></div>
        </div>
        <div class="grid gallery">
        <?php if ($galeris->isNotEmpty()): ?>
        <?php foreach ($galeris as $g): ?>
            <figure class="gallery-item">
                <img src="{{ asset('storage/'.$g->gambar) }}" alt="{{ $g->judul }}" data-lightbox>
                <figcaption class="gallery-description">
                    <strong>{{ $g->judul }}</strong>
                    <div class="prose">{!! preg_replace('/<([a-z][a-z0-9]*)\b[^>]*>/i', '<$1>', strip_tags($g->keterangan, '<p><br><strong><b><em><i><u><s><ul><ol><li><h1><h2><h3><blockquote>')) !!}</div>
                </figcaption>
            </figure>
        <?php endforeach; ?>
        <?php else: ?>
            <p class="empty">Galeri masih kosong.</p>
        <?php endif; ?>
        </div>
    </div>
</section>

<section class="section articles-section" id="artikel">
    <div class="container">
        <div class="section-heading">
            <div><span class="section-kicker">WAWASAN &amp; INFORMASI</span><h2>Artikel seputar internet dan jaringan</h2></div>
        </div>
        <div class="grid cards-3">
        <?php if ($artikels->isNotEmpty()): ?>
        <?php foreach ($artikels as $a): ?>
            <article class="card article-card">
                <?php if ($a->gambar): ?><img src="{{ asset('storage/'.$a->gambar) }}" alt="{{ $a->judul ?>"><?php endif; ?>
                <div class="card-body">
                    <time class="muted">{{ $a->created_at->translatedFormat('d F Y') }}</time>
                    <h3>{{ $a->judul }}</h3>
                    <p class="muted">{{ \Illuminate\Support\Str::limit(strip_tags($a->artikel), 110) }}</p>
                    <details><summary>Baca selengkapnya</summary><div class="prose">{!! nl2br(e(strip_tags($a->artikel))) !!}</div></details>
                </div>
            </article>
        <?php endforeach; ?>
        <?php else: ?>
            <p class="empty">Belum ada artikel.</p>
        <?php endif; ?>
        </div>
    </div>
</section>

<section class="section contact-section" id="kontak">
    <div class="container">
        <div class="section-heading">
            <div><span class="section-kicker">HUBUNGI KAMI</span><h2>Mari bicarakan kebutuhan jaringan Anda</h2></div>
        </div>
        <div class="contact">
            <div class="contact-list">
                <a class="contact-item" href="mailto:raihan.alkhalifipk@gmail.com">
                    <span class="ci-icon">✉</span><div><strong>Email</strong><span>raihan.alkhalifipk@gmail.com</span></div></a>
                <a class="contact-item" href="https://www.instagram.com/rhn_alk/" target="_blank" rel="noopener">
                    <span class="ci-icon">◎</span><div><strong>Instagram</strong><span>@rhn_alk</span></div></a>
                <a class="contact-item" href="https://maps.google.com/?q={{ urlencode('Jl. KH. Sholeh Iskandar Km. 4, Cibadak, Tanah Sareal, Kota Bogor, Jawa Barat 16161') }}" target="_blank" rel="noopener">
                    <span class="ci-icon">⌖</span><div><strong>Alamat kantor</strong><span>Jl. KH. Sholeh Iskandar Km. 4, Cibadak, Tanah Sareal, Kota Bogor, Jawa Barat 16161</span></div></a>
                <div class="contact-item">
                    <span class="ci-icon">◷</span><div><strong>Jam layanan</strong><span>Senin–Sabtu, 08.00–17.00 WIB</span></div></div>
            </div>
            <iframe class="map map-lg" loading="lazy" title="map"
                src="https://maps.google.com/maps?q={{ urlencode('Jl. KH. Sholeh Iskandar Km. 4, Cibadak, Tanah Sareal, Kota Bogor, Jawa Barat 16161') }}&output=embed"></iframe>
        </div>
    </div>
</section>

<div class="modal" id="orderModal" aria-hidden="true">
    <div class="modal-box" role="dialog" aria-modal="true" aria-labelledby="orderTitle">
        <button class="modal-close" data-close aria-label="Tutup">×</button>
        <h2 id="orderTitle">formulir pemasangan <span id="paketNama"></span></h2>
        <p class="muted">Lengkapi data berikut agar tim kami dapat menindaklanjuti permintaan Anda.</p>
        <form method="POST" action="{{ route('order') }}" class="form">
            @csrf
            <input type="hidden" name="paket_internet_id" id="paketId" value="{{ old('paket_internet_id') }}">
            <?php foreach ([['nama_pelanggan','Nama lengkap','text'],['no_telp','No. telepon','tel'],['alamat','Alamat pemasangan','text']] as [$n,$l,$t]): ?>
            <label>{{ $l }}
                <input type="{{ $t }}" name="{{ $n }}" value="{{ old($n) }}" required>
                <?php if ($errors->has($n)): ?><span class="error">{{ $errors->first($n) }}</span><?php endif; ?>
            </label>
            <?php endforeach; ?>
            <button class="btn btn-primary btn-block" type="submit">Kirim pesanan</button>
        </form>
    </div>
</div>
<div class="lightbox" id="lightbox"><img alt=""></div>
<?php if ($errors->any()): ?>
@push('scripts')<script>window.reopenOrder = true;</script>@endpush
<?php endif; ?>
@endsection
