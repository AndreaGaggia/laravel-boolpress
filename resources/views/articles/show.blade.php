@extends('layouts.base');

@section('main')
    <div class="d-flex flex-column align-items-center">
        <h2>{{ $article->title }}</h2>
        <h3 class="text-info"><em>di {{ $article->author }}</em></h3>
        <p>{{ $article->body }}</p>
        <p>Pubblicazione: {{ $article->published_at }}</p>
        <p class="bg-warning p-2 rounded font-weight-bold">
            {{ $article->cat_id ? $article->category->name : 'N/A' }}
        </p>
    </div>
@endsection
