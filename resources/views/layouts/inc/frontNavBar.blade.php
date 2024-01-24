        <!-- Start header -->
        <header id="header">
            <div class="top-header">
                <div class="container">
                    <div class="top-header__wrap">
                        <div class="top-header-left">
                            <p>Điểm đến mua sắm trực tuyến nhanh nhất nước Việt Nam</p>
                        </div>
                        <div class="top-header-right">
                            <ul>
                                <li><a href="{{ route('cart') }}">Giỏ hàng</a></li>
                                <li><a href="{{ route('my-order') }}">Lịch sử đặt hàng</a></li>
                                @if (!Auth::check())
                                    <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                @else
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user me-sm-1"></i>
                                            {{ Auth::user()->name }}

                                            <ul class="sub-menu">

                                                <li><a href="#"
                                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit(); ">Đăng
                                                        xuất</a></li>
                                                <li><a href="{{ route('info') }}">Thông tin người dùng</a></li>
                                                <li><a href="{{ route('get-address') }}">Quản lý địa chỉ</a></li>
                                            </ul>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="{{ $logo ? $logo->logo : '' }}"
                                        alt="Logo Page" /></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 d-md-flex align-items-center">
                            <div class="main-header__search">
                                <form action="{{ route('product.search') }}" method="POST">
                                    @csrf
                                    <input type="text" value="{{ isset($search_product) ? $search_product : '' }}"
                                        name="key" placeholder="Nhập từ khóa tìm kiếm..." />
                                    <button type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="main-header__action">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa-solid fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('cart') }}"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <div class="count cart-count">{{ $cart_items_count }}</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="category">
                                <div class="category__heading">
                                    <h2>Danh mục</h2>
                                    <i class="fa-sharp fa-solid fa-bars"></i>
                                </div>
                                <ul class="category__list">
                                    @foreach ($navCategories as $category)
                                        <li>
                                            <a href="{{ route('categories.detail', $category->slug) }}">
                                                {{ $category->name }}<i class="fa-solid fa-angle-right"></i></a>

                                            @if ($category->children->count() > 0)
                                                @include('includes.sub-category', [
                                                    'subCategory' => $category->children,
                                                ])
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-12">
                            <ul class="main-menu">
                                <li>
                                    <a href="{{ route('home') }}">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="#">Trang<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('shop.index') }}">Cửa hàng</a></li>
                                        <li><a href="{{ route('blogs.list') }}">Bài viết</a></li>
                                        @if (!Auth::check())
                                            <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                        @endif
                                        <li><a href="{{ route('register') }}">Đăng ký</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Liên hệ</a>
                                </li>
                                <li>
                                    <a href="{{ route('aboutUs.client') }}">Về chúng tôi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-mobile d-block d-lg-none">
                <div class="container">
                    <div class="accordion accordion-flush" id="main-menu-mobile">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <p>MENU</p>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <i class="fa-solid fa-bars bar-icon"></i>
                                    <i class="fa-solid fa-xmark close-icon"></i>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#main-menu-mobile">
                                <div class="accordion-body">
                                    <div class="accordion" id="sub-menu-mobile">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <a>Danh mục</a>
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne-1"
                                                    aria-expanded="true" aria-controls="collapseOne-1">
                                                    <i class="fa-solid fa-plus plus-icon"></i>
                                                    <i class="fa-solid fa-minus minus-icon"></i>
                                                </button>
                                            </h2>
                                            <div id="collapseOne-1" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne" data-bs-parent="#sub-menu-mobile">
                                                <div class="accordion-body">
                                                    <ul>
                                                        @foreach ($allCate as $item)
                                                            <li><a
                                                                    href="{{ route('categories.detail', $item->slug) }}">{{ $item->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <a href="{{ route('home') }}">Trang chủ</a>
                                            </h2>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <a>Trang</a>
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo-3"
                                                    aria-expanded="false" aria-controls="collapseTwo-3">
                                                    <i class="fa-solid fa-plus plus-icon"></i>
                                                    <i class="fa-solid fa-minus minus-icon"></i>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo-3" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#sub-menu-mobile">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li><a href="{{ route('shop.index') }}">Cửa hàng</a></li>
                                                        <li><a href="{{ route('blogs.list') }}">Bài viết</a></li>
                                                        <li><a href="{{ route('register') }}">Đăng ký</a></li>
                                                        <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <a href="{{ route('contact') }}">Liên hệ</a>
                                            </h2>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <a href="{{ route('aboutUs.client') }}">Về chúng tôi</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- End header -->
