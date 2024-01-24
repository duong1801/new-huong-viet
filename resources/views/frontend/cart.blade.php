@extends('layouts.customer')


@section('title')
    Giỏ hàng
@endsection

@section('content')
    <div class="content">
        <div class="breadcumber">
            <div class="container">
                <ul>
                    <li>
                        <a href="">trang chủ<i class="fa fa-angle-right"></i></a>
                    </li>
                    <li><a href="" class="active">giỏ hàng</a></li>
                </ul>
            </div>
        </div>
        @if ($cartItems->count() > 0)
            <div id="page-cart">
                <div class="cart-table">
                    <div class="container ">
                        <div class="cart-title">
                            <h2>giỏ hàng</h2>
                        </div>

                        <div class="row mb-5">
                            <div class="col-12 ">
                                <form action="#" class="cart-table--responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <td class="cart-table--image"><span>hình ảnh</span></td>
                                                <td class="cart-table--product"><span>sản phẩm</span></td>
                                                <td class="cart-table--price"><span>giá</span></td>
                                                <td class="cart-table--quality"><span>số lượng</span></td>

                                                <td class="cart-table--remove"><span>xóa</span></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $total = 0;
                                            @endphp
                                            @foreach ($cartItems as $item)
                                                <tr>

                                                    <td class="cart-table--image"><img src="{{ $item->options['image'] }}"
                                                            alt="">
                                                    </td>
                                                    <td class="cart-table--product"><a
                                                            href="#">{{ $item->name }}</a></td>
                                                    <td class="cart-table--price">
                                                        <span>{{ $item->price }}</span>
                                                    </td>
                                                    <td class="cart-table--quality"><input type="number"
                                                            value="{{ $item->qty }}" min="1"></td>

                                                    <td class="cart-table--remove">
                                                        <a data-id={{ $item->rowId }} class="deleteCartItem"
                                                            href="#">
                                                            <i class="fa-solid fa-rectangle-xmark"></i>
                                                        </a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-sm-12 col-md-8">
                                <ul class="coupon-redrect">
                                    <li><a id="update-cart-btn" href="#">Cập nhật giỏ hàng</a></li>
                                    <li><a href="{{ route('shop.index') }}">tiếp tục mua thêm</a></li>
                                </ul>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="cart-totals">
                                    <h2>Thanh toán</h2>
                                    <form action="">

                                        <div class="cart-totals--total">
                                            <label>tổng cộng</label>
                                            <p>{{ explode('.', Cart::total())[0] . ' đ' }}</p>
                                        </div>
                                        <a href="{{ route('checkout') }}">Tiến hành thanh toán</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row align-items-center" style="min-height: 300px;">
                <div class="col-12 text-center">
                    <h2>Giỏ hàng của bản hiện tại không có sản phẩm <a href="{{ route('shop.index') }}"
                            class="text-primary">bấm
                            vào đây</a> để tiếp tục mua sắm</h2>
                </div>
            </div>
        @endif

    </div>
@endsection


@section('scripts')
    <script></script>
@endsection
