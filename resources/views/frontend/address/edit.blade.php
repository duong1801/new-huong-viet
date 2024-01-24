@extends('layouts.customer')
@section('title')
    Sửa địa chỉ
@endsection

@section('content')
    <div id="login">
        <div class="container">
            <div class="login__title">
                <h2>Cập nhật địa chỉ</h2>
            </div>
            <div class="row row-responsive-login">
                <div class="col-lg-6 col-md-10 col-12">
                    <div class="login__form">
                        <form action="{{ route('update-address', $address->id) }}" id="register-form" method="post">
                            <div class="login__form--username">
                                <label for="name">Tên người nhận</label>
                                <input type="text" name="name" id="name" value="{{ $address->name }}" />
                                @error('name')
                                    <div class="alert alert-danger my-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="address">Địa chỉ</label>
                                <input type="text" id="address" name="address" value="{{ $address->address }}" />
                                @error('address')
                                    <div class="alert alert-danger my-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submid"
                                style="margin-top: 1rem; border:none; background: #80bb35; font-size: 1.4rem; color: #fff; padding: 1rem 1.6rem">Cập
                                nhật</button>
                            @csrf
                            @method('patch')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
