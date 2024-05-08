<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('cart')) {
            $cart = session()->get('cart');

            // Tính tổng số tiền
            $total = 0;
            foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
            }

            // Truyền dữ liệu giỏ hàng và tổng số tiền qua view
            return view('checkout.index', compact('cart', 'total'));
        } else {
            // Xử lý trường hợp giỏ hàng trống hoặc không được đặt
            // Bạn có thể chuyển hướng người dùng quay lại trang giỏ hàng hoặc hiển thị một thông báo
            return redirect()->route('cart.index')->with('error', 'Giỏ hàng của bạn đang trống.');
        }
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
    public function process(Request $request)
    {
        // Validate dữ liệu gửi từ form
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            // Thêm các quy tắc kiểm tra dữ liệu khác nếu cần
        ]);

        // Lưu thông tin đơn hàng vào cơ sở dữ liệu
        $order = new Order();
        $order->name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        // Lưu các thông tin khác của đơn hàng nếu có
        $order->save();

        // Xóa giỏ hàng sau khi đã đặt hàng thành công
        session()->forget('cart');

        // Redirect hoặc hiển thị thông báo thanh toán thành công
        return redirect()->route('checkout.success');
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
