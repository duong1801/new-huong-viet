@extends('layouts.customer')
@section('title', $product->name)

@section('content')
    <div class="content">
        <div class="breadcumber">
            <div class="container">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Trang chủ<i class="fa fa-angle-right"></i></a>
                    </li>
                    <li><a href="#">Chi tiết sản phẩm <i class="fa fa-angle-right"></i></a></li>
                    <li><a href="" class="active">{{ $product->name }}</a></li>

                </ul>
            </div>
        </div>

        <div class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <div class="product-detail--slider">
                            <div id="sync1" class="owl-carousel owl-theme">
                                @php
                                    $thumbnails = explode(',', $product->image);
                                @endphp
                                @foreach ($thumbnails as $thumbnail)
                                    <div class="item">
                                        <img src="{{ $thumbnail }}" alt="">
                                    </div>
                                @endforeach

                            </div>

                            <div id="sync2" class="owl-carousel owl-theme">
                                @foreach ($thumbnails as $thumbnail)
                                    <div class="item">
                                        <img src="{{ $thumbnail }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 lg-ps-2 col-sm-12">
                        <div class="product-detail--info">
                            <h2>Joust Duffle Bag</h2>
                            <div class="product-detail--star">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                            </div>
                            <div class="product-detail--price">
                                <div class="detail-price">
                                    <span>{{ $product->FormatSellingPrice() }}</span>
                                    <span>{{ $product->FormatOriginalPrice() }}</span>
                                </div>
                                <div class="detail-stock">

                                    @if ($product->status == 'stocking')
                                        <span>còn hàng</span>
                                    @else
                                        <span>hết hàng</span>
                                    @endif

                                </div>
                            </div>
                            <div class="product-detail--addtocart">
                                <span>số lượng</span>
                                <input type="number" min="1" maxlength="200" value="1">
                                <button class="addToCartButton" data-id="{{ $product->id }}" <i
                                    class="fa fa-shopping-cart"></i>
                                    thêm vào giỏ hàng
                                </button>

                            </div>

                            <div class="product-detail--social-link">
                                <div class="social-link">
                                    <a href="#">thêm vào danh sách yêu thích</a>
                                </div>
                                <p>{!! $product->small_description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="detail-review">
                            <div class="detail-review__groupbtn">
                                <button class="detail--btn">Chi tiết</button>
                            </div>
                            <div class="detail-review__content">
                                <div class="detail--content">
                                    <p>

                                        {!! $product->description !!}
                                    </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="related_product">
                    <h2>sản phẩm tương tự</h2>
                    <div class="products__list">
                        <div class="owl-carousel owl-theme related-slider">
                            @foreach ($similarProducts as $item)
                                <div class="product__item">
                                    <div class="product__img">
                                        @php
                                            $thumbnails = explode(',', $item->image);
                                        @endphp
                                        <img src="{{ $thumbnails[0] }}" alt="" />
                                    </div>
                                    <div class="product__info">
                                        <a href="#" class="product__name">{{ $item->name }}e</a>
                                        <div class="product__price">
                                            <span class="price">{{ $product->FormatSellingPrice() }}</span>
                                            <span class="price__old">{{ $product->FormatOriginalPrice() }}</span>
                                        </div>
                                    </div>
                                    <ul class="product__action">
                                        <li>
                                            <input type="hidden" readonly name="quantity" value="1">

                                            <a href="#" data-id="{{ $item->id }}" class="addToCartButton"><i
                                                    class="fa-solid fa-cart-shopping"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="addToCartButton"><i
                                                    class="fa-regular fa-heart"></i></a>
                                        </li>

                                    </ul>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="related_product">
                    <h2>sản phẩm giảm giá mạnh</h2>
                    <div class="products__list">
                        <div class="owl-carousel owl-theme upsell-slider">
                            @foreach ($discountedProducts as $item)
                                <div class="product__item">
                                    <div class="product__img">
                                        @php
                                            $thumbnails = explode(',', $item->image);
                                        @endphp
                                        <img src="{{ $thumbnails[0] }}" alt="" />
                                    </div>
                                    <div class="product__info">
                                        <a href="#" class="product__name">{{ $item->name }}e</a>
                                        <div class="product__price">
                                            <span class="price">{{ $product->FormatSellingPrice() }}</span>
                                            <span class="price__old">{{ $product->FormatOriginalPrice() }}</span>
                                        </div>
                                    </div>
                                    <ul class="product__action">
                                        <li>
                                            <input type="hidden" readonly name="quantity" value="1">
                                            <a href="#" data-id="{{ $item->id }}" class="addToCartButton"><i
                                                    class="fa-solid fa-cart-shopping"></i></a>

                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                        </li>

                                    </ul>
                                    <div class="product__sale">{{ $item->discount() }}</div>
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
