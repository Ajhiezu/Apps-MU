<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name','laravel')}}</title>
    <link rel="stylesheet" href="{{ asset ('asset/css/nav.css')}}">
</head>
<body>
    <nav>
        <div class="logo">
            <img src="asset\img\logo-appMu.svg" alt="logo" >
            <h4 style="display: flex";>AppsMU</h4>
        </div>
        <ul class="text-menu">
            <li><a href="home">Home</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="shop">Shop</a></li>
            <li><a href="about">About</a></li>
        </ul>
        <ul class="icon-menu">
            <li><a href="home">Home</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="shop">Shop</a></li>
        </ul>
    </nav>
</body>
</html>