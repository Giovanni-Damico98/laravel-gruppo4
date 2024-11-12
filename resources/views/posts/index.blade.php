@extends('layouts.app')
@section('page-title', 'Posts Home')
@section('content')
    <div class="container">
        @forelse ($posts as $post)
            <div class="row justify-content-center">
                <div class="w-50 mb-5 d-flex ">
                    <div class="card w-100 pt-2">
                        <div class="card-body">
                            <h5 class="card-title">Post: {{ $post->title }}</h5>
                            <h4 class="card-subtitle mb-2 text-muted">Autore:
                                {{ $post->author }}</h4>
                            <p class="card-text">
                                {{ $post->content }}
                            </p>
                        </div>
                        <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-primary">Visualizza</a>
                        <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn mt-2 btn-warning">Modifica</a>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12">
                <h2 class="text-center">Non è presente alcun post!</h2>
            </div>
        @endforelse
    </div>
    </div>

@endsection
