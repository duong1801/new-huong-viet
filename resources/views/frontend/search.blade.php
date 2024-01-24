@extends('layouts.customer')


@section('title')
    Kết quả tìm kiếm
@endsection

@section('content')
    <!-- breadcrumbs-area-start -->
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-menu">
                        <ul class="d-flex">
                            <li>
                                <a href="{{ route('home') }}">Home<i class="fa-solid fa-chevron-right"></i></a>
                            </li>
                            <li><a href="#" class="active">Search Results</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs-area-end -->
    <div class="shop-main">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Right shop -->
                    <div class="right-shop">
                        <div class="right-shop__heading">
                            <h2>Kết quả tìm kiếm từ khóa '<span>{{ $search_product }}</span>'</h2>
                        </div>
                        <div class="search-results">
                            <p>Tìm thấy <span>({{ $products->count() }})</span> sản phẩm</p>
                        </div>
                        <div class="right-shop__filter">
                            <div class="right-shop__filter--action">
                                <div class="filter__buttons">
                                    <button class="active link-list" data-view="list-view">
                                        <i class="fa fa-th"></i>
                                    </button>
                                    <button class="link-grid" data-view="grid-view">
                                        <i class="fa fa-list"></i>
                                    </button>
                                </div>
                                <div class="filter__count">
                                    <span>{{ $products->count() }} sản phẩm</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Product list -->
                    <div class="products__list">
                        <div class="view-wraps grid-view">
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-6 g-0 col-md-4 col-lg-3">
                                        <div class="product__item">
                                            <div class="product__img">
                                                @php
                                                    $thumbnails = explode(',', $product->image);
                                                @endphp
                                                <a href="{{ route('product.detail', $product->slug) }}">
                                                    <img src="{{ $thumbnails[0] }}" alt="{{ $product->name }}"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="product__info">
                                                <a href="{{ route('product.detail', $product->slug) }}"
                                                    class="product__name">{{ $product->name }}</a>
                                                <div class="product__price">
                                                    <span class="price">
                                                        {{ $product->FormatSellingPrice() }}</span>
                                                    <span class="price__old">{{ $product->FormatOriginalPrice() }}</span>
                                                </div>
                                            </div>
                                            <ul class="product__action">
                                                <li>
                                                    <input type="hidden" readonly name="quantity" value="1">
                                                    <a href="#" class="addToCartButton"
                                                        data-id="{{ $product->id }}"><i
                                                            class="fa-solid fa-cart-shopping"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                </li>

                                            </ul>
                                            <div class="product__sale">{{ $product->discount() }}</div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>

                        <div class="product-list view-wraps list-view" style="display: none">
                            <div class="row">
                                <div class="col-12 g-0">
                                    @foreach ($products as $product)
                                        <div class="product__item product-item-list">
                                            <div class="row">
                                                <div class="product__img--tab col-12 col-lg-5">
                                                    @php
                                                        $thumbnails = explode(',', $product->image);
                                                    @endphp
                                                    <a href=""{{ route('product.detail', $product->slug) }}">
                                                        <img src="{{ $thumbnails[0] }}" alt="{{ $product->name }}"
                                                            alt="" />
                                                    </a>
                                                    <ul class="product__action product-ul">
                                                        <li>
                                                            <input type="hidden" readonly name="quantity" value="1">
                                                            <a href="#" class="addToCartButton"
                                                                data-id="{{ $product->id }}"><i
                                                                    class="fa-solid fa-cart-shopping"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <h3 class="product-h2">
                                                        <a
                                                            href=""{{ route('product.detail', $product->slug) }}">{{ $product->name }}</a>
                                                    </h3>
                                                    <div class="product__price price-list">
                                                        <span class="price">
                                                            {{ $product->FormatSellingPrice() }}</span>
                                                        <span
                                                            class="price__old">{{ $product->FormatOriginalPrice() }}</span>
                                                    </div>
                                                    <p class="product-p">
                                                        {{ $product->description }}
                                                    </p>
                                                    <a href="{{ route('product.detail', $product->slug) }}"
                                                        class="product-link">Learn More</a>
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
        </div>
    </div>
@endsection
