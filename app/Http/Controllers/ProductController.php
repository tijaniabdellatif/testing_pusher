<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
}
