<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name','laravel')}}</title>
    <link rel="stylesheet" href="{{ asset ('asset/css/nav.css')}}">
    <link rel="stylesheet" href="{{ asset ('asset/css/Footer.css')}}">


    <!-- Unicon Section Start -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- Unicon Section End -->
</head>

<body>
    {{-- Navbar start  --}}
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
                <div class="icon-wrapper">
                    <i class="uil uil-search"></i>
                    <input type="text" placeholder="Search..." class="search-box">
                </div>
                <button class="search-button">Search</button>
            </form>
        </div>

        {{-- toogle untuk search ketika hilang --}}
        <div class="search-icon">
            
        </div>

        {{-- menu dalam icon --}}
        <ul class="icon-menu">
            {{-- Search ketika hilang --}}
            <li><a href="#"><i class="uil uil-search"></i></a></li>
            <li><a href="#"><i class="uil uil-users-alt"></i></a></li>
            <li><a href="#"><i class="uil uil-shopping-bag"></i></a></li>

            
        </ul>

        {{-- toogle untuk menu icon --}}
        <div class="hamburger-menu">
            <i class="uil uil-bars"></i>
        </div>

        
       
        
    </nav>
    {{-- Navbar end --}}

    @yield("content")


    <hr class="mt-5 " />
    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h1 style="display: flex; align-items: center; gap: 10px;"> <img src="asset/img/icon_Apps_Mu.svg" alt="Logo" style="width: 40px; height: 40px;"> AppsMu</h1>
                    <p style="color: #808080;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, beatae nesciunt consectetur laudantium dolores incidunt architecto!</p>
                    <p><strong>(+62) 877-327-748-99</strong></p>
                    <p>or</p>
                    <p><strong>ajhiezudesign@gmail.com</strong></p>
                </div>
                <div class="footer-section">
                    <h4>My Account</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Helps</h4>
                    <ul>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Proxy</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Track Order</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">Fruit & Vegetables</a></li>
                        <li><a href="#">Meat & Fish</a></li>
                        <li><a href="#">Bread & Bakery</a></li>
                        <li><a href="#">Beauty & Health</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>AppsMu eCommerce © 2025. All Rights Reserved.</p>
                <div class="footer-social-icon">
                    <div class="icon"><i class="uil uil-instagram"></i></div>
                    <div class="icon"><i class="uil uil-youtube"></i></div>
                    <div class="icon"><i class="uil uil-linkedin"></i></div>
                    <div class="icon"><i class="uil uil-whatsapp"></i></div>
                    <div class="icon"><i class="uil uil-github"></i></div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer End -->

</body>

</html>