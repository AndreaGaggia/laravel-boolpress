<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function api_articles()
    {
        return view('spa.articles');
    }
}
