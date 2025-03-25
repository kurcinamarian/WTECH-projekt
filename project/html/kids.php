<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
    </style>


</head>
<body>

<!-- top bar -->
<div class="container-fluid top-container py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="text-dark text-decoration-none fw-bold" href="#">FTW</a>
        <div>
            <a class="text-dark text-decoration-none" href="#">Register</a>
            <span class="mx-2 text-dark">|</span>

            <!-- Dropdown pre Login -->
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
                        <button class="btn btn-primary w-100">Confirm</button>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#"><span style="font-size: 2rem;">&#9917;</span> </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link ms-4" href="#" style="font-size: 1.5rem; font-weight: bold;">MEN</a></li>
                <li class="nav-item"><a class="nav-link ms-4" href="#" style="font-size: 1.5rem; font-weight: bold;">WOMEN</a></li>
                <li class="nav-item"><a class="nav-link ms-4" href="#" style="font-size: 1.5rem; font-weight: bold;">KIDS</a></li>
            </ul>
            <a href="#" class="me-3 text-dark placeholder-box"><i class="fas fa-magnifying-glass"></i></a>
            <a href="#" class="me-3 text-dark placeholder-box"><i class="fas fa-heart"></i></a>
            <a href="#" class="me-3 text-dark placeholder-box"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
</nav>




<!-- products-->

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4 lg-3">
            <div class="card text-center">
                <img src="../pictures/shoes.jpg" class="card-img-top" alt="Obrázok produktu">
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <p class="card-text text-muted">Product Price</p>
                    <button class="btn btn-primary">Add to cart</button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 lg-3">
            <div class="card text-center">
                <img src="../pictures/shoes.jpg" class="card-img-top" alt="Obrázok produktu">
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <p class="card-text text-muted">Product Price</p>
                    <button class="btn btn-primary">Add to cart</button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 lg-3">
            <div class="card text-center">
                <img src="../pictures/shoes.jpg" class="card-img-top" alt="Obrázok produktu">
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <p class="card-text text-muted">Product Price</p>
                    <button class="btn btn-primary">Add to cart</button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 lg-3">
            <div class="card text-center">
                <img src="../pictures/shoes.jpg" class="card-img-top" alt="Obrázok produktu">
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <p class="card-text text-muted">Product Price</p>
                    <button class="btn btn-primary">Add to cart</button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 lg-3">
            <div class="card text-center">
                <img src="../pictures/shoes.jpg" class="card-img-top" alt="Obrázok produktu">
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <p class="card-text text-muted">Product Price</p>
                    <button class="btn btn-primary">Add to cart</button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 lg-3">
            <div class="card text-center">
                <img src="../pictures/shoes.jpg" class="card-img-top" alt="Obrázok produktu">
                <div class="card-body">
                    <h5 class="card-title">Product name</h5>
                    <p class="card-text text-muted">Product Price</p>
                    <button class="btn btn-primary">Add to cart</button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- bottom-bar-->
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