<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
    <link rel="icon" type="image/png" href="{{ asset('dataset_pics/album.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <style>
        .navbar {
            background-color: #D9D9D9;
        }

        .top-container {
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

        .rectangle-wrapper {
            flex: 1;
            min-width: 100px;
        }

        .search-icon-btn:hover .icon {
            color: gray;
        }

        .nav-tabs .nav-link {
            color: grey;
        }

        .nav-tabs .nav-link.active {
            color: black;
        }

    </style>
</head>
<body>
<!-- top navbar -->
<div class="container-fluid top-container py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="text-dark text-decoration-none fw-bold" href="{{ url('main_page') }}">FTW</a>
        @guest
            <div>
                <a class="text-dark text-decoration-none" href="{{ url('register') }}">Register</a>
                <span class="mx-2 text-dark">|</span>
                <div class="dropdown d-inline">
                    <a class="text-dark text-decoration-none dropdown-toggle" role="button" id="loginDropdown"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="loginDropdown"
                        style="min-width: 250px;">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <li>
                                <div class="mb-2">
                                    <label for="loginName" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                           id="loginName" name="email" placeholder="Enter your email"
                                           value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </li>
                            <li>
                                <div class="mb-2">
                                    <label for="loginPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                           id="loginPassword" name="password" placeholder="Enter your password">
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </li>
                            <li>
                                <button class="btn btn-secondary w-100">Confirm</button>
                            </li>
                        </form>
                    </ul>

                </div>
            </div>
        @endguest
        @auth
            <div>
                <a href="{{ route('account') }}" class="text-dark text-decoration-none">
                    {{ Auth::user()->firstname }}
                </a>
                <span class="mx-2 text-dark">|</span>
                <a class="text-dark text-decoration-none" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @endauth
    </div>
</div>
</div>

<!-- bottom navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a href="{{ url('/') }}" class="me-3 text-dark placeholder-box col-2">
            <i class="bi bi-vinyl-fill fs-2"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavbarMenu"
                aria-controls="NavbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="NavbarMenu">
            <ul class="navbar-nav mx-auto justify-content-center">
                <li class="nav-item">
                    <a class="nav-link m-2" href="{{ url('men') }}"
                       style="font-size: 1.5rem; font-weight: bold;">MEN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2" href="{{ url('women') }}"
                       style="font-size: 1.5rem; font-weight: bold;">WOMEN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2" href="{{ url('kids') }}"
                       style="font-size: 1.5rem; font-weight: bold;">KIDS</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <form method="GET" action="{{ route('items.index') }}">
                    <div class="input-group">
                        <input type="text" name="search"
                               class="form-control border-0 shadow-none"
                               placeholder="Search items..."
                               value="{{ request('search') }}">
                        <button class="btn border-0" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                <!--<a href="{{ url('liked') }}" class="ms-3 text-dark placeholder-box" style="hidden">
                    <i class="fas fa-heart icon"></i>
                </a>-->
                <a href="{{ url('shopping_cart') }}" class="ms-3 text-dark placeholder-box">
                    <i class="fas fa-shopping-cart icon"></i>
                </a>
            </div>
        </div>
    </div>
</nav>


<div class="container mt-5 mb-5">
    @foreach (['success', 'error', 'warning', 'info'] as $msg)
        @if(session()->has($msg))
            <div class="alert alert-{{ $msg == 'error'?'danger':$msg}}">
                {{ session()->get($msg) }}
            </div>
        @endif
    @endforeach
    <!-- Navbar with Tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link {{$activeTab == 'cart'? "active": ""}}" id="cart-tab" data-bs-toggle="tab" href="#cart"
               role="tab" aria-controls="cart" aria-selected="true">Shopping Cart</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link {{$activeTab == 'shipping'? "active": ""}}" id="shipping-tab" data-bs-toggle="tab"
               href="#shipping" role="tab" aria-controls="shipping" aria-selected="false">Shipping Information</a>
        </li>
    </ul>
</div>

<div class="tab-content" id="myTabContent">
    <!-- Shopping Cart Page -->
    <div class="tab-content" id="myTabContent">
        <!-- Shopping Cart Page -->
        <div class="tab-pane fade {{$activeTab == 'cart'? "show active": ""}}" id="cart" role="tabpanel"
             aria-labelledby="cart-tab">
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-8">
                        @if($cartItems->isEmpty())
                            <p>Your cart is empty.</p>
                        @else
                            @php
                                $totalPrice = 0;
                            @endphp
                            @error('quantity')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            @foreach ($cartItems as $cartItem)
                                <div class="row align-items-center mb-4 text-center text-md-start">
                                    <div class="col-12 col-md-4">
                                        <h6 class="mb-1">{{ $cartItem->item->item_name }} <small>({{ $cartItem->item->category->main_category }})</small></h6>
                                        <p class="mb-0">{{ $cartItem->size }}</p>
                                    </div>
                                    <div class="col-12 col-md-2 text-end mt-2 mt-md-0">
                                        <strong>{{ number_format($cartItem->item->price, 2) }} €</strong>
                                        @php
                                            $totalPrice += $cartItem->quantity*$cartItem->item->price;

                                        @endphp
                                    </div>
                                    <div class="col-12 col-md-3 text-center mt-2 mt-md-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <!-- Update Form -->
                                            <form action="{{ route('shopping_cart.update') }}" method="POST" class="d-flex align-items-center gap-2 mb-0">
                                                @csrf
                                                <input type="hidden" name="cart_item_id" value="{{ $cartItem->shopping_cart_id }}">

                                                <div class="input-group input-group-sm" style="max-width: 60px;">
                                                    <input type="number" class="form-control text-center" name="quantity"
                                                           value="{{ $cartItem->quantity }}" step="1">
                                                </div>

                                                <button type="submit" class="btn btn-primary px-2" title="Save">
                                                    <i class="fas fa-save"></i>
                                                </button>
                                            </form>

                                            <!-- Delete Form -->
                                            <form action="{{ route('shopping_cart.delete', $cartItem->item_id) }}" method="POST" class="mb-0">
                                                @csrf
                                                <input type="hidden" name="cart_item_id" value="{{ $cartItem->shopping_cart_id }}">
                                                <button type="submit" class="btn btn-danger px-2" title="Remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </div>

                            @endforeach
                    </div>
                    <div class="col-md-4">
                        <div class="border p-3">
                            <h5 class="mb-4">Summary</h5>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Subtotal</span>
                                <span>{{ number_format($totalPrice, 2) }} €</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Estimated Delivery</span>
                                <span>3.29 €</span>
                            </div>
                            <hr/>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Total</span>
                                <strong>{{ number_format($totalPrice + 3.29, 2) }} €</strong>
                            </div>
                            <a href="?tab=shipping" class="btn btn-success w-100">Proceed to Checkout</a>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>


    <!-- Shipping Information Page -->
    <div class="tab-pane fade {{$activeTab == 'shipping'? "show active": ""}}" id="shipping" role="tabpanel"
         aria-labelledby="shipping-tab">
        <div class="container my-5">
            <h3>Shipping Information</h3>
            <form method="post" action="{{route('shopping_cart.save')}}">
                @csrf
                <div class="row">
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" value="" name="phone_number">
                        @error('phone_number')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="row">
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label class="form-label">Street</label>
                        <input type="text" name="street" class="form-control">
                        @error('street')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 col-sm-12 col-md-6">
                        <label class="form-label">House Number</label>
                        <input type="text" name="house_number" class="form-control">
                        @error('house_number')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="city" class="form-control">
                        @error('city')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-12 col-md-6 mb-3">
                        <label class="form-label">ZIP Code</label>
                        <input type="text" name="zip" class="form-control">
                        @error('zip')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6 mb-3">
                        <label class="form-label">Country</label>
                        <input type="text" name="country" class="form-control">
                        @error('country')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 mb-3">
                        <label class="form-label d-block">Delivery Method</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="delivery_method" id="first_class"
                                   value="first_class" checked>
                            <label class="form-check-label" for="first_class">
                                First Class
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="delivery_method" id="second_class"
                                   value="second_class">
                            <label class="form-check-label" for="second_class">
                                Second Class
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-4">
                    <button class="btn btn-secondary me-3" type="submit" name="payment_method" value="card">Pay by
                        Card
                    </button>
                    <button class="btn btn-secondary ms-3" type="submit" name="payment_method" value="COD">Cash on
                        Delivery
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>


<!-- Suggested -->
<div class="container-fluid bg-white justify-content-between">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-12 text">
                    <h2 class="text-dark">Suggested</h2>
                </div>
                @foreach ($suggestedItems as $suggested)
                    <div class="col-sm-6 col-lg-3">
                        <div class="rectangle-wrapper">
                            <a href="{{ route('product_info', ['id' => $suggested->item_id]) }}"
                               class="text-decoration-none">
                                <div class="rectangle-square bg-light position-relative">
                                    @php
                                        $imageName = $suggested->images->first()?->image_name ?? 'default'
                                    @endphp
                                    <img src="{{ asset('dataset_pics/' . $imageName) }}"
                                         class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                         alt="{{ $suggested->item_name }}">
                                    <!--<button class="position-absolute bottom-0 end-0 m-3 btn btn-light">
                                        <i class="fa-regular fa-heart text-danger fs-3"></i>
                                    </button>-->
                                </div>
                            </a>
                        </div>
                        <div class="mt-2">
                            <span class="product-name fs-4">{{ $suggested->item_name }}</span><br>
                            <span class="product-category text-muted fs-6">({{$suggested->category->main_category }} - {{$suggested->category->secondary_category }})</span><br>
                            <span class="product-price fs-4">{{ number_format($suggested->price, 2) }} €</span>
                        </div>
                    </div>
                @endforeach
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
                            <h1 class="modal-title fs-5 " id="staticBackdropLabel" style="color: black;"></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h1>About Us</h1>
                            <p>
                                Welcome to <strong>FTW (Fair to Wear)</strong>, where fashion meets responsibility. We
                                believe that what you wear should not only reflect your personal style but also your
                                values. Our mission is to offer clothing that not only looks great but is made with
                                respect for people and the planet.
                            </p>
                            <p>
                                At FTW, we carefully select each garment with the environment in mind. Our clothing is
                                made from sustainable, eco-friendly materials, such as organic cotton, recycled fabrics,
                                and low-impact dyes. We work closely with manufacturers who share our commitment to
                                ethical labor practices, ensuring that every piece of clothing is made with care and
                                fairness at every stage of production.
                            </p>
                            We understand that fashion is about more than just trends—it’s about lasting style. That’s
                            why our collections are designed with versatility, durability, and timelessness in mind.
                            Whether you're dressing for a casual day out or a special occasion, FTW’s pieces are crafted
                            to fit seamlessly into your wardrobe, helping you look and feel your best, day after day.
                            </p>
                            <p>
                                As a company, we believe in transparency and integrity. We are committed to keeping our
                                customers informed about the journey behind each product, from the materials we use to
                                the people who create them. Our goal is to empower you to make informed choices about
                                your wardrobe, so you can feel proud of every purchase you make.
                            </p>
                            <p>
                                Join us in shaping a more sustainable future for fashion. At FTW, we’re not just about
                                looking good—we’re about feeling good too. Thank you for choosing us and supporting a
                                brand that values fairness, quality, and the planet. Together, we can make fashion
                                better for everyone.
                            </p>
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
            <div class="modal modal-md fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 " id="staticBackdrop2Label" style="color: black;">Contact</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <p>
                                <i class="fas fa-phone-alt"></i> +421 948 888 888
                            </p>
                            <p>
                                <i class="fas fa-at"></i> help@ftw.com.
                            </p>
                            <p>
                                <i class="fab fa-instagram"></i> @fair_to_wear
                            </p>
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
                                team at <a href="mailto:help@ftw.com">help@ftw.com</a>.</p>

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

</body>
</html>
