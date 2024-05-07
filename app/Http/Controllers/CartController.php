<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = session()->get('cart', []);

        // Tính tổng số lượng các mặt hàng trong giỏ hàng
        $totalQuantity = 0;
        foreach ($cart as $item) {
            $totalQuantity += $item['quantity'];
        }

        return view('cart.index', [
            'cart' => $cart,
            'totalQuantity' => $totalQuantity,
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
    public function addToCart(Request $request)
    {
        $product_id = $request->input('product_id'); // Lấy product_id từ form
        $quantity = $request->input('quantity', 1); // Lấy số lượng từ form, mặc định là 1 nếu không có

        // Tìm kiếm sản phẩm dựa trên product_id
        $product = Product::findOrFail($product_id);

        // Lấy giỏ hàng từ session, nếu không có thì tạo một mảng rỗng
        $cart = session()->get('cart', []);

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        if (isset($cart[$product_id])) {
            // Nếu đã tồn tại, cập nhật số lượng sản phẩm
            $cart[$product_id]['quantity'] += $quantity;
        } else {
            // Nếu chưa tồn tại, thêm sản phẩm mới vào giỏ hàng
            $cart[$product_id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                'image' => $product->image // Thay image bằng trường tương ứng trong cơ sở dữ liệu
            ];
        }

        // Lưu lại giỏ hàng vào session
        session()->put('cart', $cart);

        // Redirect người dùng về trang giỏ hàng
        return redirect()->route('cart.index')->with('success', 'Product added to cart successfully!');
    }




    public function card()
    {
        return view('products.card');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
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

        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $quantity = $request->input('quantity');
            $cart[$id]['quantity'] = $quantity;

            // Lưu lại giỏ hàng đã cập nhật vào session
            session()->put('cart', $cart);

            // Tính toán lại tổng số tiền
            $total = 0;
            foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
            }

            return redirect()->route('cart.index')->with('success', 'Cart updated successfully.');
        }

        return redirect()->route('cart.index')->with('error', 'Product not found in cart.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart');

        // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
        if (isset($cart[$id])) {
            // Nếu sản phẩm tồn tại, sử dụng unset() để xóa sản phẩm khỏi giỏ hàng
            unset($cart[$id]);

            // Lưu lại giỏ hàng mới vào session
            session()->put('cart', $cart);
        }

        // Redirect người dùng về trang giỏ hàng
        return redirect()->route('cart.index');
    }
    public function getItemCount()
    {
        $cart = session()->get('cart', []);
        $totalQuantity = 0; // Khởi tạo biến $totalQuantity với giá trị ban đầu là 0
        foreach ($cart as $item) {
            $totalQuantity += $item['quantity']; // Tính tổng số lượng sản phẩm trong giỏ hàng
        }
        return response()->json($totalQuantity); // Trả về tổng số lượng sản phẩm dưới dạng JSON
    }
}
