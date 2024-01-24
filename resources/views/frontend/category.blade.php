@extends('layouts.customer')


@section('title')
    Cửa hàng
@endsection

@section('content')
    <div class="breadcumber">
        <div class="container">
            <ul>
                <li>
                    <a href="">Home<i class="fa fa-angle-right"></i></a>
                </li>
                <li><a href="" class="active">Cửa hàng</a></li>
            </ul>
        </div>
    </div>
    <div class="shop-main">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3 col-md-12 col-12">
                    <!-- left shop -->
                    <div class="left-shop">
                        <div class="shop-by">
                            <div class="shop-by__title">
                                <h2>Mua Sắm</h2>
                            </div>
                            <!-- Shop by -->
                            <div class="accordion" id="shop-by-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Category
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#shop-by-accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($allCategories as $category)
                                                    <li>
                                                        <a class="{{ Request::is('danh-muc/' . $category->slug) ? 'active' : '' }} "
                                                            href="{{ route('categories.detail', $category->slug) }} ">
                                                            {{ $category->name }}({{ $category->allProducts()->count() }})</a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="shop-filter">
                            <form id="price-form" action="{{ route('categories.filter', $cate->slug) }}" method="POST">
                                @csrf
                                <!-- Các trường lọc theo giá tiền -->
                                <div class="form-group">
                                    <label for="min_price">giá tối thiểu:</label>
                                    <input type="number" name="min_price" min="0" id="min_price"
                                        value="{{ old('min_price') }}">
                                </div>
                                <div class="form-group">
                                    <label for="max_price">giá tối đa:</label>
                                    <input type="number" name="max_price" min="0" id="max_price"
                                        value="{{ old('max_price') }}">
                                </div>
                                <button type="submit">Filter by Price</button>
                            </form>
                        </div>

                        <div class="shop-banner">
                            <div class="shop-banner__img">
                                <img src="https://htmldemo.net/angara/angara/img/banner/37.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-12">
                    <!-- Right shop -->
                    <div class="right-shop">
                        <div class="right-shop__heading">
                            <h2>{{ $cate->name }}</h2>
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
                                    <span>11 items</span>
                                </div>
                            </div>
                            <div class="right-shop__filter--sort-by">
                                <h2>Sắp xếp</h2>
                                <form id="order-form" action="{{ route('categories.filter', $cate->slug) }}" method="POST">
                                    @csrf
                                    <!-- Các trường lọc theo thứ tự -->
                                    <select name="order_by" id="order_by">
                                        <option value="selling_price">Theo giá</option>
                                        <option value="name">Theo tên</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Product list -->
                    <div class="products__list">
                        @if ($products->count() > 0)
                            <div class="view-wraps grid-view">
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-4 g-0 col-md-4 col-lg-3">
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
                                                        <span
                                                            class="price__old">{{ $product->FormatOriginalPrice() }}</span>

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

                                    @foreach ($products as $product)
                                        <div class="col-12 g-0">
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
                                                                <input type="hidden" readonly name="quantity"
                                                                    value="1">
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
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-12 text-center mt-4">
                                        <h2>Không có sản phẩm nào!</h2>
                                    </div>
                        @endif
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
