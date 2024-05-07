@extends('layout')

@section('title', trans('front.products.index.title'))

@section('content')
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shopping Cart</p>
        </div>
    </div>
</div>

<!-- Cart Start -->

<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        
                        <th>Total</th>
                        <th>Quantity</th>
                        <th>update</th>
                        <th>Remove</th>
                       
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @php
                    $totalAmount = 0; // Biến để lưu tổng số tiền
                    @endphp
                    @foreach($cart as $key => $item)
                    <tr>
                        <td class="align-middle">
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" style="width: 50px;"> {{ $item['name'] }}
                        </td>
                        <td class="align-middle">${{ $item['price'] }}</td>
                        <td class="align-middle">${{ $item['price'] * $item['quantity'] }}</td>
                        
                        <td class="align-middle">
                            <form action="{{ route('cart.update', ['id' => $key]) }}" method="POST" class="update-form">
                                @csrf
                                @method('PUT')
                                <div class="input-group">
                                    <input type="number" class="form-control form-control-sm bg-secondary text-center" name="quantity" value="{{ $item['quantity'] }}">

                                </div>
                            </form>
                        </td>
                        <td class="align-middle">
                            <button type="button" class="btn btn-sm btn-primary update-btn"><i class="fa fa-check"></i></button>
                        </td>
                        <td class="align-middle">
                            <form action="{{ route('cart.delete', ['id' => $key]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                       
                       
                        

                    </tr>
                    @php
                    // Tính tổng số tiền của từng sản phẩm
                    $productTotalAmount = $item['price'] * $item['quantity'];
                    $totalAmount += $productTotalAmount; // Thêm vào tổng số tiền của đơn hàng
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold">${{ $totalAmount }}</h5> <!-- Hiển thị tổng số tiền -->
                    </div>
                    <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('.update-btn').click(function() {
                                    // Tìm form cập nhật số lượng sản phẩm gần nhất trong cùng một hàng
                                    var form = $(this).closest('td').prev('td').find('.update-form');
                                    // Gửi form đi
                                    form.submit();
                                });
                            });
                        </script>
<!-- Cart End -->
@endsection