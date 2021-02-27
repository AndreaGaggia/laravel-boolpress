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

    public function api_categories()
    {
        return view('spa.categories');
    }

    public function api_tags()
    {
        return view('spa.tags');
    }
}
