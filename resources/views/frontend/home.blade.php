@extends('layouts.customer')


@section('title')
    Trang chủ
@endsection

@section('content')
    <!-- Content -->
    <div class="content">
        <!-- slider -->
        <div class="slider">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="owl-carousel banner">
                            @foreach ($sliders as $slider)
                                <div class="slider-img">
                                    <div class="slider-text slider-text-2">
                                        <h1>{{ $slider->content }}</h1>
                                        <a href="#">{{ $slider->content_btn }}</a>
                                    </div>
                                    <img src="{{ $slider->image }}" alt="{{ $slider->title }}" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="banner-img-wrap">
                            @foreach ($productRans as $product)
                                <div class="banner-img">
                                    @php
                                        $thumbnails = explode(',', $product->image);
                                    @endphp
                                    <a href="{{ route('product.detail', $product->slug) }}">
                                        <img src="{{ $thumbnails[0] }}" alt="{{ $product->name }}" alt="" />
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- New products -->
        <div class="new-products">
            <div class="container">
                <div class="new-products__wrap">
                    <h2 class="new-products__heading">SẢN PHẨM MỚI</h2>
                    <div class="new-products__list">
                        <div class="owl-carousel new-products-slider">
                            @foreach ($productLatest as $product)
                                <div class="new-products__item">
                                    <div class="new-products__img">
                                        <a href="{{ route('product.detail', $product->slug) }}"> @php
                                            $thumbnails = explode(',', $product->image);
                                        @endphp
                                            <img src="{{ $thumbnails[0] }}" alt="{{ $product->name }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="new-products__info">
                                        <a href="{{ route('product.detail', $product->slug) }}"
                                            class="product__name">{{ $product->name }}</a>
                                        <div class="product__price">
                                            <span class="price"> {{ $product->FormatSellingPrice() }}</span>
                                            <span class="price__old">{{ $product->FormatOriginalPrice() }}</span>
                                        </div>
                                    </div>
                                    <ul class="new-products__action">
                                        <li>
                                            <input type="hidden" readonly name="quantity" value="1">
                                            <a href="#" class="addToCartButton" data-id="{{ $product->id }}"><i
                                                    class="fa-solid fa-cart-shopping"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                        </li>

                                    </ul>
                                    <div class="new-products__sale">{{ $product->discount() }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End new products -->

        <!-- banner -->
        <div class="banner-area">
            <div class="container">
                <div class="banner-img">
                    <img src="https://htmldemo.net/angara/angara/img/banner/31.jpg" alt="" />
                </div>
            </div>
        </div>
        <!-- End banner -->
        <!-- Category  -->
        <div class="category-list">
            <!-- Section 1 -->
            @foreach ($categories as $category)
                <div class="category">
                    <div class="container">
                        <div class="category__wrap">
                            <div class="row">
                                <div class="col-lg-2 col-md-6 g-0 col-12">
                                    <div class="category-menu">
                                        <a href="{{ route('categories.detail', $category->slug) }}">
                                            <h2>{{ $category->name }}</h2>
                                        </a>

                                        <ul>
                                            @if ($category->children->count() > 0)
                                                @foreach ($category->children as $item)
                                                    <li>
                                                        <a
                                                            href="{{ route('categories.detail', $item->slug) }}">{{ $item->name }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 g-0 col-12">
                                    <div class="category-banner">
                                        <img src="{{ $category->image }}" alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="owl-carousel category-product-slider">

                                        @foreach ($category->allProducts as $product)
                                            <div class="category-product-item">
                                                <div class="category-product__info">
                                                    <div class="product__name">
                                                        <a href="{{ route('product.detail', $product->slug) }}"
                                                            class="product__name">{{ $product->name }}</a>
                                                    </div>
                                                    <div class="product__price">
                                                        <span class="price"> {{ $product->FormatSellingPrice() }}</span>
                                                        <span
                                                            class="price__old">{{ $product->FormatOriginalPrice() }}</span>
                                                    </div>
                                                    <input type="hidden" readonly name="quantity" value="1">
                                                    <button class="addToCartButton" data-id="{{ $product->id }}">Add to
                                                        cart</button>
                                                </div>
                                                <div class="category-product__img">
                                                    @php
                                                        $thumbnails = explode(',', $product->image);
                                                    @endphp
                                                    <a href="{{ route('product.detail', $product->slug) }}">
                                                        <img src="{{ $thumbnails[0] }}" alt="{{ $product->name }}"
                                                            alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="new-products">
                                        <div class="new-products__wrap">
                                            <div class="new-products__list">
                                                <div class="owl-carousel product-slider">
                                                    @foreach ($productLatest as $product)
                                                        <div class="new-products__item">
                                                            <div class="new-products__img">
                                                                @php
                                                                    $thumbnails = explode(',', $product->image);
                                                                @endphp
                                                                <a href="{{ route('product.detail', $product->slug) }}">
                                                                    <img src="{{ $thumbnails[0] }}"
                                                                        alt="{{ $product->name }}" alt="" />
                                                                </a>
                                                            </div>
                                                            <div class="new-products__info">
                                                                <a href="{{ route('product.detail', $product->slug) }}"
                                                                    class="product__name">{{ $product->name }}</a>
                                                                <div class="product__price">
                                                                    <span class="price">
                                                                        {{ $product->FormatSellingPrice() }}</span>
                                                                    <span
                                                                        class="price__old">{{ $product->FormatOriginalPrice() }}</span>
                                                                </div>
                                                            </div>
                                                            <ul class="new-products__action">
                                                                <li>
                                                                    <input type="hidden" readonly name="quantity"
                                                                        value="1">
                                                                    <a href="#" class="addToCartButton"
                                                                        data-id="{{ $product->id }}"><i
                                                                            class="fa-solid fa-cart-shopping"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><i
                                                                            class="fa-regular fa-heart"></i></a>
                                                                </li>
                                                            </ul>
                                                            <div class="new-products__sale">{{ $product->discount() }}
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- end category -->
    </div>
    <!-- End content -->


    <!-- Footer -->

    <!-- End footer -->

    </div>
@endsection
@section('scripts')
@endsection
