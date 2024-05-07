<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productList = Product::paginate(6); // Số lượng sản phẩm trên mỗi trang, trong trường hợp này là 10
        return view('products.index', ['productList' => $productList]);
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
        $query = Product::query();

        // Add other filtering conditions here

        if ($request->has('price_all') && $request->price_all == '1') {
            // Nếu người dùng chọn "All Prices", không thêm bất kỳ điều kiện lọc nào về giá
        } elseif ($request->has('price_range') && is_array($request->price_range)) {
            $priceRanges = $request->price_range;
            $query->where(function ($query) use ($priceRanges) {
                foreach ($priceRanges as $range) {
                    $priceLimits = explode('-', $range);
                    if (count($priceLimits) == 2) {
                        $query->orWhereBetween('price', [$priceLimits[0], $priceLimits[1]]);
                    }
                }
            });
        } elseif ($request->has('price_5_to_7')) {
            // Thêm điều kiện cho giá từ $5 đến $7
            $query->whereBetween('price', [5, 7]);
        } else {
            // Điều kiện mặc định cho giá nhỏ hơn $5
            $query->where('price', '<', 5);
        }

        $productList = $query->paginate(6);
        return view('products.index', compact('productList'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', ['product' => $product]);
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
        return Product::findOrFail($id)->update($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->destroy();
    }
}
