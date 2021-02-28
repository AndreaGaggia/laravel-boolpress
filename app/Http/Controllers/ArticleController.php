<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Tag;
// use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('articles.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->tags);

        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'published_at' => 'required',
            'cat_id' => 'exists:categories,id',
            'tags' => 'exists:tags,id',
        ]);

        Article::create($validated);

        $last_article = Article::orderBy('id', 'desc')->first();
        $last_article->tags()->attach($request->tags);

        return redirect()->route('articles.show', $last_article);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('articles.edit', compact('article', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //dd($request->all());

        //validation
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'published_at' => 'required',
            'cat_id' => 'exists:categories,id',
            'tags' => 'exists:tags,id',
        ]);

        $article->update($validated);
        $article->tags()->sync($request->tags);
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}
