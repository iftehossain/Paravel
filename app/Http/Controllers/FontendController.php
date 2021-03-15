<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Category;
Use App\Models\Product;
use App\Models\Faq;
use App\Models\Header;

class FontendController extends Controller
{
    function index(){
        $headers = Header::all();
        $categories = Category::all();
        $products = Product::latest()->get();
        return view('welcome', compact('categories', 'products', 'headers'));
    }
    function about(){
        return view('about');
    }
    function frontend_contact(){
        return view('contact');
    }
    function product_details($product_id){
        $faqs = Faq::all();
        $products = Product::find($product_id);
        $category_info = Category::find($products->category_id);
        return view('product_details', compact('products', 'category_info', 'faqs'));
    }
}
