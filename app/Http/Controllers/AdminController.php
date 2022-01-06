<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {

        // $product = Product::with('categories')->get();
        // dd($product);

        return view('admin.home');
    }
}
