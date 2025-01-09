<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .navbar {
        background: linear-gradient(90deg, #fdcb6e, #e17055, #d63031);
        padding: 1rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-radius: 0 0 20px 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        animation: gradientMove 3s infinite alternate;
    }

    @keyframes gradientMove {
        0% {
            background-position: 0%;
        }

        100% {
            background-position: 100%;
        }
    }

    .brand {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .restaurant-name {
        color: white;
        font-size: 1.8rem;
        font-weight: bold;
    }

    .nav-links {
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        padding: 0.7rem 1.2rem;
        border-radius: 50px;
        transition: all 0.3s ease;
        font-weight: bold;
    }

    .nav-links a:hover {
        background-color: rgba(255, 255, 255, 0.2);
        transform: scale(1.1);
    }

    .search-container {
        display: flex;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 50px;
        padding: 0.5rem;
        box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .search-container input {
        border: none;
        outline: none;
        padding: 0.5rem 0.8rem;
        width: 180px;
        border-radius: 50px;
        font-size: 1rem;
        background-color: transparent;
        color: white;
    }

    .search-container input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .search-container button {
        background: none;
        border: none;
        cursor: pointer;
        color: white;
        font-size: 1.2rem;
        margin-left: 0.5rem;
    }

    @media (max-width: 768px) {
        .nav-links {
            flex-direction: column;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .search-container {
            width: 100%;
            margin-top: 1rem;
        }

        .search-container input {
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="brand">
            <img src="image/AAA-removebg-preview.png" alt="Logo" width="42" height="42">
            <div class="restaurant-name">Kuliner Tradisional</div>
        </div>

        <div class="nav-links">
            <a href="?page=home">Home</a>
            <a href="?page=makanan">Makanan</a>
            <a href="?page=minuman">Minuman</a>
            <a href="?page=about">About</a>
            <a href="?page=contact">Contact</a>
        </div>

        <div class="search-container">
            <input type="text" id="search-input" placeholder="Cari menu...">
            <button id="search-button">🔍</button>
        </div>
    </nav>
</body>

</html>