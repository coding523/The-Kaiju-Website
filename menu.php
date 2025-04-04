<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Kaiju Restaurant</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="assets/js/theme.js"></script>
    <style>
        .menu-header {
            height: 50vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url("assets/images/menu-bg.jpg");
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 4rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .menu-category {
            opacity: 0;
            transform: translateY(30px);
            animation: slideUp 0.8s ease-out forwards;
        }

        .menu-category:nth-child(2) {
            animation-delay: 0.2s;
        }

        .menu-category:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .menu-item {
            background: var(--bg-secondary);
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .menu-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, var(--accent-color), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .menu-item:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .menu-item:hover::before {
            opacity: 0.1;
        }

        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .price-tag {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--accent-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-weight: bold;
            transform: rotate(5deg);
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <a href="index.php">KAIJU</a>
            </div>
            <div class="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="nav-links">
                <a href="menu.php" class="active">Menu</a>
                <a href="about.php">About</a>
                <a href="location.php">Location</a>
                <a href="contact.php">Contact</a>
            </div>
            <div class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count">0</span>
            </div>
        </nav>
    </header>

    <!-- Menu Header -->
    <section class="menu-header">
        <div class="hero-content">
            <h1>OUR MENU</h1>
            <p>Discover the perfect fusion of flavors</p>
        </div>
    </section>

    <!-- Menu Grid -->
    <section class="menu-grid">
        <div class="menu-category">
            <h2>Appetizers</h2>
            <div class="menu-item">
                <span class="price-tag">$8.99</span>
                <img src="https://th.bing.com/th/id/OIP.lpxQIvkRQVU0axaKPLfXbAHaHa?w=179&h=180&c=7&r=0&o=5&pid=1.7" alt="Spring Rolls">
                <h3>Spring Rolls</h3>
                <p>Crispy vegetable spring rolls with sweet chili sauce</p>
            </div>
            <div class="menu-item">
                <span class="price-tag">$7.99</span>
                <img src="https://th.bing.com/th/id/R.756abc3931b212ed84635bfad02a31b4?rik=KhI5AP2KCoz7KQ&pid=ImgRaw&r=0" alt="Edamame">
                <h3>Edamame</h3>
                <p>Steamed soybeans with sea salt</p>
            </div>
        </div>

        <div class="menu-category">
            <h2>Main Courses</h2>
            <div class="menu-item">
                <span class="price-tag">$15.99</span>
                <img src="https://th.bing.com/th/id/OIP.KGWV0CrKch2LEWS3_1pKhgHaJQ?rs=1&pid=ImgDetMain" alt="Pad Thai">
                <h3>Pad Thai</h3>
                <p>Stir-fried rice noodles with egg, tofu, and shrimp</p>
            </div>
            <div class="menu-item">
                <span class="price-tag">$18.99</span>
                <img src="https://i.pinimg.com/736x/bd/8d/63/bd8d63aca2dd4c9fdc086b5341d34c70.jpg" alt="Ramen">
                <h3>Signature Ramen</h3>
                <p>Rich pork broth with chashu, egg, and vegetables</p>
            </div>
        </div>

        <div class="menu-category">
            <h2>Beverages</h2>
            <div class="menu-item">
                <span class="price-tag">$4.99</span>
                <img src="https://th.bing.com/th/id/OIP.D56VnrPs7qy-konGn1VeZgHaHa?rs=1&pid=ImgDetMain" alt="Matcha Latte">
                <h3>Matcha Latte</h3>
                <p>Premium green tea with steamed milk</p>
            </div>
            <div class="menu-item">
                <span class="price-tag">$3.99</span>
                <img src="https://th.bing.com/th/id/OIP.lTuzJeRxXjLu1gWxiGCk1AHaLH?rs=1&pid=ImgDetMain" alt="Thai Iced Tea">
                <h3>Thai Iced Tea</h3>
                <p>Classic Thai tea with cream</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="social-links">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
        <p>&copy; 2024 Kaiju. All rights reserved.</p>
    </footer>

    <script src="assets/js/main.js"></script>
</body>

</html>