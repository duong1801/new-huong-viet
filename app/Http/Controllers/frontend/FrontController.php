<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\AboutUs;

class FrontController extends Controller
{
    public function mainpage()
    {
        $sliders = Slider::all();
        $productRans = Product::inRandomOrder()->take(2)->get();
        $productTr = Product::where('trending', '1')->take(12)->get();
        $productLatest = Product::latest()->take(10)->get();

        $categories = Category::where('parent_id', 0)->get();

        return view('frontend.home', compact('productTr', 'productLatest', 'sliders', 'productRans', 'categories'));
    }
    public function category()
    {
        $category = Category::where('status', '0')->get();
        return view('frontend.category', compact('category'));
    }
    public function viewCategory($slug)
    {

        if (Category::where('slug', $slug)->exists()) {
            $PER_PAGE = 8;
            $cate = Category::where('slug', $slug)->first();
            $allCategories = Category::all();
            $products = $cate->allProducts()->get();

            return view('frontend.category', compact('products', 'allCategories', 'cate'));
        } else
            return view('errors.404');
    }

    public function viewCategoryFilter($slug, Request $request)
    {
        $PER_PAGE = 8;
        $minPrice = $request->input('min_price');

        $maxPrice = $request->input('max_price');

        $orderBy = $request->input('order_by');

        if (Category::where('slug', $slug)->exists()) {

            $cate = Category::where('slug', $slug)->first();
            $allCategories = Category::all();

            $products =  $cate->allProducts();

            if ($minPrice && $maxPrice) {
                $products->whereBetween('selling_price', [$minPrice, $maxPrice]);
            }

            if ($orderBy) {
                $products->orderBy($orderBy);
            }
            $products = $products->paginate($PER_PAGE);


            return view('frontend.category', compact('products', 'allCategories', 'cate'));
        }
    }
    public function productView($cate_slug, $prod_slug)
    {
        if (Category::where('slug', $cate_slug)->exists()) {
            if (Product::where('slug', $prod_slug)->exists()) {
                $product = Product::where('slug', $prod_slug)->first();
                return view('frontend.products.view', compact('product'));
            } else {
                return redirect('/')->with('status', "No Such Product Found");
            }
        } else {
            return redirect('/')->with('status', "No such Category found");
        }
    }
    public function eachProdView($prod_slug)
    {
        if (Product::where('slug', $prod_slug)->exists()) {
            $product = Product::where('slug', $prod_slug)->first();
            $similarProducts = Product::where('category_id', $product->category_id)->whereNotIn('id', [$product->id])->get();
            $discountedProducts = Product::where('selling_price', '>', 0)
                ->orderByRaw('(original_price - selling_price) / original_price DESC')
                ->limit(10)
                ->get();
            return view('frontend.products.view', compact('product', 'similarProducts', 'discountedProducts'));
        } else {
            return redirect('/')->with('status', "No Such Product Found");
        }
    }
    public function searchProduct(Request $request)
    {
        $PER_PAGE = 8;
        $search_product = $request->key;

        $products = Product::where('name', "LIKE", "%$search_product%")->paginate($PER_PAGE);
        return view('frontend.search', compact('products', 'search_product'));
    }
    public function getListBlog(Request $request)
    {

        $latestBlogs =  Blog::orderBy('created_at', 'desc')
            ->take(config('const.PER_PAGE'))
            ->get();

        $keyword = $request->keyword;
        $allCategories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::where('name', "LIKE", "%$keyword%")->where('is_draft', '=', '1')->paginate(config('const.PER_PAGE'));
        return view('frontend.blog.list', compact('blogs', 'tags', 'latestBlogs', 'allCategories', 'keyword'));
    }

    public function showBlog($slug)
    {
        if (Blog::where('slug', $slug)->exists()) {
            $blog =  Blog::where('slug', $slug)->first();
            $latestBlogs =  Blog::orderBy('created_at', 'desc')
                ->take(config('const.PER_PAGE'))
                ->get();
            $allCategories = Category::all();
            $tags = Tag::all();
            return view('frontend.blog.show', compact('blog', 'tags', 'latestBlogs', 'allCategories'));
        } else
            return view('errors.404');
    }

    public function showTag($slug)
    {
        if (Tag::where('slug', $slug)->exists()) {
            $tag =  Tag::where('slug', $slug)->first();

            return view('frontend.tag', compact('tag'));
        } else
            return view('errors.404');
    }
    public function shop()
    {
        $PER_PAGE = 8;
        $allCategories = Category::all();
        $products = Product::paginate($PER_PAGE);
        return view('frontend.shop', compact('products', 'allCategories'));
    }

    public  function shopFilter(Request $request)
    {
        $PER_PAGE = 8;
        $allCategories = Category::all();

        $minPrice = $request->input('min_price');

        $maxPrice = $request->input('max_price');

        $orderBy = $request->input('order_by');



        $products = Product::query();

        if ($minPrice && $maxPrice) {
            $products->whereBetween('selling_price', [$minPrice, $maxPrice]);
        }

        if ($orderBy) {
            $products->orderBy($orderBy);
        }
        $products = $products->paginate($PER_PAGE);
        return view('frontend.shop', compact('products', 'allCategories'));
    }
    public function AboutUs()
    {
        $aboutUs = AboutUs::first();
        return view('frontend.About', compact('aboutUs'));
    }
}
