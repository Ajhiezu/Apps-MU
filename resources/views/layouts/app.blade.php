<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name','laravel')}}</title>
    <link rel="stylesheet" href="{{ asset ('asset/css/nav.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('asset/Footer/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/Footer/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('asset/Footer/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('asset/Footer/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/Footer/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Style Footer Start -->
     <link href="{{asset('asset/Footer/css/main.css')}}" rel="stylesheet">
    <!-- Style Footer End -->

    <!-- Unicon Section Start -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- Unicon Section End -->
</head>

<body>
    {{-- Navbar start  --}}
    <nav>
        <div class="nav-bar">
            <div class="logo">
                <img src="asset\img\logo-appMu.svg" alt="logo" >
                <p style="display: flex";>AppsMU </p> 
            </div>
            {{-- menu dalam teks --}}
            <ul id="menu-list" class="text-menu">
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
    
            
            {{-- menu ketika break point --}}
            <div class="container-kecil">
                {{-- Search ketika hilang --}}
                <div class="search-dropDown">
                    <div class="search-icon">
                        <i class="uil uil-search"></i>
                    </div>    
                    <div class="cancel-icon">
                        <i class="uil uil-times"></i>
                    </div>
                </div>

                 {{-- menu dalam icon --}}
                <ul class="icon-menu">    
                    <li><a href="#"><i class="uil uil-users-alt"></i></a></li>
                    <li><a href="#"><i class="uil uil-shopping-bag"></i></a></li>
                </ul>

                <div class="hamburger-menu">
                    <a href="#" id="hamburger"><i class="uil uil-bars"></i></a>
                </div>
            </div>
           
           
            {{-- toogle untuk menu icon --}}
           
        </div>


        {{-- toogle untuk search ketika hilang --}}
        <div class="search-icon">
            
        </div>

        {{-- menu dalam icon --}}
        <ul class="icon-menu">
            {{-- Search ketika hilang --}}
            <li><a href="#"><i class="uil uil-search"></i></a></li>
            <li><a href="{{route('admin.homepage')}}"><i class="uil uil-users-alt"></i></a></li>
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
    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">AppsMu</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>AI Project</p>
                        <p>Indonesia, Jawa Timur</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 877 327 748 99</span></p>
                        <p><strong>Email:</strong> <span>ajhiezudesign@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>My Account</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Shoping Cart</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Helps</h4>
                    <ul>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Faqs</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Proxy</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Track Order</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">Alat Musik Pukul</a></li>
                        <li><a href="#">Alat Musik Tiup</a></li>
                        <li><a href="#">Alat Musik Gesek</a></li>
                        <li><a href="#">Alat Musik Petik</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">AppsMu</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://instagram.com/ajhiezu/">Ajhiezu</a>
            </div>
        </div>

    </footer>


    <!-- Footer End -->
    <script src="{{ asset('asset/js/header.js') }}"></script>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Footer End -->
    <!-- Vendor JS Files -->
    <script src="{{asset('asset/Footer/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('asset/Footer/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('asset/Footer/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('asset/Footer/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('asset/Footer/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('asset/Footer/vendor/purecounter/purecounter_vanilla.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('asset/Footer/js/main.js')}}"></script>

</body>

</html>