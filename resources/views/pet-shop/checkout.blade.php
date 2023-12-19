@extends('layouts.master')

@section('title')
Checkout
@endsection

@section('styles')
@endsection

@section('content')
<div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(../../../public/img/banner/at20mist20tortora2025x70.jpg);">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Checkout</h2>
            <ul>
                <li><a href="{{route('pet-shop/index')}}">home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
</div>
@if($messageSuccessOrder)
<div class="alert alert-success" role="alert">
  {{$messageSuccessOrder}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden = "true">&times;</span>
  </button>
</div>
@endif
 <!-- shopping-cart-area start -->
<div class="checkout-area pt-95 pb-70">
    <div class="container">
        <h3 class="page-title">checkout</h3>
        <div class="row">
            <div class="col-lg-12">
                <div class="checkout-wrapper">
                    <div id="faq" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>1</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-1">billing information</a></h5>
                            </div>
                            <div id="payment-1" class="panel-collapse collapse">
                                <form method="post" action="{{route('pet-shop/make-order')}}">
                                    @csrf
                                <div class="panel-body">
                                    <div class="billing-information-wrapper">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Full Name</label>
                                                    <input name="name" type="text" @if($user) value="{{$user->name}}" @endif>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Company</label>
                                                    <input name="company" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Email Address</label>
                                                    <input name="email" type="email" @if($user) value="{{$user->email}}" @endif>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="billing-info">
                                                    <label>Address</label>
                                                    <input name="address" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>city</label>
                                                    <input name="city" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>State/Province</label>
                                                    <input name="state" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Zip/Postal Code</label>
                                                    <input name="zip" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Phone</label>
                                                    <input name="phone" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-review">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="width-1">Product Name</th>
                                                            <th class="width-2">Price</th>
                                                            <th class="width-3">Qty</th>
                                                            <th class="width-4">Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    @foreach ($cart as $item)
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="o-pro-dec">
                                                                    <p>{{$item->name}}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-price">
                                                                    <p>{{$item->price}} ₽</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-qty">
                                                                    <p>{{$item->quantity}}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-subtotal">
                                                                    <p>{{$item->price * $item->quantity}} ₽</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    @endforeach
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="3">Grand Total</td>
                                                            <td colspan="1">{{$sum}} ₽</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="billing-back-btn">
                                            <div class="billing-btn">
                                                <button type="submit">Make order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        @if($orders !== 0)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>2</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-2">History of orders</a></h5>
                            </div>
                            <div id="payment-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="order-review-wrapper">
                                        <div class="order-review">
                                            <div class="table-responsive">
                                                @foreach($orders as $order)
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="width-1">Product Name</th>
                                                            <th class="width-2">Price</th>
                                                            <th class="width-3">Qty</th>
                                                            <th class="width-4">Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    @foreach($order->cart_data as $cart_data)
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="o-pro-dec">
                                                                    <p>{{$cart_data['name']}}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-price">
                                                                    <p>{{$cart_data['price']}} ₽</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-qty">
                                                                    <p>{{$cart_data['quantity']}}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-subtotal">
                                                                    <p>{{$cart_data['quantity'] * $cart_data['price']}} ₽</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    @endforeach
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="3">Grand Total</td>
                                                            <td colspan="1">{{$order->total_sum}} ₽</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection
