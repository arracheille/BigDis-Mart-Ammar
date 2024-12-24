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
    
        <section class="Subject" id="Subject">
            <div class="heading">
                <h1>Our Popular<br><span>Products</span></h1>
                <a href="#" class="btn" onclick="openAddschedule()">Add Product<i class='bx bxs-plus-circle'></i></a>
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
            
            <div id="addscheduleModal" class="modal">
                <div class="modal-content">
                    <div class="modal-title-close">
                        <h1>Add Product</h1>
                        <span class="close" onclick="closeAddschedule()">&times;</span>
                    </div>
                    <form action="/create-product" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="name">Product Name</label>
                        <input type="text" id="name" name="name" required>
                        <label for="image">Product Image</label>
                        <input type="file" id="image" name="image" required>
                        <label for="price">Product Price</label>
                        <input type="number" id="price" name="price" step="0.01" required>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
    
        </section>
        
        <script>
            function openAddschedule() {
                document.getElementById('addscheduleModal').style.display = 'block';
            }

            function closeAddschedule() {
                document.getElementById('addscheduleModal').style.display = 'none';
            }
        </script>
    </body>
</html>
