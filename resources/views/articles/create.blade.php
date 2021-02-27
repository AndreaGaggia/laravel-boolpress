@extends('layouts.base');

@section('main')
    <h2>Crea un nuovo article compilando il form</h2>
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo del article</label>
            <input type="text" class="form-control" name="title" id="title">
            <small class="form-text text-muted">Ricorda, deve essere breve e di impatto.</small>
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="from-group">
            <label for="author">Autore del article</label>
            <input type="text" class="form-control" name="author" id="author">
        </div>
        @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="body">Testo del article</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="3"></textarea>
        </div>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="published_at">Data di pubblicazione</label>
            <input class="form-control" type="date" name="published_at" id="published_at">
        </div>
        @error('published_at')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="cat_id">Categoria</label>
            <select name="cat_id" id="cat_id">
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-danger">Crea</button>
    </form>
@endsection
