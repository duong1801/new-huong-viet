@extends('layouts.customer')


@section('title')
    Bài viết
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
                                <a href="#">Home<i class="fa-solid fa-chevron-right"></i></a>
                            </li>
                            <li><a href="#" class="active">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumbs-area-end -->

    <!--blog-main-area-start  -->
    <div class="blog-main-area">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-md-12 col-12">
                    @if ($blogs->count() > 0)
                        <div class="blog-main-wrapper">
                            @foreach ($blogs as $blog)
                                <div class="single-blog-post">
                                    <div class="blog-img">
                                        <a href="{{ route('blogs.show', $blog->slug) }}"><img src="{{ $blog->image }}"
                                                alt="{{ $blog->name }}" /></a>
                                    </div>
                                    <div class="single-blog-content">
                                        <div class="single-blog-title">
                                            <h3>
                                                <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->name }}</a>
                                            </h3>
                                        </div>
                                        <div class="blog-single-content">
                                            <p>
                                                {!! $blog->description !!}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="blog-comment-readmore">
                                        <div class="blog-readmore">
                                            <a href="{{ route('blogs.show', $blog->slug) }}">
                                                Read more
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                        {{-- <div class="blog-com">
                                        <a href="#">3 comments</a>
                                    </div> --}}
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-12">
                                {{ $blogs->links() }}
                            </div>
                        </div>
                    @else
                        <div class="text-center">
                            <h2>Không tìm kiếm được bài viết theo yêu cầu của bạn</h2>
                        </div>
                    @endif

                </div>
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="single-blog">
                        <div class="blog-left-title">
                            <h3>Tìm kiếm</h3>
                        </div>
                        <div class="side-form">
                            <form action="{{ route('blogs.list') }}" method="GET">
                                <input type="text" value="{{ $keyword ? $keyword : '' }}" name="keyword"
                                    placeholder="Tìm kiếm...." />
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="single-blog">
                        <div class="blog-left-title">
                            <h3>Danh Mục</h3>
                        </div>
                        <div class="blog-side-menu">
                            <ul>
                                @foreach ($allCategories as $category)
                                    <li><a href="#">{{ $category->name }}
                                            ({{ $category->allProducts()->count() }})
                                        </a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="single-blog">
                        <div class="blog-left-title">
                            <h3>Bài Đăng Gần Đây</h3>
                        </div>
                        <div class="blog-side-menu">
                            <ul>
                                @foreach ($latestBlogs as $blog)
                                    <li><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->name }}</a></li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <div class="single-blog">
                        <div class="blog-left-title">
                            <h3>Tags</h3>
                        </div>
                        <div class="blog-tag">
                            <ul>
                                @foreach ($tags as $tag)
                                    <li><a href="{{route('Tags.show',$tag->slug)}}">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
