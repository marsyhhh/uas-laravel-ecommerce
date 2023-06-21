<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\banner;


class HomeController extends Controller
{
    public function index()
    {
        $product = product::latest()->paginate(4);
        $banner = banner::all();
        return view('page.content.home', compact('product', 'banner'));
    }


    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.content.profile');
        }
        else{
            $product = product::latest()->paginate(4);
            $banner = banner::all();
            return view('page.content.home', compact('banner','product'));
        }
    }

    public function shop()
    {
        if (Auth::check()) {
            $product = product::all();
            $category = category::all();
            return view('page.content.shop', compact('product', 'category'));
        }
        else{
            return view('auth.login');
        }
    }


    public function categoryShop($slug)
    {
        $category = category::all();

        $categories = category::where('category_name', $slug)->first();
        $product = product::where('category_name', $categories->category_name)->get();
        return view('page.content.categoryShop', compact('category', 'categories', 'product'));

    }


    public function detailShop($id)
    {
        $product = product::find($id);
        return view('page.content.detailShop', compact('product'));
    }


    public function companyProfile()
    {
        return view('page.content.companyProfile');
    }
}