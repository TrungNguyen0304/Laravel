<!-- <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('image/images/logo.png') }}" width="125px" alt="Logo"></a>
            </div>
            <nav>
                <ul id="menuItems">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/products') }}">Product</a></li>
                    <li><a href="">Categories</a>
                        <ul>
                            @foreach($categoryList as $category)
                            <li><a href="{{ route('categories.showById', $category->id) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>

                    <li>
                        <form action="{{ route('search.search') }}" method="GET">
                            <input class="search" type="text" name="search" placeholder="Search...">
                            <button class="b1" type="submit">Search</button>
                        </form>

                    </li>

                    <li class="cart">
                        <a href="{{ route('cart.index') }}" class="cart-link">
                            <img src="{{ asset('image/icons/cart.png') }}" alt="Cart" class="cart-icon">
                        </a>
                    </li>
                    <li>
                        <a href="search.html" class="admin-link">
                            <img src="{{ asset('image/icons/admin.png') }}" alt="Admin" class="admin-icon">

                        </a>
                    </li>

                </ul>

            </nav>
            <img src="image/images/menu.png" alt="" class="menu-icons" onclick="menutoggle()">
        </div>
        <div class="row">
            <div class="col-2">
                <h1> Give your workout <br> a new style</h1>
                <p>Success isn't always about greatness. It's about consistency. Consistent <br> hard work gains
                    success. Greatness will come.</p></br>
                </br>
                </br>
                <a href="" class="btn">Explore now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="/image/images/image1.png" alt="">
            </div>
        </div>
    </div>
</div> -->


<div class="container-fluid">
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="" class="text-decoration-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="{{ route('search.search') }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search for products">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-6 text-right">
            <a href="" class="btn border">
                <i class="fas fa-heart text-primary"></i>
                <span class="badge">0</span>
            </a>
            <a href="{{ route('cart.index') }}" class="btn border">

                <i class="fas fa-shopping-cart text-primary"></i> ({{ $totalQuantity ?? 0 }})
            </a>
        </div>
    </div>
</div>



<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 350px">
                    @foreach($categoryList as $category)
                    <a class="nav-item nav-link" href="{{ route('categories.showById', $category->id) }}">{{ $category->name }}</a>
                    @endforeach

                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ url('/home') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ url('/products') }}" class="nav-item nav-link">Shop</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route('cart.index') }}" class="dropdown-item">Shopping Cart</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>

                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->