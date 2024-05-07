@extends('layout')

@section('content')

<!-- <div class="small-container">
    <div class="row row-2">
        <h2>search Products</h2>
    </div>
    <div class="row">
    @foreach($productSearch as $product)
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
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">search Products</span></h2>
    </div>

    <div class="row px-xl-5 pb-3">
        @foreach($productSearch as $product)
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{$product->image}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{ $product->name}}</h6>
                    <div class="d-flex justify-content-center">
                        <h6>{{ $product->price}}</h6>

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
            {{ $productSearch->appends(['search' => request()->input('search')])->links() }} <!-- Phân trang -->
        </ul>
    </div>

</div>

@endsection