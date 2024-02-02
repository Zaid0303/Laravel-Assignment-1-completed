<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce - Home</title>
    <!-- CSS Link -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .hero {
            background-image: url('img/bg-home.jpg');
            /* Add your hero image URL here */
            background-size: cover;
            background-position: center;
            color: White;
            text-align: center;
            padding: 100px 20px;
        }
    </style>
    <!-- BootStrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">E-commerce Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('aboutpage')}}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('gallerypage')}}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('contactpage')}}">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Hero Section Start -->
    <header class="hero">
        <div class="hero-content">
            <h1>Welcome to Our E-commerce Store</h1>
            <p>Discover amazing products and shop with confidence</p>
            <a href="#shop-now" class="btn btn-warning">Shop Now</a>
        </div>
    </header>
    <!-- Hero Section End -->


    <!-- Products Card Section Start -->
    <h1 class="mt-4 text-center">Latest Gaming Products</h1>

    <section class="product-cards">
        <div class="product-card">
            <img src="/img/product-1.jpg" alt="Product 1">
            <h2 class="mt-2">Mouse</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <span class="price">$99.99</span>
            <a href="#" class="btn btn-warning">Add to Cart</a>
        </div>

        <div class="product-card">
            <img src="/img/product-2.jpg" alt="Product 2">
            <h2 class="mt-2">Headphone</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <span class="price">$79.99</span>
            <a href="#" class="btn btn-warning">Add to Cart</a>
        </div>

        <div class="product-card">
            <img src="/img/product-1.jpg" alt="Product 2">
            <h2 class="mt-2">Mouse</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <span class="price">$79.99</span>
            <a href="#" class="btn btn-warning">Add to Cart</a>
        </div>

        <div class="product-card">
            <img src="/img/product-2.jpg" alt="Product 2">
            <h2 class="mt-2">Headphone</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <span class="price">$79.99</span>
            <a href="#" class="btn btn-warning">Add to Cart</a>
        </div>

        <div class="product-card">
            <img src="/img/product-1.jpg" alt="Product 2">
            <h2 class="mt-2">Mouse</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <span class="price">$79.99</span>
            <a href="#" class="btn btn-warning">Add to Cart</a>
        </div>

        <div class="product-card">
            <img src="/img/product-2.jpg" alt="Product 2">
            <h2 class="mt-2">Headphone</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <span class="price">$79.99</span>
            <a href="#" class="btn btn-warning">Add to Cart</a>
        </div>


    </section>
    <!-- Products Card Section End -->

    <!-- Footer start -->
    <div class="footer">
        <p>&copy; 2024 Your E-commerce Store. All rights reserved.</p>
    </div>
    <!-- Footer End -->
</body>

</html>