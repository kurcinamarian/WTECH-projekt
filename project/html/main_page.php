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
    <div class="row"><div class="rectangle "></div></div>
</div>

<div class="container-fluid bg-white justify-content-between">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="rectangle-wrapper ">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="rectangle-wrapper ">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="rectangle-wrapper ">
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
                <div class="rectangle-wrapper">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper">
                    <div class="rectangle-square bg-light"></div>
                </div>
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
                <div class="rectangle-wrapper ">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper ">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper ">
                    <div class="rectangle-square bg-light"></div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper ">
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
                    <div class="rectangle-wrapper ">
                        <div class="rectangle-square bg-light"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="rectangle-wrapper ">
                        <div class="rectangle-square bg-light"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="rectangle-wrapper ">
                        <div class="rectangle-square bg-light"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="rectangle-wrapper ">
                        <div class="rectangle-square bg-light"></div>
                    </div>
                </div>
            </div>
        </div>
</div>

    <div class="bottom-bar text-light py-3 w-100 d-flex justify-content-between align-items-center">
        <a class="nav-link mx-3 mb-0" style="color: grey; font-size: 0.75rem;">©2025</a>
        <div class="container d-flex justify-content-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" style="background: none; color: black; border: none;">
                About Us
            </button>
            <div class="modal modal-lg fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 " id="staticBackdropLabel" style="color: black;">About Us</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" style="background: none; color: black; border: none;">
                Contact
            </button>
            <div class="modal modal-lg fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 " id="staticBackdrop2Label" style="color: black;">Contact</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3" style="background: none; color: black; border: none;">
                Privacy Policy
            </button>
            <div class="modal modal-lg fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop3Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div style="color: black">
                                <h1>Privacy Policy</h1>

                                <p>Last updated: March 26, 2025</p>

                                <p>Your privacy is important to us. This privacy policy document outlines the types of personal information that is received and collected by [Your Company Name] and how it is used.</p>

                                <h2>1. Information We Collect</h2>
                                <p>We collect various types of information in order to provide and improve our service to you. The types of information we may collect include:</p>
                                <ul>
                                    <li><strong>Personal Information:</strong> Name, email address, phone number, and other personal details that you provide when you register or contact us.</li>
                                    <li><strong>Usage Data:</strong> Information on how you use our website, such as your IP address, browser type, and usage patterns.</li>
                                    <li><strong>Cookies:</strong> We use cookies to enhance user experience, analyze traffic, and for marketing purposes.</li>
                                </ul>

                                <h2>2. How We Use Your Information</h2>
                                <p>We use the information we collect for the following purposes:</p>
                                <ul>
                                    <li>To provide, operate, and maintain our services</li>
                                    <li>To improve, personalize, and expand our services</li>
                                    <li>To communicate with you, including customer support and sending updates</li>
                                    <li>To monitor usage and prevent fraud</li>
                                </ul>

                                <h2>3. How We Share Your Information</h2>
                                <p>We may share your information in the following ways:</p>
                                <ul>
                                    <li><strong>With Service Providers:</strong> We may share your data with third-party vendors to perform functions related to our service (e.g., payment processing, customer support).</li>
                                    <li><strong>In Legal Matters:</strong> If required by law, we may share your information with authorities in response to legal processes, such as a subpoena or court order.</li>
                                </ul>

                                <h2>4. Data Security</h2>
                                <p>We take the security of your personal information seriously. We implement appropriate security measures to protect your data from unauthorized access, alteration, or destruction.</p>

                                <h2>5. Your Rights</h2>
                                <p>You have the right to:</p>
                                <ul>
                                    <li>Access your personal data and request a copy</li>
                                    <li>Request corrections to any inaccurate or incomplete information</li>
                                    <li>Request deletion of your personal data (subject to certain legal exceptions)</li>
                                    <li>Opt-out of marketing communications</li>
                                </ul>

                                <h2>6. Third-Party Links</h2>
                                <p>Our website may contain links to third-party websites. We are not responsible for the content or privacy practices of these external sites. Please review their privacy policies before providing any personal information.</p>

                                <h2>7. Changes to This Privacy Policy</h2>
                                <p>We may update this privacy policy from time to time. Any changes will be posted on this page with an updated "Last updated" date. We encourage you to review this policy periodically for any updates.</p>

                                <h2>8. Contact Us</h2>
                                <p>If you have any questions about this privacy policy or your personal information, please contact us at:</p>
                                <p><strong>Fair To Wear</strong><br>
                                    Email: questions@ftw.com<br>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
