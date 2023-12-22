<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <!-- Your HTML content here -->
    <section id="welcome">
        <h1>Hallo Selamat datang di Dewa Otomotif!</h1>
        <label for="nama" id="labelNama">Masukkan Nama:</label>
        <input type="text" id="nama" placeholder="Ketik nama Anda di sini">
        <button onclick="tampilkanNama()" id="submitBtn">Submit</button>
    </section>
    <section id="berita">
        <h2>Berita Otomotif Terbaru</h2>
        <p>Selamat datang di Dewa Otomotif. Berikut adalah beberapa berita terbaru dari dunia otomotif:</p>
        <ul>
            <li>Perkenalan Mobil Listrik Terbaru</li>
            <li>Review SUV Terbaru</li>
            <li>Hasil Uji Tabrakan Mobil Sedan</li>
        </ul>
    </section>
    <section id="ulasan">
        <h2>Ulasan Mobil</h2>
        <p>Baca ulasan terbaru tentang berbagai mobil dan model terkini:</p>
        <ul>
            <li>Ulasan Mobil Listrik</li>
            <li>Ulasan SUV Terpopuler</li>
            <li>Perbandingan Mobil Sedan</li>
        </ul>
    </section>
    <section id="galeri">
        <h2>Galeri Mobil</h2>
        <p>Lihat gambar-gambar menarik dari mobil-mobil terbaru:</p>
        
        @foreach($galleryImages as $image)
            <img src="{{ asset($image) }}" alt="{{ $image }}" height="200px">
        @endforeach
    </section>
    <section id="kontak">
        <h2>Hubungi Kami</h2>
        <p>Jika Anda memiliki pertanyaan atau ingin berbagi informasi, silakan hubungi kami di:</p>
        <p>Email: info@dewaotomotif.com</p>
        <p>Telepon: (123) 456-7890</p>
    </section>
@endsection
