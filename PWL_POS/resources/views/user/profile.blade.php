<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
</head>

<body>
    <header>
        <h1>POS System - User Profile</h1>
        <nav>
            <a href="{{ url('/') }}">Home</a> |
            <a href="{{ url('/category/food-beverage') }}">Food & Beverage</a> |
            <a href="{{ url('/category/beauty-health') }}">Beauty & Health</a> |
            <a href="{{ url('/category/home-care') }}">Home Care</a> |
            <a href="{{ url('/category/baby-kid') }}">Baby & Kid</a> |
            <a href="{{ url('/sales') }}">Sales</a> |
            <a href="{{ url('/user/profile') }}">Profile</a>
        </nav>
    </header>

    <h2>Profil Pengguna</h2>
    <p>ID: {{ $id }}</p>
    <p>Nama: {{ $name }}</p>

</body>

</html>