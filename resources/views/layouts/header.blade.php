<header class="header-area">
    <div class="header-bottom transparent-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-5">
                    <div class="logo pt-39">
                        <a href="{{route('pet-shop/index')}}"><img alt="" src="../../../public/img/logo/logo.png"></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                    <div class="main-menu text-center">
                        <nav>
                            <ul>
                                <li><a href="{{route('pet-shop/index')}}">HOME</a></li>
                                <li class="mega-menu-position"><a href="{{route('pet-shop/shop-page')}}">Food</a>
                                </li>
                                <li><a href="{{route('pet-shop/about-us')}}">ABOUT</a></li>
                                <li><a href="{{route('pet-shop/contact')}}">contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-8 col-sm-8 col-7">
                    <div class="search-login-cart-wrapper">
                        <div class="header-login same-style">
                            <a href="{{route('pet-shop/profile')}}"><p class="myclass">PROFILE</p></a>
                        </div>
                        <div class="header-cart same-style">
                            <button class="icon-cart">
                                <p class="myclass">BASKET</p>
                                <span class="count-style">{{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotalQuantity()}}</span>
                            </button>
                            <div class="shopping-cart-content">
                                @foreach($cart as $item)
                                <ul>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="../../../public/storage/{{$item->attributes->image}}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">{{$item->name}}</a></h4>
                                            <h6>Qty: {{$item->quantity}}</h6>
                                            <span>{{$item->price}} ₽</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="ti-close"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                @endforeach
                                <div class="shopping-cart-total">
                                    <h4>Shipping : <span>Free</span></h4>
                                    <h4>Total : <span class="shop-total">{{$sum}} ₽</span></h4>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a href="{{route('pet-shop/checkout')}}">checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>       