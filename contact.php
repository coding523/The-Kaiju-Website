<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Kaiju Restaurant</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="assets/js/theme.js"></script>
    <style>
        .contact-header {
            height: 50vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url("assets/images/contact-bg.jpg");
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .contact-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 6rem 5%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }

        .contact-info {
            padding: 2rem;
            background: var(--bg-secondary);
            border-radius: 15px;
            transform: translateX(-100%);
            opacity: 0;
            animation: slideInLeft 1s ease-out forwards;
        }

        .contact-info h2 {
            font-size: 2rem;
            margin-bottom: 2rem;
            position: relative;
            display: inline-block;
        }

        .contact-info h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--accent-color);
            animation: expandWidth 0.8s ease-out 1s forwards;
        }

        .contact-method {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding: 1rem;
            border-radius: 10px;
            background: var(--bg-primary);
            transform: translateX(-20px);
            opacity: 0;
            animation: slideInRight 0.5s ease-out forwards;
        }

        .contact-method:nth-child(2) {
            animation-delay: 0.2s;
        }

        .contact-method:nth-child(3) {
            animation-delay: 0.4s;
        }

        .contact-method:nth-child(4) {
            animation-delay: 0.6s;
        }

        .contact-method i {
            font-size: 2rem;
            color: var(--accent-color);
            margin-right: 1.5rem;
            transition: transform 0.3s ease;
        }

        .contact-method:hover i {
            transform: scale(1.2) rotate(15deg);
        }

        .contact-form-container {
            transform: translateX(100%);
            opacity: 0;
            animation: slideInRight 1s ease-out forwards;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-group label {
            position: absolute;
            left: 1rem;
            top: 1rem;
            transition: all 0.3s ease;
            pointer-events: none;
            color: var(--text-secondary);
        }

        .form-group input:focus~label,
        .form-group input:valid~label,
        .form-group textarea:focus~label,
        .form-group textarea:valid~label {
            top: -0.5rem;
            left: 0.5rem;
            font-size: 0.8rem;
            color: var(--accent-color);
            background: var(--bg-primary);
            padding: 0 0.5rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            background: transparent;
            border: 2px solid var(--border-color);
            border-radius: 5px;
            color: var(--text-primary);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 10px rgba(255, 107, 107, 0.2);
        }

        .form-group textarea {
            height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background: var(--accent-color);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }

        .submit-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 107, 107, 0.3);
        }

        .social-connect {
            margin-top: 4rem;
            text-align: center;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease-out 1s forwards;
        }

        .social-connect h3 {
            margin-bottom: 1.5rem;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        .social-icons a {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--bg-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-primary);
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            transform: translateY(-5px) rotate(360deg);
            background: var(--accent-color);
            color: white;
        }

        @media (max-width: 768px) {
            .contact-container {
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
            <div class="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="nav-links">
                <a href="menu.php">Menu</a>
                <a href="about.php">About</a>
                <a href="location.php">Location</a>
                <a href="contact.php" class="active">Contact</a>
            </div>
            <div class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count">0</span>
            </div>
        </nav>
    </header>

    <!-- Contact Header -->
    <section class="contact-header">
        <div class="hero-content">
            <h1>GET IN TOUCH</h1>
            <p>We'd love to hear from you</p>
        </div>
    </section>

    <!-- Contact Content -->
    <div class="contact-container">
        <div class="contact-info">
            <h2>Contact Information</h2>
            <div class="contact-method">
                <i class="fas fa-phone"></i>
                <div>
                    <h3>Phone</h3>
                    <p>+60 010-278-6648</p>
                </div>
            </div>
            <div class="contact-method">
                <i class="fas fa-envelope"></i>
                <div>
                    <h3>Email</h3>
                    <p>info@kaiju.my</p>
                </div>
            </div>
            <div class="contact-method">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <h3>Location</h3>
                    <p>APW Bangsar, Kuala Lumpur</p>
                </div>
            </div>
            <div class="contact-method">
                <i class="fas fa-clock"></i>
                <div>
                    <h3>Business Hours</h3>
                    <p>Mon-Thu: 11:30AM - 10PM</p>
                    <p>Fri-Sat: 11:30AM - 12AM</p>
                    <p>Sun: 11:30AM - 10PM</p>
                </div>
            </div>
        </div>

        <div class="contact-form-container">
            <form action="process_contact.php" method="POST" class="contact-form">
                <div class="form-group">
                    <input type="text" id="name" name="name" required>
                    <label for="name">Your Name</label>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" required>
                    <label for="email">Your Email</label>
                </div>
                <div class="form-group">
                    <input type="text" id="subject" name="subject" required>
                    <label for="subject">Subject</label>
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" required></textarea>
                    <label for="message">Your Message</label>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>

            <div class="social-connect">
                <h3>Connect With Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>

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