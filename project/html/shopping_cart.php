<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Shopping Cart</title>
    <!-- Bootstrap CSS -->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
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
            padding: 100% 0 0;
        }

        .rectangle {
            padding: 47% 0 0;
        }

        .rectangle-wrapper {
            flex: 1;
            min-width: 100px;
        }

        .search-icon-btn:hover .icon {
            color: gray;
        }

    </style>
</head>
<body>
<!-- top navbar -->
<div class="container-fluid top-container py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="text-dark text-decoration-none fw-bold" href="#">FTW</a>
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
<!-- bottom navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a href="#" class="me-3 text-dark placeholder-box col-2"> <i class="bi bi-vinyl-fill fs-2"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavbarMenu"
                aria-controls="NavbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="NavbarMenu">
            <ul class="navbar-nav mx-auto justify-content-center">
                <li class="nav-item"><a class="nav-link m-2" href="#"
                                        style="font-size: 1.5rem; font-weight: bold;">MEN</a></li>
                <li class="nav-item"><a class="nav-link m-2" href="#" style="font-size: 1.5rem; font-weight: bold;">WOMEN</a>
                </li>
                <li class="nav-item"><a class="nav-link m-2" href="#"
                                        style="font-size: 1.5rem; font-weight: bold;">KIDS</a>
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


<div class="container mt-5 mb-5">
    <!-- Navbar with Tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="cart-tab" data-bs-toggle="tab" href="#cart" role="tab" aria-controls="cart" aria-selected="true">Shopping Cart</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="shipping-tab" data-bs-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="false">Shipping Information</a>
        </li>
    </ul>
</div>

<div class="tab-content" id="myTabContent">
    <!-- Shopping Cart Page -->
    <div class="tab-pane fade show active" id="cart" role="tabpanel" aria-labelledby="cart-tab">
        <div class="container my-5">
            <div class="row">
                <!-- Left Column: Cart Items -->
                <div class="col-md-8">
                    <div class="row align-items-center mb-4">
                        <div class="col-3">
                            <img src="../pictures/P-I1.jpg" alt="Item 1" class="img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="col-4">
                            <h6 class="mb-1">Long cross-over trench coat <small>(Women's Coat)</small></h6>
                            <p class="mb-0">M</p>
                        </div>
                        <div class="col-2 text-end">
                            <strong>99.99 €</strong>
                        </div>
                        <div class="col-2 text-center">
                            <div class="input-group input-group-sm">
                                <button class="btn btn-outline-secondary" type="button">-</button>
                                <input type="text" class="form-control text-center" value="1" style="max-width: 40px;">
                                <button class="btn btn-outline-secondary" type="button">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center mb-4">
                        <div class="col-3">
                            <img src="../pictures/S-I2.jpg" alt="Item 2" class="img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="col-4">
                            <h6 class="mb-1">Artisan Patchwork Cap <small>(Men's Hat)</small></h6>
                            <p class="mb-0">one-size</p>
                        </div>
                        <div class="col-2 text-end">
                            <strong>15.99 €</strong>
                        </div>
                        <div class="col-2 text-center">
                            <div class="input-group input-group-sm">
                                <button class="btn btn-outline-secondary" type="button">-</button>
                                <input type="text" class="form-control text-center" value="1" style="max-width: 40px;">
                                <button class="btn btn-outline-secondary" type="button">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center mb-4">
                        <div class="col-3">
                            <img src="../pictures/pexels-urfriendlyphotog-277861001.jpg" alt="Item 3" class="img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="col-4">
                            <h6 class="mb-1">Hamilton denim jacket <small>(Women's Jacket)</small></h6>
                            <p class="mb-0">S</p>
                        </div>
                        <div class="col-2 text-end">
                            <strong>45.99 €</strong>
                        </div>
                        <div class="col-2 text-center">
                            <div class="input-group input-group-sm">
                                <button class="btn btn-outline-secondary" type="button">-</button>
                                <input type="text" class="form-control text-center" value="1" style="max-width: 40px;">
                                <button class="btn btn-outline-secondary" type="button">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Summary -->
                <div class="col-md-4">
                    <div class="border p-3">
                        <h5 class="mb-4">Summary</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal</span>
                            <span>161.97 €</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Estimated Delivery</span>
                            <span>3.29 €</span>
                        </div>
                        <hr/>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Total</span>
                            <strong>165.26 €</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shipping Information Page -->
    <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
        <div class="container my-5">
            <h3>Shipping Information</h3>
            <form>
                <div class="form-group">
                    <label for="address">Shipping Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter your shipping address">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter your city">
                </div>
                <div class="form-group">
                    <label for="zipcode">Zip Code</label>
                    <input type="text" class="form-control" id="zipcode" placeholder="Enter zip code">
                </div>
            </form>
            <div class="d-flex mt-4">
                <a class="btn btn-secondary me-3" data-bs-toggle="tab" href="#payment" role="tab" aria-controls="payment">Pay by Card</a>
                <a class="btn btn-secondary ms-3" data-bs-toggle="tab" href="#payment" role="tab" aria-controls="payment">Pay When Delivered</a>
            </div>
        </div>
    </div>

</div>



<!-- Suggested -->
<div class="container-fluid bg-white justify-content-between">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-dark">Suggested</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper ">
                    <div class="rectangle-square bg-light position-relative">
                        <img src="../pictures/S-I1.jpg"
                             class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Suggested">
                    </div>
                </div>
                <div class="mt-2">
                    <span class="product-name fs-4">Urban Ease Sweatshirt</span><br>
                    <span class="product-category text-muted fs-6">(Women's T-shirt)</span><br>
                    <span class="product-price fs-4">19.99 €</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper ">
                    <div class="rectangle-square bg-light position-relative">
                        <img src="../pictures/S-I2.jpg"
                             class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Suggested">
                    </div>
                </div>
                <div class="mt-2">
                    <span class="product-name fs-4">Artisan Patchwork Cap</span><br>
                    <span class="product-category text-muted fs-6">(Men's Hat)</span><br>
                    <span class="product-price fs-4">15.99 €</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper ">
                    <div class="rectangle-square bg-light position-relative">
                        <img src="../pictures/S-I3.jpg"
                             class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Suggested">
                    </div>
                </div>
                <div class="mt-2">
                    <span class="product-name fs-4">Flowing Linen Shirt</span><br>
                    <span class="product-category text-muted fs-6">(Women's Tops)</span><br>
                    <span class="product-price fs-4">23.99 €</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="rectangle-wrapper ">
                    <div class="rectangle-square bg-light position-relative">
                        <img src="../pictures/S-I4.jpg"
                             class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Suggested">
                    </div>
                </div>
                <div class="mt-2">
                    <span class="product-name fs-4">Arctic Denim Puffer</span><br>
                    <span class="product-category text-muted fs-6">(Women's Outerwear)</span><br>
                    <span class="product-price fs-4">49.99 €</span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bottom bar -->
<div class="container-fluid bg-light">
    <div class="container py-3 d-flex justify-content-between align-items-center">
        <span style="color: grey; font-size: 0.75rem;">©2025</span>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"
                    style="background: none; color: black; border: none;">
                About Us
            </button>
            <div class="modal modal-lg fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"
                    style="background: none; color: black; border: none;">
                Contact
            </button>
            <div class="modal modal-lg fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
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

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3"
                    style="background: none; color: black; border: none;">
                Return Policy
            </button>
            <div class="modal modal-lg fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdrop3Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h1>Return Policy</h1>
                            <p>We want you to be completely satisfied with your purchase. If you are not happy with your
                                order, you may return it under the following conditions:</p>

                            <h2>Return Eligibility</h2>
                            <p>To be eligible for a return, the following conditions must be met:</p>
                            <ul>
                                <li>The item must be in its original condition, unworn, and unused.</li>
                                <li>All tags and packaging must be intact.</li>
                                <li>The return request must be made within 30 days of the purchase date.</li>
                                <li>Items marked as final sale or clearance cannot be returned.</li>
                            </ul>

                            <h2>Return Process</h2>
                            <p>To initiate a return, follow these steps:</p>
                            <ol>
                                <li>Contact our support team at <a href="mailto:returns@ftw.com">returns@ftw.com</a>
                                    with your order number and reason for return.
                                </li>
                                <li>We will provide a return authorization and shipping instructions.</li>
                                <li>Ship the item back to us using a trackable shipping service.</li>
                                <li>Once we receive the return, we will inspect the item and process your refund or
                                    exchange within 7-10 business days.
                                </li>
                            </ol>

                            <h2>Refunds</h2>
                            <p>Refunds will be issued to the original payment method. Please note that shipping costs
                                are non-refundable.</p>

                            <h2>Exchanges</h2>
                            <p>If you wish to exchange an item for a different size or color, please indicate this in
                                your return request.</p>

                            <h2>Return Shipping Costs</h2>
                            <p>The customer is responsible for return shipping costs unless the item was received
                                damaged or incorrect.</p>

                            <h2>Damaged or Incorrect Items</h2>
                            <p>If you received a defective or incorrect item, please contact us immediately so we can
                                resolve the issue at no cost to you.</p>

                            <h2>Non-Returnable Items</h2>
                            <p>The following items cannot be returned:</p>
                            <ul>
                                <li>Gift cards</li>
                                <li>Intimate apparel (e.g., underwear, swimwear)</li>
                                <li>Personalized or custom-made items</li>
                            </ul>

                            <h2>Contact Us</h2>
                            <p>For any questions regarding returns, please contact our support team at <a
                                        href="mailto:help@ftw.com">help@ftw.com</a>.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop4"
                    style="background: none; color: black; border: none;">
                Shipping Policy
            </button>
            <div class="modal modal-lg fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdrop4Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h1>Shipping Policy</h1>
                            <p>Welcome to our store! We are committed to delivering high-quality accessories, clothing,
                                and shoes directly to your doorstep. Please review our shipping policy below.</p>

                            <h2>Processing Time</h2>
                            <p>All orders are processed within 2-4 business days. Orders are not processed or shipped on
                                weekends or holidays.</p>

                            <h2>Shipping Methods & Delivery Times</h2>
                            <p>We offer the following shipping options:</p>
                            <ul>
                                <li><strong>Standard Shipping</strong> (5-10 business days)</li>
                                <li><strong>Express Shipping</strong> (2-5 business days)</li>
                                <li><strong>Overnight Shipping</strong> (1-2 business days)</li>
                            </ul>

                            <h2>Shipping Rates</h2>
                            <p>Shipping charges are calculated at checkout based on your location and the shipping
                                method selected.</p>

                            <h2>International Shipping</h2>
                            <p>We ship worldwide! International shipping may take 10-20 business days depending on the
                                destination and customs processing. Customers are responsible for any customs fees or
                                taxes.</p>

                            <h2>Order Tracking</h2>
                            <p>Once your order has shipped, you will receive a tracking number via email. Please allow
                                24 hours for the tracking information to update.</p>

                            <h2>Lost or Stolen Packages</h2>
                            <p>We are not responsible for lost or stolen packages once they have been marked as
                                delivered by the carrier. If you experience an issue, please contact the shipping
                                carrier directly.</p>

                            <h2>Address Changes</h2>
                            <p>If you need to update your shipping address, please contact us immediately. Address
                                changes cannot be made once the order has shipped.</p>

                            <h2>Returns Due to Incorrect Address</h2>
                            <p>If an order is returned to us due to an incorrect address, the customer is responsible
                                for additional shipping charges to resend the package.</p>

                            <h2>Delayed Shipments</h2>
                            <p>Occasionally, shipments may be delayed due to unforeseen circumstances such as weather
                                conditions or customs processing. We appreciate your patience in such cases.</p>

                            <h2>Contact Us</h2>
                            <p>If you have any questions about our shipping policy, feel free to contact our support
                                team at <a href="mailto:helpt@ftw.com">helpt@ftw.com</a>.</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop5"
                    style="background: none; color: black; border: none;">
                Privacy Policy
            </button>
            <div class="modal modal-lg fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdrop5Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div style="color: black">
                                <h1>Privacy Policy</h1>

                                <p>Last updated: March 26, 2025</p>

                                <p>Your privacy is important to us. This privacy policy document outlines the types of
                                    personal information that is received and collected by [Your Company Name] and how
                                    it is used.</p>

                                <h2>1. Information We Collect</h2>
                                <p>We collect various types of information in order to provide and improve our service
                                    to you. The types of information we may collect include:</p>
                                <ul>
                                    <li><strong>Personal Information:</strong> Name, email address, phone number, and
                                        other personal details that you provide when you register or contact us.
                                    </li>
                                    <li><strong>Usage Data:</strong> Information on how you use our website, such as
                                        your IP address, browser type, and usage patterns.
                                    </li>
                                    <li><strong>Cookies:</strong> We use cookies to enhance user experience, analyze
                                        traffic, and for marketing purposes.
                                    </li>
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
                                    <li><strong>With Service Providers:</strong> We may share your data with third-party
                                        vendors to perform functions related to our service (e.g., payment processing,
                                        customer support).
                                    </li>
                                    <li><strong>In Legal Matters:</strong> If required by law, we may share your
                                        information with authorities in response to legal processes, such as a subpoena
                                        or court order.
                                    </li>
                                </ul>

                                <h2>4. Data Security</h2>
                                <p>We take the security of your personal information seriously. We implement appropriate
                                    security measures to protect your data from unauthorized access, alteration, or
                                    destruction.</p>

                                <h2>5. Your Rights</h2>
                                <p>You have the right to:</p>
                                <ul>
                                    <li>Access your personal data and request a copy</li>
                                    <li>Request corrections to any inaccurate or incomplete information</li>
                                    <li>Request deletion of your personal data (subject to certain legal exceptions)
                                    </li>
                                    <li>Opt-out of marketing communications</li>
                                </ul>

                                <h2>6. Third-Party Links</h2>
                                <p>Our website may contain links to third-party websites. We are not responsible for the
                                    content or privacy practices of these external sites. Please review their privacy
                                    policies before providing any personal information.</p>

                                <h2>7. Changes to This Privacy Policy</h2>
                                <p>We may update this privacy policy from time to time. Any changes will be posted on
                                    this page with an updated "Last updated" date. We encourage you to review this
                                    policy periodically for any updates.</p>

                                <h2>8. Contact Us</h2>
                                <p>If you have any questions about this privacy policy or your personal information,
                                    please contact us at:</p>
                                <p><strong>Fair To Wear</strong><br>
                                    Email: <a href="mailto:help@ftw.com">help@ftw.com</a><br>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span style="color: grey; font-size: 0.75rem;">FTW</span>
    </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
