<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
     public function index()
    {
        return view('Frontend.News.blog');
    }
    public function show()
    {
        return view('Frontend.News.blogDetails');
    }
}
