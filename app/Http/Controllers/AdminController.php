<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\banner;

class AdminController extends Controller
{
    public function index()
    {
        $count = [
            'user' => User::count(),
            'product' => Product::count(),
            'category' => Category::count()
        ];
        return view('admin.content.dashboard', $count);
    }


    public function category()
    {
        $data = category::all();


        return view('admin.content.category', compact('data'));
    }


    public function addCategory(Request $request)
    {
        $data = new category;
        $data -> category_name = $request->category;

        $data -> save();
        return redirect()->back()->with('message','Category Added Succesfully');
    }


    public function deleteCategory($id)
    {
        $data = category::find($id);
        $data -> delete();
        return redirect()->back()->with('message', 'Category Deleted Succesfully');
    }


    public function showProduct()
    {   
        $product = product::all();
        return view('admin.content.product', compact('product'));
    }


    public function vAddProduct()
    {
        $category = category::all();
        
        return view('admin.content.addProduct', compact('category'));
    }


    public function addProduct(Request $request)
    {
        $product = new product;

        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->category_name=$request->category;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product', $imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message', 'Product Added Succesfully');
    }


    public function deleteProduct($id)
    {
        $product = product::find($id);
        $product -> delete();

        return redirect()->back()->with('message', 'Product Deleted Succesfully');
    }


    public function editProduct($id)
    {
        $product = product::find($id);
        $category = category::all();

        return view('admin.content.editProduct', compact('product', 'category'));
    }


    public function editProductConfirm(Request $request, $id)
    {
        $product = product::find($id);

        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->category_name=$request->category;

        $image = $request->image;
        if ($image) 
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product', $imagename);

            $product->image=$imagename;
        }


        $product->save();

        return redirect()->back()->with('message', 'Product edited Succesfully');
    }


    public function tableUser()
    {
        $tableUser = user::all();

        return view('admin.content.tableUser', compact('tableUser'));
    }


    public function deleteUser($id)
    {
        $dUser = user::find($id);
        $dUser -> delete();

        return redirect()->back()->with('message', 'User Deleted Succesfully');
    }


    public function showBanner()
    {
        $banner = banner::all();
        return view('admin.content.banner', compact('banner'));
    }


    public function vAddBanner()
    {
        return view('admin.content.addBanner');
    }


    public function addBanner(Request $request)
    {
        $banner = new banner;

        $banner->title=$request->title;
        $banner->description=$request->description;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('banner', $imagename);

        $banner->image=$imagename;

        $banner->save();

        return redirect()->back()->with('message', 'Banner Added Succesfully');
    }


    public function deleteBanner($id)
    {
        $banner = banner::find($id);
        $banner -> delete();

        return redirect()->back()->with('message', 'Banner Deleted Succesfully');
    }


    public function profile()
    {
        return view('admin.content.profile');
    } 
}