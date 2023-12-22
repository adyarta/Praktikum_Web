<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Dewa Otomotif</h1>
    </header>
    <nav>
        <!-- Navigation links here -->
        <ul>
            <li><a href="#berita">Berita</a></li>
            <li><a href="#ulasan">Ulasan</a></li>
            <li><a href="#galeri">Galeri</a></li>
            <li><a href="#kontak">Kontak</a></li>
            <li><a href="login.html">Join Member</a></li>
        </ul>
    </nav>

    <div id="content">
        @yield('content')
    </div>

    <footer>
        &copy; 2023 Dewa Otomotif
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
