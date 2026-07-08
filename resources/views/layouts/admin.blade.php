<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Admin Paneli</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div style="display: flex;">

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

    <main style="flex: 1;">
        @yield('content')
    </main>

</div>

</body>

</html>
