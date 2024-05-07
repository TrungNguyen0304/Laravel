<?php

namespace App\Http\Controllers;

use App\Models\Product as ProductHome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    // Lấy 2 sản phẩm mới nhất và sắp xếp theo số thứ tự và sau đó theo giá tiền
    $productListHome = ProductHome::latest()
        ->take(4)
        ->orderBy('price')
        ->paginate(4); // Đổi từ get() sang paginate() và chỉ định số sản phẩm trên mỗi trang (ví dụ: 10)

    // Lấy sản phẩm có lượt xem cao nhất và sắp xếp theo giá tiền
    $topViewedProducts = ProductHome::orderBy('views', 'desc')
        ->take(4)
        ->get()
        ->sortBy('price');

    // Tính tổng số lượng sản phẩm trong giỏ hàng
    $totalQuantity = 0;
    $cart = session()->get('cart', []);
    foreach ($cart as $item) {
        $totalQuantity += $item['quantity'];
    }

    return view('home.index', [
        'productListHome' => $productListHome,
        'topViewedProducts' => $topViewedProducts,
        'totalQuantity' => $totalQuantity
    ]);
}

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
