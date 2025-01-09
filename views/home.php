<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Bakery Layout</title>
    <!-- Link Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS Library CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
    /* Custom CSS */
    body {
        font-family: Arial, sans-serif;
    }

    .hero-section {
        color: black;
        text-align: center;
        padding: 0px 0;
    }

    .hero-section img {
        width: 50px;
        height: auto;
    }

    .content-section {
        padding: 40px 0;
    }

    .image-grid img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .dark-section {
        background-color: #222;
        color: white;
        padding: 60px 0;
    }

    .carousel-caption h5 {
        font-size: 25px;
        /* Set font size to 20px */
        background-color: rgba(0, 0, 0, 0.7);
        /* Black background with opacity */
        color: white;
        /* Set text color to white */
        border-radius: 5px;
    }

    .carousel-caption p {
        font-size: 25px;
        /* Set font size to 20px */
        background-color: rgba(0, 0, 0, 0.7);
        /* Black background with opacity */
        color: white;
        /* Set text color to white */
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/WhatsApp Image 2025-01-04 at 11.54.45_581d6888.jpg" class="d-block w-100"  alt="...">
            </div>
    </section>


    </section>

    <!-- Content Section 1 -->
    <section class="content-section container" id="makanan-minuman">
        <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-right">
                <h2>The recipe to happiness</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Mauris non nibh in turpis
                    ultrices congue.
                </p>
                <button class="btn btn-dark"><a href="http://localhost/Kuliner%20No%20BS5/?page=makanan"
                        class="text-white text-decoration-none">Order
                        Now</a></button>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="row">
                    <div class="col-6 mb-3">
                        <img src="image/Ayam.jpg" alt="Bread 1" class="img-fluid rounded">
                    </div>
                    <div class="col-6 mb-3">
                        <img src="image/ayam-taliwang.jpg" alt="Bread 2" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Grid Image Section -->
    <section class="container my-5">
        <div class="row image-grid" data-aos="zoom-in">
            <div class="col-md-4 mb-4">
                <img src="image/Kepiting.jpeg" alt="Croissant 1" class="rounded">
            </div>
            <div class="col-md-4 mb-4">
                <img src="image/Resep Ikan Nila Bakar Pedas Manis yang Mantap Bumbunya.jpeg" alt="Croissant 2"
                    class="rounded">
            </div>
            <div class="col-md-4 mb-4">
                <img src="image/Soto Betawi Photography.jpeg" alt="Croissant 3" class="rounded">
            </div>
        </div>
    </section>

    <!-- Content Section 2 -->
    <section class="content-section container">
        <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-up">
                <img src="image/T-removebg-preview.png" alt="Sauce Bowl" class="img-fluid rounded">
            </div>
            <div class="col-md-6" data-aos="fade-down">
                <h2>The recipe to happiness</h2>
                <p>
                    Enjoy our delicious alternatives, made with love and passion for baking. Join us for a taste of
                    perfection.
                </p>
                <button class="btn btn-dark"><a href="http://localhost/Kuliner%20No%20BS5/?page=minuman"
                        class="text-white text-decoration-none">Order
                        Now</a></button>
            </div>
        </div>
    </section>

    <!-- Dark Section (Alternatives) -->
    <section class="dark-section text-center" data-aos="fade-up">
        <h2>Delicious Alternatives</h2>
        <p>Our cookies and pastries are made to bring smiles and happiness to your table.</p>
        <div class="row mt-4 justify-content-center">
            <div class="col-md-6">
                <img src="image/download (14).jpg" alt="Cookies" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <!-- Content Section 3 -->
    <section class="content-section container">
        <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-left">
                <h2>The recipe to happiness</h2>
                <p>
                    Freshly baked bread and cookies, waiting for you to enjoy. Order your favorite treats today!
                </p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="row">
                    <div class="col-6 mb-3">
                        <img src="image/Es Teler.jpeg" alt="Pastry 1" class="img-fluid rounded">
                    </div>
                    <div class="col-6 mb-3">
                        <img src="image/Wedang Uwu.jpeg" alt="Pastry 2" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AOS Library JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
    // Initialize AOS
    AOS.init({
        duration: 1000, // Animasi berlangsung 1 detik
        offset: 100, // Jarak offset sebelum animasi dimulai
    });
    </script>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>