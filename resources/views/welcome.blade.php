<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UTS Web Dev</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap');
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>
    <body>
        <header>
            <a href="#" class="logo"><i class='bx bxs-leaf'></i>BisDig Mart</a>
    
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="navbar">
                <li><a href="home" class="home-active">Home</a></li>
                <li><a href="#Subject">Product</a></li>
                <li><a href="#Product">#SuperTeam</a></li>
                <li><a href="#Campus">Campus</a></li>
                <li><a href="#Biodata">Subject</a></li>
            </ul>
            <div class="profile">
                <img src="{{ asset('images/Copy of cover kopimu  (1).png') }}" alt="">
                <span> Web Development</span>
                <i class='bx bx-caret-down'></i>
            </div>
        </header>
    
        <section class="home swiper" id="home">
            <div class="swiper-wrapper">
                <div class="swiper-slide container">
                    <img src="{{ asset('images/7.png') }}" alt=""> 
    
                    <div class="home-text">
                        <span>Breville</span>
                        <h1>Exeptional Journey<br>For Coffee Machine<br>Finest Standart</h1>
                        <a href="#" class="btn">Shop Now<i class='bx bx-right-arrow-alt' ></i></a>
                    </div> 
                </div>
    
                <div class="swiper-slide container">
                    <img src="{{ asset('images/2.png') }}" alt=""> 
    
                    <div class="home-text">
                        <span>Breville</span>
                        <h1>Crafting Perfection<br>One Brew<br>At a Time.</h1>
                        <a href="#" class="btn">Shop Now<i class='bx bx-right-arrow-alt' ></i></a>
                    </div> 
                </div>
    
                <div class="swiper-slide container">
                    <img src="{{ asset('images/5.png') }}" alt=""> 
    
                    <div class="home-text">
                        <span>Breville</span>
                        <h1>Elevating<br>Every Pour<br>To Perfection</h1>
                        <a href="#" class="btn">Shop Now<i class='bx bx-right-arrow-alt' ></i></a>
                    </div> 
                </div>
               
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
    
        </section>
    
        <section class="Subject" id="Subject">
            <div class="heading">
                <h1>Our Popular<br><span>Products</span></h1>
                <a href="{{ route('products') }}" class="btn">Shop Now<i class='bx bx-right-arrow-alt' ></i></a>
            </div>
            
            <div class="subject-container">
                @foreach ($products as $product)
                    <div class="box">
                        <img src="{{ $product->image }}" alt="">
                        <span>Finest Item</span>
                        <h2>{{ $product->name }}</h2>
                        <h3 class="price">${{ $product->price }} <span> </span></h3>
                        <i class='bx bx-cart-alt' style='color:#03624c' ></i>
                        <i class='bx bx-heart' style='color:#03624c'  ></i>
                        <span class="discount">-23%</span>
                    </div>
                @endforeach
            </div>
        </section>
    
        <section class="Product" id="Product">
            <div class="heading">
                <h1>Meet Our <br><span>#SuperTeam</span></h1>
                <a href="#" class="btn">See All<i class='bx bx-right-arrow-alt' ></i></a>
            </div>
            
            <div class="product-container">
                <div class="box box1">
                    <img src="{{ asset('images/a1 (2).png') }}" alt="">
                    <h2>Akhirul Ramadhanu</h2>
                    <span>Kebagusan, Jakarta Selatan</span>
                    <h3>Jakarta, 13/11/2004</h3>
                    <i class='bx bx-right-arrow-alt' ></i>
                </div>
    
                <div class="box box2">
                    <img src="{{ asset('images/a1 (1).png') }}" alt="">
                    <h2>Ammar Shiddiq Y.</h2>
                    <span>Cilandak, Jakarta Selatan</span>
                    <h3>Jakarta, 25/02/2005</h3>
                    <i class='bx bx-right-arrow-alt' ></i>
                </div>
    
                <div class="box box3">
                    <img src="{{ asset('images/a1 (3).png') }}" alt="">
                    <h2>Adib Pradipta</h2>
                    <span>Kab. Bekasi, Jawa Barat</span>
                    <h3>Jakarta, 07/04/2005</h3>
                    <i class='bx bx-right-arrow-alt' ></i>
                </div>
    
                <div class="box box4">
                    <img src="{{ asset('images/a1 (4).png') }}" alt="">
                    <h2>Diya Aldin F.</h2>
                    <span>Cipinang, Jakarta Timur</span>
                    <h3>Wonogiri, 13/03/2005</h3>
                    <i class='bx bx-right-arrow-alt' ></i>
                </div>
    
            </div>
        </section>
    
        <section class="Campus" id="Campus">
            <img src="{{ asset('images/logo unj.png') }}" alt="">
            <div class="Campus-text">
                <span>Universitas<br><h1>Negeri Jakarta</h1></span>
                <p>Universitas Negeri Jakarta (UNJ) adalah salah satu perguruan tinggi negeri terkemuka yang berlokasi di Jakarta, Indonesia. Didirikan pada tahun 1964, UNJ awalnya dikenal sebagai Institut Keguruan dan Ilmu Pendidikan (IKIP) Jakarta sebelum bertransformasi menjadi universitas. Dalam perkembangannya, UNJ telah bertransformasi dari institusi yang fokus pada pendidikan keguruan menjadi universitas yang menawarkan berbagai program studi. Saat ini, UNJ memiliki 8 fakultas dan 1 program pascasarjana yang melayani ribuan mahasiswa.</p>
                <p>Jl. Rawamangun Muka, Rawamangun Jakarta Timur, DK Jakarta, Indonesia</p>
                <a href="#" class="btn">Learn More<i class='bx bx-right-arrow-alt' ></i></a>
            </div>
        </section>
    
        <section class="Campus2" id="Campus">
            <div class="Campus-text2">
                <span>Universitas<br><h1>Negeri Jakarta</h1></span>
                <p>Universitas Negeri Jakarta (UNJ) adalah salah satu perguruan tinggi negeri terkemuka yang berlokasi di Jakarta, Indonesia. Didirikan pada tahun 1964, UNJ awalnya dikenal sebagai Institut Keguruan dan Ilmu Pendidikan (IKIP) Jakarta sebelum bertransformasi menjadi universitas. Dalam perkembangannya, UNJ telah bertransformasi dari institusi yang fokus pada pendidikan keguruan menjadi universitas yang menawarkan berbagai program studi. Saat ini, UNJ memiliki 8 fakultas dan 1 program pascasarjana yang melayani ribuan mahasiswa.</p>
                <p>Fakultas Ekonomi, Gedung M, Kampus A UNJ</p>
                <a href="#" class="btn">Learn More<i class='bx bx-right-arrow-alt' ></i></a>
            </div>
            <img src="{{ asset('images/Asset 25.png') }}" alt="">
    
        </section>
    
        <section class="Biodata" id="Biodata">
            <div class="heading">
                <h1>Web <br><span>Development</span></h1>
                
            </div>
            
            <div class="Biodata-container">
                <div class="box box1">
                    <img src="{{ asset('images/Asset 26.png') }}" alt="">
                    <div class="box-text">
                        <h2>Get To Know Our Learning Subject</h2>
                        <h3>Mata kuliah ini membahas tentang proses pembuatan, pembangunan, dan pemeliharaan situs web yang mencakup berbagai aspek seperti desain web dan pemrograman. Proses ini melibatkan berbagai teknologi dan keterampilan, mulai dari bahasa pemrograman seperti HTML, CSS, dan JavaScript. Seorang web developer perlu memahami konsep UX (User Experience) dan UI (User Interface) untuk menciptakan situs yang tidak hanya fungsional tetapi juga menarik bagi pengguna. Dengan berkembangnya teknologi, web developer terus berinovasi, menjadikan situs web lebih responsif, interaktif, dan terintegrasi dengan berbagai platform.</h3>
                        <p>Inkreswari Retno Hardini, S.Kom., M.T. <br>Roni Faslah, S.Pd, M.M.</p>
                        <a href="#" class="btn">Learn More<i class='bx bx-right-arrow-alt' ></i></a>
                    </div>
                    
                </div>
            </div>
        </section>
    
        <footer class="footer">
    
            <div class="social">
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-linkedin-square' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-youtube' ></i></a>
            </div>
    
            <ul class="list">
                <li>
                    <a href="#">FAQ</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">About Me</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="#">Privacy Policy</a>
                </li>
            </ul>
    
            <p class="copyright">© 2024 BisDig Mart | All Rights Reserved</p>
        </footer>
    
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
        <script src="{{ asset('js/main.js') }}"></script>
    </body>    
</html>
