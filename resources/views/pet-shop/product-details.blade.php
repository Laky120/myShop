@extends('layouts.master')

@section('title')
Details
@endsection

@section('styles')
@endsection

@section('content')
<div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(../../../public/img/banner/at20mist20tortora2025x70.jpg);">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Product Details</h2>
            <ul>
                <li><a href="{{route('pet-shop/index')}}">home</a></li>
                <li class="active">Product Details</li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            @foreach($product as $item)
            <div class="col-lg-6 col-md-6">
                <div class="product-details-img">
                    <img src="../../../public/storage/{{$item->image}}" alt="image"/>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product-details-content">
                    <h2>{{$item->name}}</h2>
                    <div class="product-price">
                        <span>{{$item->price}} ₽</span>
                    </div>
                    <div class="product-details-style shorting-style mt-30">
                    </div>
                    <div class="product-list-action">
                        <div class="product-list-action-left">
                            <a class="addtocart-btn" href="{{route('pet-shop/add-cart', ['id' => $item->id])}}" title="Add to cart">
                                <i class="ion-bag"></i>
                                Add to cart
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="description-review-area pb-100">
    <div class="container">
        <div class="description-review-wrapper gray-bg pt-40">
            <div class="description-review-topbar nav text-center">
                <a class="active" data-toggle="tab" href="#des-details1">DESCRIPTION</a>
                <a data-toggle="tab" href="#des-details2">MORE INFORMATION</a>
                <a data-toggle="tab" href="#des-details3">REVIEWS (2)</a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details1" class="tab-pane active">
                    <div class="product-description-wrapper">
                        <p>{{$item->description}}</p>
                    </div>
                </div>
                <div id="des-details2" class="tab-pane">
                    <div class="product-anotherinfo-wrapper">
                        <ul>
                            <li><span>name:</span> Scanpan Classic Covered</li>
                            <li><span>color:</span> orange , pink , yellow </li>
                            <li><span>size:</span> xl, l , m , sl</li>
                            <li><span>length:</span> 102cm, 110cm , 115cm </li>
                            <li><span>Brand:</span> Nike, Religion, Diesel, Monki </li>
                        </ul>
                    </div>
                </div>
                <div id="des-details3" class="tab-pane">
                    <div class="rattings-wrapper">
                        <div class="sin-rattings">
                            <div class="star-author-all">
                                <div class="product-rating f-left">
                                    <i class="ti-star theme-color"></i>
                                    <i class="ti-star theme-color"></i>
                                    <i class="ti-star theme-color"></i>
                                    <i class="ti-star theme-color"></i>
                                    <i class="ti-star theme-color"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="ratting-author f-right">
                                    <h3>tayeb rayed</h3>
                                    <span>12:24</span>
                                    <span>9 March 2018</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
                        </div>
                        <div class="sin-rattings">
                            <div class="star-author-all">
                                <div class="product-rating f-left">
                                    <i class="ti-star theme-color"></i>
                                    <i class="ti-star theme-color"></i>
                                    <i class="ti-star theme-color"></i>
                                    <i class="ti-star theme-color"></i>
                                    <i class="ti-star"></i>
                                    <span>(4)</span>
                                </div>
                                <div class="ratting-author f-right">
                                    <h3>farhana shuvo</h3>
                                    <span>12:24</span>
                                    <span>9 March 2018</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
                        </div>
                    </div>
                    <div class="ratting-form-wrapper">
                        <h3>(in development) Add your Comments :</h3>
                        <div class="ratting-form">
                            <form action="#">
                                <div class="star-box">
                                    <h2>Rating:</h2>
                                        <div class="product-rating">
                                        <i class="ti-star theme-color"></i>
                                        <i class="ti-star theme-color"></i>
                                        <i class="ti-star theme-color"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                        <span>(3)</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="rating-form-style mb-20">
                                            <input placeholder="Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="rating-form-style mb-20">
                                            <input placeholder="Email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rating-form-style form-submit">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <input type="submit" value="add review">
                                        </div>
                                    </div>
                                     @endforeach
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="related-product-area pt-95 pb-80 gray-bg">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h4>Most Populer</h4>
            <h2>Related Products</h2>
        </div>
        <div class="related-product-active owl-carousel">
            @foreach($randProducts as $randProduct)
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{route('pet-shop/product-details', ['id' => $randProduct->id])}}">
                        <img src="../../../public/storage/{{$randProduct->image}}" alt="">
                    </a>
                    <div class="product-action">
                        <a title="Add To Cart" href="{{route('pet-shop/add-cart', ['id' => $randProduct->id])}}">
                                <i class="ti-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content">
                    <h4><a href="{{route('pet-shop/product-details', ['id' => $randProduct->id])}}">{{$randProduct->name}}</a></h4>
                    <div class="product-price">
                        <span>{{$randProduct->price}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection
