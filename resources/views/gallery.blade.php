<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce - Gallery</title>
    <!-- CSS Link -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .hero {
            background-image: url('img/bg-pic.jpg');
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
            <h1>E-commerce Store - Gallery</h1>
            <p>Our E-commerce Gallery Section</p>
            <!-- <a href="#shop-now" class="btn">Shop Now</a> -->
        </div>
    </header>
    <!-- Hero Section End -->

    <!-- Gallery Section Start -->
    <div class="conatiner">
        <section class="gallery">
            <div class="gallery-item1">
                <img src="img/img2.jpg" alt="Image 1">
            </div>
            <div class="gallery-item">
                <img src="img/img1.jpg" alt="Image 2">
            </div>
            <div class="gallery-item1">
                <img src="img/img1.jpg" alt="Image 2">
            </div>
            <div class="gallery-item">
                <img src="img/img2.jpg" alt="Image 2">
            </div>
        </section>
    </div>

    <!-- Hero Section End -->

    <!-- Footer start -->
    <div class="footer">
        <p>&copy; 2024 Your E-commerce Store. All rights reserved.</p>
    </div>
    <!-- Footer End -->
</body>

</html>