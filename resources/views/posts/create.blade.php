@extends("layouts.app")

@section("page-title", "Laravel gruppo 4 Create")

@section("content")
    <section class="container">

        <h2 class="text-center mb-3">Aggiungi i dati di un nuovo post</h2>

        <form class="row row-cols-1 justify-content-center" action="{{ route("admin.posts.store") }}" method="POST">
            @csrf

            <div class="col-6 m-3">
                <label for="posts-title">Inserisci il titolo del post:</label>
                <input class="form-control" type="text" value="{{ old('title') }}" id="posts-title" name="title">
                @error("title")
                    <div class="alert alert-warning mt-2">Il titolo del post deve avere almeno 2 caratteri.</div>
                @enderror
            </div>

            <div class="col-6 m-3">
                <label for="posts-author">Inserisci l'autore del post:</label>
                <input class="form-control" type="text" value="{{ old('author') }}" id="posts-author" name="author">
                @error("author")
                    <div class="alert alert-warning mt-2">Il nome dell'autore del post deve avere almeno 2 caratteri.</div>
                @enderror
            </div>

            <div class="col-6 m-3">
                <label for="posts-description">Inserisci le descrizione del post:</label>
                <textarea value="{{ old('description') }}" id="posts-description" name="description">
                @error("description")
                    <div class="alert alert-warning mt-2">la descrizione del post deve avere almeno 10 caratteri.</div>
                @enderror
            </div>

            <div class="text-center">
                <button class="btn btn-primary me-3" type="submit">Aggiungi Nuovo Post</button>
                <button class="btn btn-warning" type="reset">Reset</button>
            </div>
        </form>

    </section>
@endsection
