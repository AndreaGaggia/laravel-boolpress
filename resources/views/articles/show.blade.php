@extends('layouts.base');

@section('main')
    <div class="col-md-4 mx-auto d-flex flex-column align-items-center rounded shadow py-2 px-4">
        <h2 class="text-center">{{ $article->title }}</h2>
        <h3 class="text-info"><em>di {{ $article->author }}</em></h3>
        <p>{{ $article->body }}</p>
        <p class="text-left align-self-start">Pubblicazione: {{ $article->published_at }}</p>
        <p class="bg-warning p-2 rounded font-weight-bold">
            {{ $article->cat_id ? $article->category->name : 'N/A' }}
        </p>
        <p class="text-center">
            @if (count($article->tags) > 0)
                @foreach ($article->tags as $tag)
                    <span class="py-1 px-2 rounded d-inline-block m-1"
                        style="color: {{ $tag->color }}; border: 1px solid {{ $tag->color }}">{{ $tag->name }}</span>
                @endforeach
            @else
                <em>No tags attached</em>
            @endif
        </p>
    </div>
@endsection
