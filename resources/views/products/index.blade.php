@extends('layout')
<!-- được sử dụng để kế thừa nội dung từ một layout -->

@section('title', @trans('front.products.index.title'))
<!-- được sử dụng để định nghĩa một phần nào đó của nội dung của trang web -->

@section('content')
<div class="small-container">


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


</div>

@endsection