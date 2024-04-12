@extends('layout')
<!-- được sử dụng để kế thừa nội dung từ một layout -->

@section('title', 'List Product')
<!-- được sử dụng để định nghĩa một phần nào đó của nội dung của trang web -->

@section('content')

<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="{{ url($product->image)}}" width="100%" id="productimg">
            <div class="small-img-row">
                <!-- <div class="small-img-col">
                    <img src="{{$product->image}}" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{$product->image}}" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{$product->image}}" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{$product->image}}" width="100%" class="small-img">
                </div> -->
            </div>
        </div>
        <div class="col-2">
            <p>Home / T-Shirt</p>
            <h1>{{$product->name}}</h1>
            <h4>{{$product->price}}</h4>
            <select name="" id="">
                <option value="">Select Size</option>
                <option value="">XXL</option>
                <option value="">XL</option>
                <option value="">Large</option>
                <option value="">Medium</option>
                <option value="">Small</option>
            </select>
            <input type="number" value="1">
            <a href="cart.html" class="btn">Add TO Card</a>
            </br>
            </br>
            </br>

            <h3>Products Drtails <i class="fa fa-ident"></i></h3>
            </br>
            <p>{{$product->description}}</p>
        </div>
    </div>
</div>



<!--------Title-------->
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
    </div>
</div>
<!--------products------>
<div class="small-container">
    <h2 class="title">featured products</h2>
    <div class="products"></div>

    <div class=" row" id="product-list">


    </div>
</div>

@endsection