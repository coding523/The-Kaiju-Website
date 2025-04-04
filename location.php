<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location - Kaiju Restaurant</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="assets/js/theme.js"></script>
    <style>
        .location-header {
            height: 50vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url("assets/images/location-bg.jpg");
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .locations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            padding: 6rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .location-card {
            background: var(--bg-secondary);
            border-radius: 15px;
            overflow: hidden;
            transform: translateY(50px);
            opacity: 0;
            animation: slideUp 0.8s ease-out forwards;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .location-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .location-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .location-image {
            height: 250px;
            overflow: hidden;
        }

        .location-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .location-card:hover .location-image img {
            transform: scale(1.1);
        }

        .location-info {
            padding: 2rem;
        }

        .location-info h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .location-info h3::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-color);
            transition: width 0.3s ease;
        }

        .location-card:hover .location-info h3::after {
            width: 100%;
        }

        .location-details {
            margin-top: 1.5rem;
        }

        .detail-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            opacity: 0;
            transform: translateX(-20px);
            animation: slideInRight 0.5s ease-out forwards;
        }

        .detail-item i {
            color: var(--accent-color);
            margin-right: 1rem;
            font-size: 1.2rem;
        }

        .map-section {
            padding: 4rem 5%;
            position: relative;
        }

        .map-container {
            height: 500px;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            opacity: 0;
            transform: scale(0.95);
            animation: scaleIn 0.8s ease-out 0.5s forwards;
        }

        .map-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, var(--accent-color), transparent);
            opacity: 0.1;
            pointer-events: none;
        }

        .transport-options {
            margin-top: 4rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .transport-card {
            background: var(--bg-secondary);
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            transform: translateY(30px);
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .transport-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .transport-card:nth-child(3) {
            animation-delay: 0.4s;
        }

        .transport-card i {
            font-size: 2.5rem;
            color: var(--accent-color);
            margin-bottom: 1rem;
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulseGlow {

            0%,
            100% {
                box-shadow: 0 0 20px var(--accent-color);
            }

            50% {
                box-shadow: 0 0 40px var(--accent-color);
            }
        }

        .current-status {
            position: absolute;
            top: 2rem;
            right: 2rem;
            padding: 0.5rem 1rem;
            background: var(--accent-color);
            color: white;
            border-radius: 20px;
            font-weight: bold;
            animation: pulseGlow 2s infinite;
        }

        @media (max-width: 768px) {
            .locations-grid {
                grid-template-columns: 1fr;
            }
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
            <div class="nav-links">
                <a href="menu.php">Menu</a>
                <a href="about.php">About</a>
                <a href="location.php" class="active">Location</a>
                <a href="contact.php">Contact</a>
            </div>
            <div class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count">0</span>
            </div>
        </nav>
    </header>

    <!-- Location Header -->
    <section class="location-header">
        <div class="hero-content">
            <h1>FIND US</h1>
            <p>Experience KAIJU near you</p>
        </div>
    </section>

    <!-- Locations Grid -->
    <section class="locations-grid">
        <div class="location-card">
            <div class="current-status">Open Now</div>
            <div class="location-image">
                <img src="assets/images/kl-location.jpg" alt="Kuala Lumpur Location">
            </div>
            <div class="location-info">
                <h3>KUALA LUMPUR</h3>
                <p>APW BANGSAR</p>
                <div class="location-details">
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <p>Mon-Thu: 11:30AM - 10PM</p>
                            <p>Fri-Sat: 11:30AM - 12AM</p>
                            <p>Sun: 11:30AM - 10PM</p>
                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-phone"></i>
                        <p>+60 010-278-6648</p>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-envelope"></i>
                        <p>kl@kaiju.my</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="location-card">
            <div class="location-image">
                <img src="assets/images/bangkok-location.jpg" alt="Bangkok Location">
            </div>
            <div class="location-info">
                <h3>BANGKOK</h3>
                <p>Piman49, Thong Lor</p>
                <div class="location-details">
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <p>Daily: 11AM - 12AM</p>
                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-phone"></i>
                        <p>+66 974796263</p>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-envelope"></i>
                        <p>bkk@kaiju.my</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7223844157247!2d101.67441231475503!3d3.1335136977275794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49c0f4327a99%3A0x4ae78c8c617199f9!2sAPW%20Bangsar!5e0!3m2!1sen!2smy!4v1645678901234!5m2!1sen!2smy"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
            <div class="map-overlay"></div>
        </div>

        <div class="transport-options">
            <div class="transport-card">
                <i class="fas fa-train"></i>
                <h3>By Train</h3>
                <p>5 minutes walk from Bangsar LRT Station</p>
            </div>
            <div class="transport-card">
                <i class="fas fa-car"></i>
                <h3>By Car</h3>
                <p>Free parking available at APW Bangsar</p>
            </div>
            <div class="transport-card">
                <i class="fas fa-bus"></i>
                <h3>By Bus</h3>
                <p>Bus stops available within walking distance</p>
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