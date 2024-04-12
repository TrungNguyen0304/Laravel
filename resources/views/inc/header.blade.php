<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="image/images/logo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="menuItems">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/products') }}">Product</a></li>
                    <li><a href="">Categories</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                   
                    <li>
                    <form action="{{ route('search.search') }}" method="GET">
                            <input class="search" type="text" name="search" placeholder="Search...">
                            <button class="b1" type="submit">Search</button>
                        </form>
                        
                    </li>
                 
                    <li class="cart"><a href="account.html"><img src="image/icons/cart.png" alt="" width="40px"></a></li>
                    <li><a href="seach.html"><img src="image/icons/admin.png" alt="" width="30px"></a></li>
                   
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
                <img src="image/images/image1.png" alt="">
            </div>
        </div>
    </div>
</div>