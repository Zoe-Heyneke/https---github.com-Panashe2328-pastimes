<?php
session_start(); // Start the session
include 'DBConn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastimes - Clothing Store</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<header>
    <input type="checkbox" id="menu-toggle" style="display:none;"> <!-- Checkbox to toggle the menu -->
    
    <label for="menu-toggle" class="burger">
        <div></div>
        <div></div>
        <div></div>
    </label>

    <div class="logo">
        <img src="_images/Pastimes_logo.jpg" alt="Pastimes logo">
    </div>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="admin_dashboard.php" class= "Current"> Dashboard</a></li>
            <li><a href="user_register.php">Register</a></li>
        </ul>
    </nav>

    <div class="header-icons">
        <i class="fas fa-search"></i>
        <i class="fas fa-heart"></i>
        <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
        <i class="fas fa-user"></i>
    </div>
</header>

<main>
    <div class="main-banner">
        <h1>We believe in Giving Clothing a Second Chance.</h1>
    </div>
    
    <div class="categories">
        <div class="category">
            <h2>Fan Favorites</h2>
            <img src="path_to_fan_favorites_image.jpg" alt="Fan Favorites">
        </div>
        <div class="category">
            <h2>Recently Added</h2>
            <img src="path_to_recently_added_image.jpg" alt="Recently Added">
        </div>
        <div class="category">
            <h2>On Sale</h2>
            <img src="path_to_on_sale_image.jpg" alt="On Sale">
        </div>
        <div class="category">
            <a href="Add_Clothing.php">
                <h2>Shop</h2>
                <img src="path_to_image.jpg" alt="Shop">
            </a>
        </div>
    </div>
</main>

<footer>
    <div class="footer-container">
        <div class="footer-navigation">
            <h3>Navigation</h3>
            <ul>
                <li><a href="index.php">Home Page</a></li>
                <li><a href="contact.php">Contact Page</a></li>
            </ul>
        </div>

        <div class="footer-social-media">
            <h3>Follow Us</h3>
            <ul>
                <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                <li><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i> LinkedIn</a></li>
            </ul>
        </div>

        <div class="footer-newsletter">
            <h3>Subscribe to Our Newsletter</h3>
            <p>Stay updated with the latest news and exclusive offers!</p>
            <form action="#" method="post">
                <input type="email" placeholder="Your Email Address" required>
                <button type="submit">Subscribe Now</button>
            </form>
        </div>

        <div class="footer-secondary-info">
            <h3>Additional Links</h3>
            <ul>
                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                <li><a href="terms-of-service.php">Terms of Service</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
        </div>
    </div>

    <div style="text-align:center; padding:15%;">
        <?php 
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $query = mysqli_query($conn, "SELECT firstName, lastName FROM users WHERE email='$email'");
            if ($row = mysqli_fetch_assoc($query)) {
                echo htmlspecialchars($row['firstName'] . ' ' . $row['lastName']); // Escape user output for security
            }
        }
        ?> 
        <a href="logout.php">Logout</a>
    </div>

    <div class="footer-branding">
        <p>&copy; 2024 Pastimes. All Rights Reserved.</p>
    </div>
</footer>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const nav = document.querySelector('nav');

    menuToggle.addEventListener('change', () => {
        nav.style.display = menuToggle.checked ? 'flex' : 'none';
    });
</script>
</body>
</html>
