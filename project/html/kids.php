<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIDS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .navbar {
            background-color: #D9D9D9;
        }

        .top-container {
            background-color: #F3F3F3;
        }

        .bottom-bar {
            background-color: #F3F3F3;
        }

        .bottom-bar .nav-link {
            color: black;
        }

        .row > * {
            margin-bottom: 2%;
        }

        .rectangle-square {
            background-color: #ccc;
            padding: 100% 0 0;
        }

        .rectangle-wrapper {
            flex: 1;
            min-width: 100px;
        }

        .icon {
            font-size: 20px;
        }


        .search-icon-btn {
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>


</head>
<body>

<div class="container-fluid top-container py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="text-dark text-decoration-none " href="#">FTW</a>
        <div>
            <a class="text-dark text-decoration-none" href="#">Register</a>
            <span class="mx-2 text-dark">|</span>

            <div class="dropdown d-inline">
                <a class="text-dark text-decoration-none dropdown-toggle" role="button" id="loginDropdown"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    Login
                </a>
                <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="loginDropdown"
                    style="min-width: 250px;">
                    <li>
                        <div class="mb-2">
                            <label for="loginName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="loginName" placeholder="Enter your name">
                        </div>
                    </li>
                    <li>
                        <div class="mb-2">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="loginPassword"
                                   placeholder="Enter your password">
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-secondary w-100">Confirm</button>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a href="#" class="me-3 text-dark placeholder-box col-2"> <i class="bi bi-vinyl-fill fs-2"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavbarMenu"
                aria-controls="NavbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="NavbarMenu">
            <ul class="navbar-nav mx-auto justify-content-center"> <!-- Center the menu items -->
                <li class="nav-item"><a class="nav-link ms-4" href="#"
                                        style="font-size: 1.5rem; font-weight: bold;">MEN</a></li>
                <li class="nav-item"><a class="nav-link ms-4" href="#" style="font-size: 1.5rem; font-weight: bold;">WOMEN</a>
                </li>
                <li class="nav-item"><a class="nav-link ms-4" href="#" style="font-size: 1.5rem; font-weight: bold;">KIDS</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <form class="d-flex align-items-center" role="search">
                    <div class="input-group col-6" style="position: relative;">
                        <input class="form-control rounded-pill" type="search" placeholder="Search" aria-label="Search"
                               style="border-radius: 30px; height: 30px; font-size: 14px; padding-right: 35px;">
                        <button class="btn btn-outline-secondary rounded-pill position-absolute end-0 me-1 search-icon-btn d-flex align-items-center justify-content-center"
                                type="submit"
                                style="border-radius: 30px; height: 30px; background: transparent; border: none;">
                            <i class="fas fa-magnifying-glass icon"></i>
                        </button>
                    </div>
                </form>
                <a href="#" class="ms-3 text-dark placeholder-box"><i class="fas fa-heart icon"></i></a>
                <a href="#" class="ms-3 text-dark placeholder-box"><i class="fas fa-shopping-cart icon"></i></a>
            </div>
        </div>
    </div>
</nav>


<div class="container-fluid bg-white justify-content-between">

    <div class="container mt-4">
        <div class="row">
            <!-- Filter Panel (3 columns) -->
            <div class="col-md-3">
                <div class="p-3 border-end">
                    <h5>Filters</h5>

                    <!-- Clothing Type -->
                    <div class="mb-3">
                        <label class="form-label">Clothing Type</label><br>
                        <select class="form-select">
                            <option>T-Shirts</option>
                            <option>Shoes</option>
                            <option>Coats</option>
                            <option>Trousers</option>
                        </select>
                    </div>

                    <!-- Price Range with Two Handles -->
                    <div class="mb-3">
                        <label class="form-label">Price Range</label>
                        <div class="d-flex align-items-center">
                            <input type="range" class="form-range" min="0" max="500" step="10" id="priceMin">
                            <input type="range" class="form-range ms-2" min="0" max="500" step="10" id="priceMax">
                        </div>
                        <div class="d-flex justify-content-between">
                            <span id="minPriceLabel">$0</span>
                            <span id="maxPriceLabel">$500</span>
                        </div>
                    </div>

                    <!-- Style -->
                    <div class="mb-3">
                        <label class="form-label">Style</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="casual">
                            <label class="form-check-label" for="casual">Casual</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="formal">
                            <label class="form-check-label" for="formal">Formal</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cozy">
                            <label class="form-check-label" for="cozy">Cozy</label>
                        </div>
                    </div>

                    <!-- Color -->
                    <div class="mb-3">
                        <label class="form-label">Color</label><br>
                        <select class="form-select">
                            <option>Red</option>
                            <option>Blue</option>
                            <option>Green</option>
                            <option>Black</option>
                            <option>White</option>
                        </select>
                    </div>

                    <!-- Fabric Type -->
                    <div class="mb-3">
                        <label class="form-label">Fabric Type</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cotton">
                            <label class="form-check-label" for="cotton">Cotton</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="wool">
                            <label class="form-check-label" for="wool">Wool</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="polyester">
                            <label class="form-check-label" for="polyester">Polyester</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Grid (9 columns) -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="rectangle-wrapper">
                            <div class="rectangle-square bg-light position-relative">
                                <img src="../pictures/shoes.jpg"
                                     class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                     alt="Sample Image">
                                <button class="position-absolute bottom-0 end-0 m-3 btn btn-light">
                                    <i class="fa-regular fa-heart text-danger fs-3"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="product-name fs-4">Nike Shoes</span><br>
                            <span class="product-category text-muted fs-6">Sportswear</span><br>
                            <span class="product-price fs-4">$99.99</span>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="rectangle-wrapper">
                            <div class="rectangle-square bg-light position-relative">
                                <img src="../pictures/shoes.jpg"
                                     class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                     alt="Sample Image">
                                <button class="position-absolute bottom-0 end-0 m-3 btn btn-light">
                                    <i class="fa-regular fa-heart text-danger fs-3"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="product-name fs-4">Nike Shoes</span><br>
                            <span class="product-category text-muted fs-6">Sportswear</span><br>
                            <span class="product-price fs-4">$99.99</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="rectangle-wrapper">
                            <div class="rectangle-square bg-light position-relative">
                                <img src="../pictures/shoes.jpg"
                                     class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                     alt="Sample Image">
                                <button class="position-absolute bottom-0 end-0 m-3 btn btn-light">
                                    <i class="fa-regular fa-heart text-danger fs-3"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="product-name fs-4">Nike Shoes</span><br>
                            <span class="product-category text-muted fs-6">Sportswear</span><br>
                            <span class="product-price fs-4">$99.99</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="rectangle-wrapper">
                            <div class="rectangle-square bg-light position-relative">
                                <img src="../pictures/shoes.jpg"
                                     class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                     alt="Sample Image">
                                <button class="position-absolute bottom-0 end-0 m-3 btn btn-light">
                                    <i class="fa-regular fa-heart text-danger fs-3"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="product-name fs-4">Nike Shoes</span><br>
                            <span class="product-category text-muted fs-6">Sportswear</span><br>
                            <span class="product-price fs-4">$99.99</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="rectangle-wrapper">
                            <div class="rectangle-square bg-light position-relative">
                                <img src="../pictures/shoes.jpg"
                                     class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                     alt="Sample Image">
                                <button class="position-absolute bottom-0 end-0 m-3 btn btn-light">
                                    <i class="fa-regular fa-heart text-danger fs-3"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="product-name fs-4">Nike Shoes</span><br>
                            <span class="product-category text-muted fs-6">Sportswear</span><br>
                            <span class="product-price fs-4">$99.99</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="rectangle-wrapper">
                            <div class="rectangle-square bg-light position-relative">
                                <img src="../pictures/shoes.jpg"
                                     class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                     alt="Sample Image">
                                <button class="position-absolute bottom-0 end-0 m-3 btn btn-light">
                                    <i class="fa-regular fa-heart text-danger fs-3"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="product-name fs-4">Nike Shoes</span><br>
                            <span class="product-category text-muted fs-6">Sportswear</span><br>
                            <span class="product-price fs-4">$99.99</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>


<div class="bottom-bar text-light py-4">
    <div class="container d-flex justify-content-center">
        <a href="#" class="nav-link mx-3">About Us</a>
        <a href="#" class="nav-link mx-3">Contact</a>
        <a href="#" class="nav-link mx-3">Privacy Policy</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>