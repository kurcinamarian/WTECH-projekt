<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

        .rectangle {
            background-color: #ccc;
            padding: 49% 0 0;
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
        <a class="text-dark text-decoration-none fw-bold" href="#">FTW</a>
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

<div class="container-fluid bg-white">
    <div class="row"><div class="rectangle bg-purple"></div></div>
</div>

<div class="container-fluid bg-white justify-content-between">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="rectangle-wrapper bg-purple">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="rectangle-wrapper bg-purple">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="rectangle-wrapper bg-purple">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-white justify-content-between">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper bg-purple">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper bg-purple">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper bg-purple">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper bg-purple">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid bg-white justify-content-between">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="rectangle-square bg-light"></div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row"><div class="col-12"><div class="rectangle bg-light"></div></div></div>
                <div class="row"><div class="col-12"><div class="rectangle bg-light"></div></div></div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-white justify-content-between">
    <div class="container">
        <div class="row">
            <div class="col-12 text">
                <h2 class="text-dark">NEW</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper bg-purple">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper bg-purple">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper bg-purple">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper bg-purple">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white justify-content-between">
        <div class="container">
            <div class="row">
                <div class="col-12 text">
                    <h2 class="text-dark">Sugested</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="rectangle-wrapper bg-purple">
                        <div class="rectangle-square bg-light"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="rectangle-wrapper bg-purple">
                        <div class="rectangle-square bg-light"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="rectangle-wrapper bg-purple">
                        <div class="rectangle-square bg-light"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="rectangle-wrapper bg-purple">
                        <div class="rectangle-square bg-light"></div>
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
</body>
</html>
