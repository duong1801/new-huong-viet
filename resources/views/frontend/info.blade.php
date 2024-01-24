@extends('layouts.customer')
@section('title')
    Thông tin khách hàng
@endsection

@section('content')
    <div id="login">
        <div class="container">
            <div class="login__title">
                <h2>Thông tin khách hàng</h2>
            </div>
            <div class="row row-responsive-login">
                <div class="col-lg-6 col-md-10 col-12">
                    <div class="login__form">
                        <form action="" id="register-form">
                            <div class="login__form--username">
                                <label for="user">email*</label>
                                <input type="text" name="user" id="user" value="{{ Auth::user()->email }}"
                                    disabled />
                            </div>
                            <div>
                                <label for="name">Họ tên</label>
                                <input type="text" placeholder="Nhập họ tên..." id="name" name="name"
                                    value="{{ Auth::user()->name }}" disabled />
                            </div>
                            <a href="{{ route('get-address') }}" class="address_link">Quản lý địa chỉ</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
