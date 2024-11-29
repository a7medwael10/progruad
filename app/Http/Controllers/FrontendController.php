<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $latestProducts = Product::latest()->take(6)->get();
        return view('frontend.index',compact('latestProducts'));
    }

    public function products()
    {
        $products = Product::latest()->paginate(6);
        return view('frontend.products',compact('products'));
    }

    public function contacts(){
        $contacts = Contact::get();
        return view('frontend.contacts', compact('contacts'));
    }







}
