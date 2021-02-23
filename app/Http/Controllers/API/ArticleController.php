<?php

namespace App\Http\Controllers\API;

use App\Article;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function expose()
    {
        return response()->json([
            'success' => true,
            'response' => Article::all(),
        ]);
    }
}
