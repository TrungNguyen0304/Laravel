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
        @foreach($productList as $product )
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
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shop</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Shop Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-12">
            <!-- Price Start -->
            <div class="border-bottom mb-4 pb-4">
                <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf

                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-all" name="price_range[]" value="1">
                        <label class="custom-control-label" for="price-all">All Price</label>
                        <input type="hidden" name="price_all" value="0"> <!-- Input hidden để gửi dữ liệu khi checkbox "All Price" được chọn -->
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-1" name="" value="0-100">
                        <label class="custom-control-label" for="price-1">$0 - $5</label>
                        <!-- <span class="badge border font-weight-normal">150</span> -->
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-5-7" name="price_5_to_7" value="1">
                        <label class="custom-control-label" for="price-5-7">$5 - $7</label>
                    </div>
                    <!-- Thêm các checkbox khác tương tự -->
                    <button type="submit" class="btn btn-primary">Filter</button>
                </form>
            </div>

        </div>
        <!-- Shop Sidebar End -->


        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-12">
            <div class="row pb-3">
                <div class="col-12 pb-1">
                    <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search by name">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent text-primary">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div> -->
                </div>
                @foreach($productList as $product )
                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">

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


                <!-- <div class="col-12 pb-1">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center mb-3">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
            </div>
            <div class="pagination-horizontal">
                <ul class="pagination-links">
                    {{ $productList->links() }}
                </ul>
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->


@endsection