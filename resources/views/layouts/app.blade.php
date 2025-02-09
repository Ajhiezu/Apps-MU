<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name','laravel')}}</title>
    <link rel="stylesheet" href="{{ asset ('asset/css/nav.css')}}">
    <!-- Unicon Section Start -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- Unicon Section End -->
</head>
<body>
    <nav>
        <div class="logo">
            <img src="asset\img\logo-appMu.svg" alt="logo" >
            <p style="display: flex";>AppsMU </p> 
        </div>
        {{-- menu dalam teks --}}
        <ul class="text-menu">
            <li><a href="home">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="shop">Shop</a></li>
            <li><a href="contact">Contact</a></li>
        </ul>
        {{-- search box --}}
        <div class="container-search">
            
            <form>
                <a href=""><i class="uil uil-search"></i></a>
                <input type="text" placeholder="Search..." class="search-box">
                <button class="search-button">Search</button>
            </form>
        </div>
        {{-- menu dalam icon --}}
        <ul class="icon-menu">
            <li><a href="#"><i class="uil uil-users-alt"></i></a></li>
            <li><a href="#"><i class="uil uil-shopping-bag"></i></a></li>
        </ul>

        
    </nav>
</body>
</html>