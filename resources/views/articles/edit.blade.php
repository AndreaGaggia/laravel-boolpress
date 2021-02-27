@extends('layouts.base');

@section('main')
    <h2>Modifica l'article compilando il form</h2>
    <form action="{{ route('articles.update', ['article' => $article->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titolo del article</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $article->title }}">
            <small class="form-text text-muted">Ricorda, deve essere breve e di impatto.</small>
        </div>
        <div class="from-group">
            <label for="author">Autore del article</label>
            <input type="text" class="form-control" name="author" id="author" value=" {{ $article->author }} ">
        </div>
        <div class="form-group">
            <label for="body">Testo del article</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="3">{{ $article->body }}</textarea>
        </div>
        <div class="form-group">
            <label for="published_at">Data di pubblicazione</label>
            <input class="form-control" type="date" name="published_at" id="published_at"
                value="{{ $article->published_at }}">
        </div>
        <button type="submit" class="btn btn-danger">Modifica</button>
    </form>
@endsection
