@extends('layouts.app')
@section('page-title', 'Posts Home')
@section('content')
    <div class="container">
        <div class="row justify-content-center">

            {{--
            !!! TODO !!!
            --}}
            {{-- <div class="col-12 text-center my-4">
                <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Crea un nuovo progetto</a>
            </div> --}}

            @forelse ($posts as $post)
                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card w-100 pt-2">
                        <div class="card-body">
                            <h5 class="card-title">Post: {{ $post->title }}</h5>
                            <h4 class="card-subtitle mb-2 text-muted">Autore:
                                {{ $post->author }}</h4>
                            <p class="card-text">
                                {{ $post->content }}
                            </p>
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
