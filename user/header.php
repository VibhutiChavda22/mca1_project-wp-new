<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaysheree Jewels - Home</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/user_style.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/user_script.js" defer></script>
    <script src="../js/all_validation.js"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light pt-4">
            <div class="container">
                <a href="index.php"><img src="../images/logo1.png" alt="Jayshree Jewels" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" data-page="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.php" data-page="categories">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutUs.php" data-page="about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactUs.php" data-page="contact">Contact Us</a>
                        </li>
                    </ul>
                    <!-- Search Bar -->
                    <form class="d-flex ms-auto" action="search.php" method="GET">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                        <button class="buy-now" type="submit">Search</button>
                    </form>
                    <!-- Icons and Dropdown Menu -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <!-- Cart Icon -->
                        <li class="nav-item nav-icons">
                            <a class="nav-link" href="cart.php">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                        <!-- Wishlist Icon -->
                        <li class="nav-item nav-icons">
                            <a class="nav-link" href="wishlist.php">
                                <i class="fas fa-heart"></i>
                            </a>
                        </li>
                        <!-- Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                John
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../signin.php">Sign In</a></li>
                                <li><a class="dropdown-item" href="../signup.php">Sign Up</a></li>
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="order-history.php">Order History</a></li>
                                <li><a class="dropdown-item" href="../signin.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
