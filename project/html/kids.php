<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Section</title>
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

        .row > *{
            margin-bottom: 2%;
        }

        .rectangle-square {
            background-color: #ccc;
            padding: 100% 0 0;
        }

        .rectangle-wrapper{
            flex: 1;
            min-width: 100px;
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
                <a class="text-dark text-decoration-none dropdown-toggle" role="button" id="loginDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Login
                </a>
                <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="loginDropdown" style="min-width: 250px;">
                    <li>
                        <div class="mb-2">
                            <label for="loginName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="loginName" placeholder="Enter your name">
                        </div>
                    </li>
                    <li>
                        <div class="mb-2">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password">
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
        <a href="#" class="me-3 text-dark placeholder-box"> <i class="bi bi-vinyl-fill fs-2"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavbarMenu" aria-controls="NavbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="NavbarMenu">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link ms-4" href="#"
                                        style="font-size: 1.5rem; font-weight: bold;">MEN</a></li>
                <li class="nav-item"><a class="nav-link ms-4" href="#" style="font-size: 1.5rem; font-weight: bold;">WOMEN</a>
                </li>
                <li class="nav-item"><a class="nav-link ms-4" href="#" style="font-size: 1.5rem; font-weight: bold;">KIDS</a>
                </li>
            </ul>
            <a href="#" class="me-3 text-dark placeholder-box"><i class="fas fa-magnifying-glass"></i></a>
            <a href="#" class="me-3 text-dark placeholder-box"><i class="fas fa-heart"></i></a>
            <a href="#" class="me-3 text-dark placeholder-box"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
</nav>

<div class="container-fluid bg-white justify-content-between">
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="rectangle-wrapper">
                    <div class="rectangle-square bg-light position-relative">
                        <img src="../pictures/shoes.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Sample Image">
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
                        <img src="../pictures/shoes.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Sample Image">
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
                        <img src="../pictures/shoes.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Sample Image">
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
                        <img src="../pictures/shoes.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Sample Image">
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
                        <img src="../pictures/shoes.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Sample Image">
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
                        <img src="../pictures/shoes.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Sample Image">
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
                        <img src="../pictures/shoes.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Sample Image">
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
                        <img src="../pictures/shoes.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Sample Image">
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
                        <img src="../pictures/shoes.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Sample Image">
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
                        <img src="../pictures/shoes.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Sample Image">
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
                        <img src="../pictures/shoes.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Sample Image">
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
                        <img src="../pictures/shoes.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Sample Image">
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