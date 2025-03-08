<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <header>
        <h1>POS System</h1>
        <nav>
            <a href="{{ url('/') }}">Home</a> |
            <a href="{{ url('/category/food-beverage') }}">Food & Beverage</a> |
            <a href="{{ url('/category/beauty-health') }}">Beauty & Health</a> |
            <a href="{{ url('/category/home-care') }}">Home Care</a> |
            <a href="{{ url('/category/baby-kid') }}">Baby & Kid</a> |
            <a href="{{ url('/sales') }}">Sales</a>
        </nav>
    </header>

    <h2>Selamat Datang di Aplikasi POS</h2>
    <p>Aplikasi ini akan membantu anda dalam manajemen penjualan.</p>


</body>

</html>