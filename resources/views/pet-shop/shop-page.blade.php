@extends('layouts.master')

@section('title')
Shop page
@endsection

@section('styles')
@endsection

@section('content')
<div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(../../../public/img/banner/at20mist20tortora2025x70.jpg);">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Shop Page</h2>
            <ul>
                <li><a href="{{route('pet-shop/index')}}">home</a></li>
                <li class="active">Shop Page</li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-area pt-100 pb-100 gray-bg">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="grid-list-product-wrapper">
                    <div class="product-view product-grid">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                <div class="product-wrapper mb-10">
                                    <div class="product-img">
                                        <a href="{{route('pet-shop/product-details', ['id' => $product->id])}}">
                                            <img src="../../../public/storage/{{$product->image}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a title="Add To Cart" href="{{route('pet-shop/add-cart', ['id' => $product->id])}}">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="{{route('pet-shop/product-details', ['id' => $product->id])}}">{{$product->name}}</a></h4>
                                        <div class="product-price">
                                            <span>{{$product->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="shop-sidebar">
                    <div class="shop-widget">
                        <h4 class="shop-sidebar-title">Search Products</h4>
                        <div class="shop-search mt-25 mb-50">
                            <form class="shop-search-form">
                                <input type="text" placeholder="Find a product">
                                <button type="submit">
                                    <i class="icon-magnifier"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="shop-widget mt-50">
                        <h4 class="shop-sidebar-title">Food Category </h4>
                         <div class="shop-list-style mt-20">
                            <ul>
                                <li><a href="#">Canned Food</a></li>
                                <li><a href="#">Dry Food</a></li>
                                <li><a href="#">Food Pouches</a></li>
                                <li><a href="#">Food Toppers</a></li>
                                <li><a href="#">Fresh Food</a></li>
                                <li><a href="#">Frozen Food</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-widget mt-50">
                        <h4 class="shop-sidebar-title">Top Brands </h4>
                         <div class="shop-list-style mt-20">
                            <ul>
                                <li><a href="#">Authority</a></li>
                                <li><a href="#">AvoDerm Natural</a></li>
                                <li><a href="#">Bil-Jac</a></li>
                                <li><a href="#">Blue Buffalo</a></li>
                                <li><a href="#">Castor & Pollux</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-widget mt-50">
                        <h4 class="shop-sidebar-title">Health Consideration </h4>
                         <div class="shop-list-style mt-20">
                            <ul>
                                <li><a href="#">Bone Development <span>18</span></a></li>
                                <li><a href="#">Digestive Care <span>22</span></a></li>
                                <li><a href="#">General Health <span>19</span></a></li>
                                <li><a href="#">Hip & Joint  <span>41</span></a></li>
                                <li><a href="#">Immune System  <span>22</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-widget mt-50">
                        <h4 class="shop-sidebar-title">Nutritional Option </h4>
                         <div class="shop-list-style mt-20">
                            <ul>
                                <li><a href="#">Grain Free  <span>18</span></a></li>
                                <li><a href="#">Natural <span>22</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="ti-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                <img src="../../../public/img/quick-view/l1.jpg" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal2" role="tabpanel">
                                <img src="../../../public/img/quick-view/l2.jpg" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal3" role="tabpanel">
                                <img src="../../../public/img/quick-view/l3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        <a class="active" href="#modal1" data-toggle="tab" role="tab">
                            <img src="../../../public/img/quick-view/s1.jpg" alt="">
                        </a>
                        <a href="#modal2" data-toggle="tab" role="tab">
                            <img src="../../../public/img/quick-view/s2.jpg" alt="">
                        </a>
                        <a href="#modal3" data-toggle="tab" role="tab">
                            <img src="../../../public/img/quick-view/s3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>Dog Calcium Food</h3>
                        <div class="product-price">
                            <span>$19.00 </span>
                        </div>
                        <div class="product-rating">
                            <i class="ion-star theme-color"></i>
                            <i class="ion-star theme-color"></i>
                            <i class="ion-star theme-color"></i>
                            <i class="ion-star theme-color"></i>
                            <i class="ion-star theme-color"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do amt tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                        <div class="quick-view-select">
                            <div class="select-option-part">
                                <label>Size*</label>
                                <select class="select">
                                    <option value="">- Please Select -</option>
                                    <option value="">XS</option>
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value=""> L</option>
                                    <option value="">XL</option>
                                    <option value="">XXL</option>
                                </select>
                            </div>
                            <div class="select-option-part">
                                <label>Color*</label>
                                <select class="select">
                                    <option value="">- Please Select -</option>
                                    <option value="">orange</option>
                                    <option value="">pink</option>
                                    <option value="">yellow</option>
                                </select>
                            </div>
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="2" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-style" href="#">add to cart</a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover" href="#"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection