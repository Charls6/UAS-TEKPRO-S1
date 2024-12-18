@extends('layoutes.main')
@section('content')
<div class="container mt-4">
    <h2>Struk Pesanan</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Clean & Cozy's Laundry</h5>
            <p class="card-text"><strong>Nama:</strong> {{ $produk->nama }}</p>
            <p class="card-text"><strong>Jenis Paket:</strong> {{ $produk->jenis }}</p>
            <p class="card-text"><strong>Berat:</strong> {{ $produk->berat }} kg</p>
            <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
            <p class="card-text"><strong>Deskripsi:</strong> {{ $produk->deskripsi }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $produk->status }}</p>
            <hr>
            <p class="text-center">Terima kasih telah menggunakan layanan kami!</p>
        </div>
    </div>
</div>
@endsection