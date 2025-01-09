<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <!-- Link Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS Library CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: rgb(241, 235, 236);
        color: #333;
    }

    .contact-section {
        padding: 50px 0;
    }

    .contact-info h5 {
        font-weight: bold;
    }

    .contact-info i {
        font-size: 1.5rem;
        color: #0d6efd;
    }

    .contact-info .info-item {
        margin-bottom: 20px;
    }

    .social-icons a {
        color: rgb(11, 26, 49);
        font-size: 1.2rem;
        margin-right: 10px;
        text-decoration: none;
    }

    .form-control {
        background-color: #e9f6f7;
        border: none;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #0d6efd;
    }

    .btn-submit {
        background-color: #0d6efd;
        color: #fff;
        border: none;
    }

    iframe {
        width: 100%;
        height: 300px;
        border: none;
    }
    </style>
</head>

<body>
    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-md-5" data-aos="fade-right">
                    <h2 class="mb-4">Get In Touch</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                        mattis.</p>

                    <div class="contact-info">
                        <div class="info-item d-flex align-items-center">
                            <i class="bi bi-telephone me-3"></i>
                            <div>
                                <h5>Phone</h5>
                                <p>+081 5678 1234</p>
                            </div>
                        </div>
                        <div class="info-item d-flex align-items-center">
                            <i class="bi bi-envelope me-3"></i>
                            <div>
                                <h5>Email</h5>
                                <p>mfaiziqbal01@gmail.com</p>
                            </div>
                        </div>
                        <div class="info-item d-flex align-items-center">
                            <i class="bi bi-geo-alt me-3"></i>
                            <div>
                                <h5>Address</h5>
                                <p>London Eye, London</p>
                            </div>
                        </div>
                        <div class="info-item d-flex align-items-center">
                            <i class="bi bi-instagram me-3"></i>
                            <div>
                                <h5>Instagram</h5>
                                <p>faiz.ball</p>
                            </div>
                        </div>
                    </div>
                    <div class="social-icons mt-3">
                        <h5>Social Media</h5>
                        <a href="http://t.me/+6289673825738"><i class="bi bi-telegram"></i></a>
                        <a href="https://x.com/Faiz_ball"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.instagram.com/faiz.ball/profilecard/?igsh=MXhrNjEzNjNlM21ncQ=="><i
                                class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-md-7" data-aos="fade-left">
                    <div class="bg-light p-4 rounded">
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-submit w-100">SUBMIT BUTTON</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Google Map -->
            <div class="row mt-5">
                <div class="col-12" data-aos="zoom-in">
                    <iframe src="https://maps.google.com/maps?q=-6.346489,107.0526135&hl=id&z=14&output=embed"
                        allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS Library JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
    // Initialize AOS
    AOS.init({
        duration: 1000, // Animasi berlangsung 1 detik
        offset: 100, // Jarak offset sebelum animasi dimulai
    });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>