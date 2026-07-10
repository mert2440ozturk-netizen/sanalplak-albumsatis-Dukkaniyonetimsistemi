<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Sanal Plak Dükkanı</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <div class="header-inner">
            <a href="/" class="logo">Sanal Plak Dükkanı</a>
            <nav>
                <a href="/">Ana Sayfa</a>
                <a href="/albums">Albümler</a>
                <a href="/artists">Sanatçılar</a>
                <a href="/genres">Türler</a>
                <a href="/songs">Şarkılar</a>
                <a href="/profile/orders">Siparişlerim</a>
            </nav>
        </div>
    </header>

        <main>
            @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Sanal Plak Dükkanı</p>
    </footer>

</body>
</html>
