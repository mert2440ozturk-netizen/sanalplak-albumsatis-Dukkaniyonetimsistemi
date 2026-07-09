<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Admin Paneli</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">
</head>
<body>

<div class="admin-wrapper">

    <aside>
        <h2>Admin Panel</h2>
        <nav>
            <a href="/admin">Dashboard</a>
            <a href="/admin/artists">Sanatçılar</a>
            <a href="/admin/albums">Albümler</a>
            <a href="/admin/songs">Şarkılar</a>
            <a href="/admin/genres">Türler</a>
            <a href="/admin/users">Kullanıcılar</a>
            <a href="/admin/orders">Siparişler</a>
        </nav>
    </aside>

    <main class="admin-main">
        @yield('content')
    </main>

</div>

</body>
</html>
