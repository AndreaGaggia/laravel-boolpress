@extends('layouts.base')

@section('main')
    <div class="mb-2">
        <a href="{{ route('articles.create') }}" class="btn btn-lg btn-warning">Create a new article</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">body</th>
                <th scope="col">author</th>
                <th scope="col">pub date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{ $article->id }}</th>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->body }}</td>
                    <td>{{ $article->author }}</td>
                    <td>{{ $article->published_at }}</td>
                    <td class="d-flex flex-column">
                        <a href="{{ route('articles.show', ['article' => $article->id]) }}"
                            class="text-secondary">show</a>
                        <a href="{{ route('articles.edit', ['article' => $article->id]) }}" class="text-primary">edit</a>
                        <!-- Button trigger modal -->
                        <a class="text-danger" data-toggle="modal" data-target="#delete-{{ $article->id }}" role="button">
                            delete
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="delete-{{ $article->id }}" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Will delete
                                            <em class="font-weight-bold">"{{ $article->title }}"</em>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        This is irreverisible. Are you sure?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nooooo</button>
                                        <form action="{{ route('articles.destroy', ['article' => $article->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Yeah, Delete" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
