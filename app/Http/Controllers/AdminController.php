<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function register()
    {
        return view('admin.register');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        $products = Product::get();
        $contacts = Contact::get();
            return view('admin.dashboard-analysis',compact('products','contacts'));
    }


}
