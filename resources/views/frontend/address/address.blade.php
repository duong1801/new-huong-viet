@extends('layouts.customer')
@section('title')
    Quản lý địa chỉ
@endsection
@section('content')
    <div id="login">
        <div class="container">
            <div class="login__title">
                <h2>Địa chỉ nhận hàng</h2>
            </div>
            <div class="row row-responsive-login">
                <div class="col-lg-6 col-md-10 col-12">
                    <div class="address__wrap">
                        @foreach (Auth::user()->address as $item)
                            <div class="address__item">
                                <div class="address__item--info">
                                    <p>{{ $item->name }}</p>
                                    <p>{{ $item->address }}</p>
                                </div>
                                <div class="address__item--action">
                                    @include('layouts.inc.delete', [
                                        'route' => 'destroy-address',
                                        'id' => $item->id,
                                    ])
                                    <a href="{{ route('edit-address', $item->id) }} " class="btn btn-warning">Sửa</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('add-address') }}" style="font-size: 1.4rem">Thêm địa chỉ mới</a>
                </div>
            </div>
        </div>
    </div>
@endsection
