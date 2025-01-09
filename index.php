<?php
require "includes/config.php";
require "includes/function.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kuliner</title>
    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .footer {
        background-color:rgb(228, 231, 233);;
        color:rgb(0, 0, 0);
        padding: 40px 20px;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        flex-wrap: wrap;
    }

    .footer-section {
        flex: 1;
        margin: 10px;
        min-width: 200px;
    }

    .footer-section h4 {
        margin-bottom: 15px;
        font-size: 18px;
    }

    .footer-section p,
    .footer-section a {
        font-size: 14px;
        line-height: 1.6;
        color:rgb(0, 0, 0);
        text-decoration: none;
    }

    .footer-section a:hover {
        text-decoration: underline;
    }

    .social-icons {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }

    .social-icons a {
        color:rgb(0, 0, 0);
        font-size: 20px;
        text-decoration: none;
    }

    .social-icons a:hover {
        color:rgb(0, 0, 0);
    }

    .footer-bottom {
        text-align: center;
        margin-top: 20px;
        font-size: 12px;
        color:rgb(0, 0, 0);
    }
    </style>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <div style="text-align: center;">
        <?php require "includes/navbar.php" ?>
        <hr>
    </div>
    <div align="center">
        <?php require "includes/konten.php" ?>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h4>Dreamy</h4>
                <p>
                    Dreamy UI Kit. Carefully crafted UI components for modern web designs. These examples will help you
                    create projects seamlessly.
                </p>
            </div>
            <div class="footer-section">
                <h4>Contact Us</h4>
                <p>mfaiziqbal01@gmail.com</p>
                <p>London Eye, London, NY 11201</p>
                <p>+1 875 325 68 57</p>
            </div>
            <div class="footer-section">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="http://t.me/+6289673825738"><i class="fab fa-telegram"></i></a>
                    <a href="https://x.com/Faiz_ball"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/faiz.ball/profilecard/?igsh=MXhrNjEzNjNlM21ncQ=="><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/muhammad-iqbal-18781a304?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; <?= date("Y") ?> Pemrograman Web 1. All rights reserved.
        </div>
    </footer>
</body>

</html>