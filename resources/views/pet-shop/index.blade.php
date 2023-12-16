@extends('layouts.master')

@section('title')
Home
@endsection

@section('styles')
@endsection

@section('content')
<div class="slider-area">
    <div class="slider-active owl-dot-style owl-carousel">
        <div class="single-slider pt-100 pb-100 yellow-bg">
            <div class="container">
                @foreach($randProductsMain as $randProductMain)
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 col-sm-7">
                        <div class="slider-content slider-animated-1 pt-114">
                            <h3 class="animated">We keep pets for pleasure.</h3>
                            <h1 class="animated">Food & Vitamins <br>For all Pets</h1>
                            <div class="slider-btn">
                                <a class="animated" href="{{route('pet-shop/add-cart', ['id' => $randProductMain->id])}}">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 col-sm-5">
                        <div class="slider-single-img slider-animated-1">
                            <img class="animated" src="../../../public/storage/{{$randProductMain->image}}" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="product-area pt-95 pb-70 gray-bg">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h4>Most Populer</h4>
            <h2>Recent Products</h2>
        </div>
        <div class="row">
            <div class="grid-list-product-wrapper">
    <div class="product-view product-grid">
        <div class="row">
            @foreach($randProducts as $randProduct)
            <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                <div class="product-wrapper mb-10">
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
            </div>
            @endforeach
        </div>
    </div>
</div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection