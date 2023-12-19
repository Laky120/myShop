<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function shopList(){

        $sessionId = Session::getId();

        \Cart::session($sessionId);

        $cart = \Cart::getContent();

        $sum = \Cart::getTotal('price');

        $products = Product::all();

        return view('pet-shop/shop-page', [
            'products'=>$products,
            'cart' => $cart,
            'sum' => $sum,
        ]);
    }

    public function shopMain(){

        $randProducts = Product::query()->select()->inRandomOrder()->limit(6)->get();

        $randProductsMain = Product::query()->select()->inRandomOrder()->limit(1)->get();

        $sessionId = Session::getId();

        \Cart::session($sessionId);

        $cart = \Cart::getContent();

        $sum = \Cart::getTotal('price');

         return view('pet-shop/index', [
        'randProducts' => $randProducts,
        'randProductsMain' => $randProductsMain,
        'cart' => $cart,
        'sum' => $sum,
         ]);
    }

    public function productDetails(Request $request){

        $sessionId = Session::getId();

        \Cart::session($sessionId);

        $cart = \Cart::getContent();

        $sum = \Cart::getTotal('price');

        $randProducts = Product::query()->select()->inRandomOrder()->limit(4)->get();

        $product = Product::query()->where(['id' => $request->id])->get();

        return view('pet-shop/product-details', [
            'randProducts' => $randProducts,
            'product' => $product,
            'cart' => $cart,
            'sum' => $sum,
        ]);

    }

    public function contact(Request $request){

        $sessionId = Session::getId();

        \Cart::session($sessionId);

        $cart = \Cart::getContent();

        $sum = \Cart::getTotal('price');

        $product = Product::query()->where(['id' => $request->id])->get();
        return view('pet-shop/contact', [
            'product' => $product,
            'cart' => $cart,
            'sum' => $sum,
        ]);

    }

    public function about(Request $request){

        $sessionId = Session::getId();

        \Cart::session($sessionId);

        $cart = \Cart::getContent();

        $sum = \Cart::getTotal('price');

        $product = Product::query()->where(['id' => $request->id])->get();
        return view('pet-shop/about-us', [
            'product' => $product,
            'cart' => $cart,
            'sum' => $sum,
        ]);

    }

    public function addCart(Request $request){


        $product = Product::query()->where(['id' => $request->id])->first();

        $sessionId = Session::getId();

        \Cart::session($sessionId)->add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qty ?? 1,
            'attributes' => [
                'image' => $product->image,
            ],
        ]);

        $cart = \Cart::getContent();

        return redirect()->back();
    }

    public function profile(){

        $sessionId = Session::getId();

        \Cart::session($sessionId);

        $cart = \Cart::getContent();

        $sum = \Cart::getTotal('price');

         return view('pet-shop/my-account', [
        'cart' => $cart,
        'sum' => $sum,
         ]);
    }

    public function checkout(){

        $sessionId = Session::getId();

        \Cart::session($sessionId);

        $cart = \Cart::getContent();

        $sum = \Cart::getTotal('price');

        $messageSuccessOrder = \session('successOrder');

        $orders = 0;

        if ($user = Auth::user()){

        $orders = Order::query()->where(['user_id' => $user->getAuthIdentifier()])
            ->orderBy('id', 'desc')
            ->get();

        $orders->transform(function ($order) {
            $order->cart_data = unserialize($order->cart_data);
            return $order;
        });
        }


        if (!empty($messageSuccessOrder)) {

            return view('pet-shop/checkout', [
            'cart' => $cart,
            'sum' => $sum,
            'user' => $user,
            'orders' => $orders,
        ])->with('messageSuccessOrder', $messageSuccessOrder);
        }

        return view('pet-shop/checkout', [
        'cart' => $cart,
        'sum' => $sum,
        'user' => $user,
        'orders' => $orders,
        ])->with('messageSuccessOrder', $messageSuccessOrder);
    }

    public function makeOrder(Request $request){

        $sessionId = Session::getId();

        \Cart::session($sessionId);

        $cart = \Cart::getContent();

        $sum = \Cart::getTotal('price');

        $user = Auth::user();

        $order = new Order();

        $order->user_id = $user->id;

        $order->cart_data = $order->setCartDataAttribute($cart);

        $order->total_sum = $sum;

        $order->phone = $request->phone;

        $order->address = $request->address . " " . $request->city . " " . $request->zip;

        if ($order->save()){
            \Cart::clear();

            Session::flash('successOrder', 'Order created successfully');

            return back();
        }

        Session::flash('errorOrder', 'Something went wrong');

        return back();
    }
}


