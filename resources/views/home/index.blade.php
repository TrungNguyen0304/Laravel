@extends('layout')
<!-- được sử dụng để kế thừa nội dung từ một layout -->

@section('title', @trans('front.products.index.title'))
<!-- được sử dụng để định nghĩa một phần nào đó của nội dung của trang web -->

@section('content')
<!-- <div class="small-container">


    <div class="row row-2">
        <h2>All Products</h2>
    </div>

    <div class="row">
    @foreach($productListHome->take(4) as $product)
        <div class="col-4">

            <a href="{{ route('products.show', $product->id)}}">
                <img src="{{$product->image}}" alt="IMAGE-PRODUCT">
            </a>
          
            <h4>{{ $product->name}}</h4>
            <div class="rating">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <p>{{ $product->price}}</p>

        </div>
        @endforeach

    </div>


</div> -->
<!-- Featured Start -->
<div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" style="width: 1020px; margin-left: 430px;">
        <div class="carousel-item active" style="height: 410px;">
            <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;margin-left: 720px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->
<div class="container-fluid offer pt-5">
    <div class="row px-xl-5">
        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                <img src="img/offer-1.png" alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Spring Collection</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                <img src="img/offer-2.png" alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Winter Collection</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Latest products</span></h2>
    </div>

    <div class="row px-xl-5 pb-3">
        @foreach($productListHome as $product)
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{$product->image}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{ $product->name}}</h6>
                    <div class="d-flex justify-content-center">
                        <h6>{{ $product->price}}</h6>
                        <!-- <h6 class="text-muted ml-2"><del>$123.00</del></h6> -->
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="{{ route('products.show', $product->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <form id="addToCartForm" method="POST" action="{{ route('cart.add') }}">
                        @csrf
                        <!-- Thêm các trường ẩn để truyền product_id và quantity -->
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input id="hiddenQuantity" type="hidden" name="quantity" value="1"> <!-- Quantity mặc định là 1 -->

                        <!-- Các trường của biểu mẫu ở đây -->

                        <button class="btn btn-sm text-dark p-0" type="submit"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div class="pagination-horizontal">
        <ul class="pagination-links">
            {{ $productListHome->links() }}
        </ul>
    </div>

</div>



<div class="container-fluid bg-secondary my-5">
    <div class="row justify-content-md-center py-5 px-xl-5">
        <div class="col-md-6 col-12 py-5">
            <div class="text-center mb-2 pb-2">
                <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>
                <p>Amet lorem at rebum amet dolores. Elitr lorem dolor sed amet diam labore at justo ipsum eirmod duo labore labore.</p>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Most outstanding product</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        @foreach($topViewedProducts as $product)
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    @if ($product->image)
                    <img class="img-fluid w-100" src="{{ $product->image }}" alt="">
                    @endif
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{ $product->name }}</h6>
                    <div class="d-flex justify-content-center">
                        <h6>{{ $product->price }}</h6>
                        <!-- <h6 class="text-muted ml-2"><del>$123.00</del></h6> -->
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="{{ route('products.show', $product->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <form id="addToCartForm" method="POST" action="{{ route('cart.add') }}">
                        @csrf
                        <!-- Thêm các trường ẩn để truyền product_id và quantity -->
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input id="hiddenQuantity" type="hidden" name="quantity" value="1"> <!-- Quantity mặc định là 1 -->

                        <!-- Các trường của biểu mẫu ở đây -->

                        <button class="btn btn-sm text-dark p-0" type="submit"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>



</div>



<!-- Vendor -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                <div class="vendor-item border p-4">
                    <img src="img/vendor-1.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-2.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-3.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-4.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-5.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-6.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-7.jpg" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="img/vendor-8.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->



@endsection