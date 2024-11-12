@extends('layouts.app')
@section('page-title', 'Post Show')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center fw-bold mb-4">Post selezionato</h1>
            </div>
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
                <div class="card w-100 pt-2" style="box-shadow: 5px 5px 8px black; cursor: pointer">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Nome del progetto: <br><strong>{{ $posts->title }}</strong>
                        </h5>
                        <h4 class="card-subtitle mb-3 text-muted">Tipo di progetto: <br>
                            <strong>{{ $posts->author }}</strong>
                        </h4>
                        <p class="card-text">
                            Linguaggio utilizzato: <br><strong>{{ $posts->content }}</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
