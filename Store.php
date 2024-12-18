<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holopets | Shop</title>
    <link rel="stylesheet" href="styless.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About Us</a></li>
                <li><a href="Store.php">Store</a></li>
                <li><a href="Reviews.php">Reviews</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
</header>

    <section class="shop-section">
        <h1>Our Shop</h1>
        <div class="product-container">
            <div class="product-card">
                <img src="Logo.png" alt="Product 1" width="100" height="100">
                <h2>Holo Fiction Ring</h2>
                <p>$29.99</p>
                <div popover id="pop">
                <p>Added to Cart!<i class="bi bi-cart"></i></p>
                </div>
                <button class="btn" popovertarget="popover">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="Logo.png" alt="Product 1" width="100" height="100">
                <h2>Holo Non-fiction Ring</h2>
                <p>$29.99</p>
                <h1 popover id="popover">Added to Cart!</h1>
                <button class="btn" popovertarget="popover">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="Logo.png" alt="Product 1" width="100" height="100">
                <h2>Holo Education Ring</h2>
                <p>$29.99</p>
                <h1 popover id="popover">Added to Cart!</h1>
                <button class="btn" popovertarget="popover">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="Logo.png" alt="Product 1" width="100" height="100">
                <h2>Holo Animal-Lover ring</h2>
                <p>$29.99</p>
                <h1 popover id="popover">Added to Cart!</h1>
                <button class="btn" popovertarget="popover">Add to Cart</button>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Holopets. All rights reserved.</p>
    </footer>
</body>
</html>