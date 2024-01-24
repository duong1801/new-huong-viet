<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\support\Facades\Auth;
use App\Jobs\SendOrderConfirmationEmail;
use App\Models\Province;
use App\Jobs\SendOrderNotificationEmail;
use App\Models\District;
use App\Models\UserAddress;
use App\Models\Ward;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('frontend.checkout');
    }

    public function placeOrder(CheckoutRequest $request)
    {
        $order  = new Order();
        $order->user_id = Auth::id() ? Auth::id() : null;
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address_id = $request->input('address_id');

        $order->total_price = Cart::total();

        $order->tracking_no = 'huongviet' . rand(1111, 9999);
        $order->save();

        foreach (Cart::content() as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $item->id,
                'qty' => $item->qty,
                'price' => $item->price,
            ]);

            $prod  = Product::where('id', $item->id)->first();
            $prod->qty = $prod->qty - $item->prod_qty;
            $prod->update();
        }


        Cart::destroy();


        return redirect('/')->with('status', "Đơn hàng của bạn đã được ghi nhận");
    }
}
