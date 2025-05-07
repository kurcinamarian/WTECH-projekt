<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fair to wear</title>
    <link rel="icon" type="image/png" href="{{ asset('pictures/album.png') }}">
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


        .row > * {
            margin-bottom: 2%;
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
                            <i class="fas fa-search"></i> {{-- or use <i class="bi bi-search"></i> --}}
                        </button>
                    </div>
                </form>
                <a href="{{ url('liked') }}" class="ms-3 text-dark placeholder-box" style="hidden">
                    <i class="fas fa-heart icon"></i>
                </a>
                <a href="{{ url('shopping_cart') }}" class="ms-3 text-dark placeholder-box">
                    <i class="fas fa-shopping-cart icon"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- Admin menu -->
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addItemModal">Add Item</button>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Add Category</button>
    </div>
    <div class="container">
        @foreach($items as $item)
            <div class="list-group mb-4">
                <div class="list-group-item">
                    <div class="d-flex justify-content-between align-items-start p-3 border rounded mb-3">
                        <!-- LEFT: Item Info -->
                        <div>
                            <h5>{{ $item->item_name }}</h5>
                            <p class="mb-1">#{{ $item->item_id }}</p>
                            <p class="mb-1">Price: {{ number_format($item->price, 2) }} €</p>
                            <p class="mb-1">Category:
                                {{ $item->category->main_category ?? 'Unknown' }} >
                                {{ $item->category->secondary_category ?? 'Unknown' }}
                            </p>
                        </div>


                        <!-- RIGHT: Images + Delete Button -->
                        <div class="d-flex flex-column align-items-end gap-2">
                            <div class="d-flex gap-2 mt-2">
                                <button class="btn btn-sm btn-secondary" data-bs-toggle="collapse"
                                        data-bs-target="#collapseItem{{ $item->item_id }}">Edit Item
                                </button>
                                <form action="{{ route('admin.items.destroy', $item->item_id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm mt-2" title="Delete Item">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="d-flex gap-2">
                                @php
                                    $imageName = $image?->image_name ?? 'default.jpg';
                                    $imageName2 = $image?->image_name_2 ?? 'default.jpg';
                                @endphp
                                <img src="{{ asset('dataset_pics/' . $imageName) }}" class="rounded border"
                                     style="width: 100px; height: 100px; object-fit: cover;">
                                <img src="{{ asset('dataset_pics/' . $imageName2) }}" class="rounded border"
                                     style="width: 100px; height: 100px; object-fit: cover;">
                            </div>


                        </div>
                    </div>
                    <div class="collapse mt-3" id="collapseItem{{ $item->item_id }}">
                        <form method="POST" action="{{ route('admin.items.update', $item->item_id) }}"
                              enctype="multipart/form-data" class="border p-3">
                            @csrf @method('PUT')
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">Item Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $item->name }}">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Main Category</label>
                                    <select name="big_category" class="form-select">
                                        <option value="MEN" {{ $item->big_category === 'MEN' ? 'selected' : '' }}>MEN
                                        </option>
                                        <option value="WOMEN" {{ $item->big_category === 'WOMEN' ? 'selected' : '' }}>
                                            WOMEN
                                        </option>
                                        <option value="KIDS" {{ $item->big_category === 'KIDS' ? 'selected' : '' }}>
                                            KIDS
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Subcategory</label>
                                    <select name="category_id" class="form-select">
                                        @foreach($categories as $main => $group)
                                            <optgroup label="{{ $main }}">
                                                @foreach($group as $category)
                                                    <option
                                                        value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>
                                                        {{ $category->secondary_category }}
                                                    </option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Price (€)</label>
                                    <input type="number" step="0.01" name="price" class="form-control"
                                           value="{{ $item->price }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control"
                                              rows="3">{{ $item->description }}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Parameters</label>
                                    <textarea name="parameters" class="form-control"
                                              rows="3">{{ $item->parameters }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Style</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="style[]"
                                               value="1" {{ $item->style_flags & 0b001 ? 'checked' : '' }}> Casual
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="style[]"
                                               value="2" {{ $item->style_flags & 0b010 ? 'checked' : '' }}> Formal
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="style[]"
                                               value="4" {{ $item->style_flags & 0b100 ? 'checked' : '' }}> Cozy
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Fabric</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fabric[]"
                                               value="1" {{ $item->fabric_flags & 0b001 ? 'checked' : '' }}> Cotton
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fabric[]"
                                               value="2" {{ $item->fabric_flags & 0b010 ? 'checked' : '' }}> Wool
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fabric[]"
                                               value="4" {{ $item->fabric_flags & 0b100 ? 'checked' : '' }}> Polyester
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Color</label>
                                    <select name="color" class="form-select">
                                        <option value="Red" {{ $item->color == 'Red' ? 'selected' : '' }}>Red</option>
                                        <option value="Blue" {{ $item->color == 'Blue' ? 'selected' : '' }}>Blue
                                        </option>
                                        <option value="Green" {{ $item->color == 'Green' ? 'selected' : '' }}>Green
                                        </option>
                                        <option value="Black" {{ $item->color == 'Black' ? 'selected' : '' }}>Black
                                        </option>
                                        <option value="White" {{ $item->color == 'White' ? 'selected' : '' }}>White
                                        </option>
                                        <option value="Other" {{ $item->color == 'Other' ? 'selected' : '' }}>Other
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="container">
                                <h2>Edit Images for Item: {{ $item->item_name }}</h2>

                                {{-- Upload Images Form --}}
                                <form action="{{ route('admin.items.updateImages', $item->item_id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label">Upload Images</label>
                                        <input type="file" name="images[]" class="form-control mb-2" multiple>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </form>

                                <hr>

                                {{-- Existing Images with Delete Icons --}}
                                <h4>Existing Images</h4>
                                <div class="d-flex flex-wrap gap-3">
                                    @foreach ($item->image as $image)
                                        <div class="position-relative">
                                            @php
                                                $imageName = $image?->image_name ?? 'default.jpg';
                                            @endphp
                                            <img src="{{ asset('dataset_pics/' . $imageName) }}"
                                                 class="img-thumbnail"
                                                 style="width: 100px; height: 100px; object-fit: cover;">

                                            {{-- Delete Icon --}}
                                            <form action="{{ route('admin.images.destroy', $image->image_id) }}" method="POST"
                                                  class="position-absolute top-0 end-0 m-1">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Delete Image"
                                                        onclick="return confirm('Delete this image?')">
                                                    <i class="bi bi-x-circle"></i>
                                                </button>
                                            </form>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-success">Save Changes</button>
                                <button type="button" class="btn btn-secondary" data-bs-toggle="collapse"
                                        data-bs-target="#collapseItem{{ $item->id }}">Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addItemModalLabel">Add New Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="newItemName" class="form-label">Item Name</label>
                                <input type="text" class="form-control" id="newItemName"
                                       placeholder="Enter item name">
                            </div>
                            <div class="col-md-6">
                                <label for="newItemPrice" class="form-label">Price</label>
                                <input type="number" class="form-control" id="newItemPrice"
                                       placeholder="Enter price">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="newItemDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="newItemDescription" rows="3"
                                          placeholder="Enter description"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="newItemParameters" class="form-label">Parameters</label>
                                <textarea class="form-control" id="newItemParameters" rows="3"
                                          placeholder="Enter parameters"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="categoryId" class="form-label">Category</label>
                                <select class="form-select" id="categoryIdadd">
                                    <optgroup label="Shoes">
                                        <option value="1">Sneakers</option>
                                        <option value="1.1">Boots</option>
                                        <option value="1.2">Sports shoes</option>
                                        <option value="1.3">Open shoes</option>
                                        <option value="1.4">Exclusive</option>
                                    </optgroup>
                                    <optgroup label="Shirts">
                                        <option value="2">Long sleeved</option>
                                        <option value="2.1">Short sleeved</option>
                                        <option value="2.2">Tank tops</option>
                                        <option value="2.3">Polo shirts</option>
                                        <option value="2.4">Sport</option>
                                    </optgroup>
                                    <optgroup label="Panths">
                                        <option value="3">Jeans</option>
                                        <option value="3.1">Shorts</option>
                                        <option value="3.2">Cargo panths</option>
                                        <option value="3.3">Tracksuit panths</option>
                                        <option value="3.3">Fabric panths</option>
                                    </optgroup>
                                    <option selected value="4">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="categoryId" class="form-label">Category</label>
                                <select class="form-select" id="bigcategoryIdadd">
                                    <option value="1">MEN</option>
                                    <option value="2">WOMEN</option>
                                    <option value="3">KIDS</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Style</label>
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

                        <div class="mb-3">
                            <label class="form-label">Color</label>
                            <select class="form-select">
                                <option>Red</option>
                                <option>Blue</option>
                                <option>Green</option>
                                <option>Black</option>
                                <option>White</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Fabric Type</label>
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
                        <div class="col-12 mb-3">
                            <label for="newItemImages" class="form-label">Images</label>
                            <input type="file" class="form-control" id="newItemImages" accept="image/*" multiple>
                        </div>

                        <button type="submit" class="btn btn-secondary">Add Item</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="categoryName"
                                   placeholder="Enter category name">
                        </div>
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Subcategory Name</label>
                            <input type="text" class="form-control" id="subcategoryName"
                                   placeholder="Enter subcategory name">
                        </div>
                        <button type="submit" class="btn btn-secondary">Add Category</button>
                    </form>

                    <h5 class="mt-4">Existing Categories</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Shoes - Sneakers</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Shoes - Boots</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Shoes - Sports shoes</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Shoes - Open shoes</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Shoes - Exclusive</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Shirts - Long sleeved</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Shirts - Short sleeved</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Shirts - Tank tops</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Shirts - Polo shirts</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Shirts - Sport</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Pants - Jeans</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Pants - Shorts</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Pants - Cargo pants</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Pants - Tracksuit pants</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Pants - Fabric pants</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div><strong>Other</strong></div>
                            <button class="btn btn-danger btn-sm" title="Delete Category">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                    </ul>
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
                            <h1 class="modal-title fs-5 " id="staticBackdropLabel" style="color: black;"></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h1>About Us</h1>
                            <p>
                                Welcome to <strong>FTW (Fair to Wear)</strong>, where fashion meets responsibility.
                                We believe that what you wear should not only reflect your personal style but also
                                your values. Our mission is to offer clothing that not only looks great but is made
                                with respect for people and the planet.
                            </p>
                            <p>
                                At FTW, we carefully select each garment with the environment in mind. Our clothing
                                is made from sustainable, eco-friendly materials, such as organic cotton, recycled
                                fabrics, and low-impact dyes. We work closely with manufacturers who share our
                                commitment to ethical labor practices, ensuring that every piece of clothing is made
                                with care and fairness at every stage of itemion.
                            </p>
                            We understand that fashion is about more than just trends—it’s about lasting style.
                            That’s why our collections are designed with versatility, durability, and timelessness
                            in mind. Whether you're dressing for a casual day out or a special occasion, FTW’s
                            pieces are crafted to fit seamlessly into your wardrobe, helping you look and feel your
                            best, day after day.
                            </p>
                            <p>
                                As a company, we believe in transparency and integrity. We are committed to keeping
                                our customers informed about the journey behind each item, from the materials we
                                use to the people who create them. Our goal is to empower you to make informed
                                choices about your wardrobe, so you can feel proud of every purchase you make.
                            </p>
                            <p>
                                Join us in shaping a more sustainable future for fashion. At FTW, we’re not just
                                about looking good—we’re about feeling good too. Thank you for choosing us and
                                supporting a brand that values fairness, quality, and the planet. Together, we can
                                make fashion better for everyone.
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
                            <h1 class="modal-title fs-5 " id="staticBackdrop2Label" style="color: black;">
                                Contact</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h1>Return Policy</h1>
                            <p>We want you to be completely satisfied with your purchase. If you are not happy with
                                your
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
                            <p>Refunds will be issued to the original payment method. Please note that shipping
                                costs
                                are non-refundable.</p>

                            <h2>Exchanges</h2>
                            <p>If you wish to exchange an item for a different size or color, please indicate this
                                in
                                your return request.</p>

                            <h2>Return Shipping Costs</h2>
                            <p>The customer is responsible for return shipping costs unless the item was received
                                damaged or incorrect.</p>

                            <h2>Damaged or Incorrect Items</h2>
                            <p>If you received a defective or incorrect item, please contact us immediately so we
                                can
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h1>Shipping Policy</h1>
                            <p>Welcome to our store! We are committed to delivering high-quality accessories,
                                clothing,
                                and shoes directly to your doorstep. Please review our shipping policy below.</p>

                            <h2>Processing Time</h2>
                            <p>All orders are processed within 2-4 business days. Orders are not processed or
                                shipped on
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
                            <p>We ship worldwide! International shipping may take 10-20 business days depending on
                                the
                                destination and customs processing. Customers are responsible for any customs fees
                                or
                                taxes.</p>

                            <h2>Order Tracking</h2>
                            <p>Once your order has shipped, you will receive a tracking number via email. Please
                                allow
                                24 hours for the tracking information to update.</p>

                            <h2>Lost or Stolen Packages</h2>
                            <p>We are not responsible for lost or stolen packages once they have been marked as
                                delivered by the carrier. If you experience an issue, please contact the shipping
                                carrier directly.</p>

                            <h2>Address Changes</h2>
                            <p>If you need to update your shipping address, please contact us immediately. Address
                                changes cannot be made once the order has shipped.</p>

                            <h2>Returns Due to Incorrect Address</h2>
                            <p>If an order is returned to us due to an incorrect address, the customer is
                                responsible
                                for additional shipping charges to resend the package.</p>

                            <h2>Delayed Shipments</h2>
                            <p>Occasionally, shipments may be delayed due to unforeseen circumstances such as
                                weather
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div style="color: black">
                                <h1>Privacy Policy</h1>

                                <p>Last updated: March 26, 2025</p>

                                <p>Your privacy is important to us. This privacy policy document outlines the types
                                    of
                                    personal information that is received and collected by [Your Company Name] and
                                    how
                                    it is used.</p>

                                <h2>1. Information We Collect</h2>
                                <p>We collect various types of information in order to provide and improve our
                                    service
                                    to you. The types of information we may collect include:</p>
                                <ul>
                                    <li><strong>Personal Information:</strong> Name, email address, phone number,
                                        and
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
                                    <li><strong>With Service Providers:</strong> We may share your data with
                                        third-party
                                        vendors to perform functions related to our service (e.g., payment
                                        processing,
                                        customer support).
                                    </li>
                                    <li><strong>In Legal Matters:</strong> If required by law, we may share your
                                        information with authorities in response to legal processes, such as a
                                        subpoena
                                        or court order.
                                    </li>
                                </ul>

                                <h2>4. Data Security</h2>
                                <p>We take the security of your personal information seriously. We implement
                                    appropriate
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
                                <p>Our website may contain links to third-party websites. We are not responsible for
                                    the
                                    content or privacy practices of these external sites. Please review their
                                    privacy
                                    policies before providing any personal information.</p>

                                <h2>7. Changes to This Privacy Policy</h2>
                                <p>We may update this privacy policy from time to time. Any changes will be posted
                                    on
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
