@extends("layouts.app")

@section("content")
<section class="container py-4">
    <div class="row justify-content-around">
        <form class="col-12 col-md-6 card m-3" method="POST" action="{{ route("update", $post->id) }}">
            @method("PUT")
            @csrf

            <h1 class="mb-3">
                Editing {{ $post->title }}:
            </h1>
            <div class="mb-3">
                <label for="post-title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="post-title" name="title" value="{{ old('title', $post->title) }}">
                @error("title")
                    <div class="alert alert-danger"> {{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="post-author" class="form-label">Author:</label>
                <input type="text" class="form-control" id="post-author" name="author" value="{{ old('author', $post->author) }}">
            </div>
            <div class="mb-3">
                <label for="post-content" class="form-label">Content:</label>
                <input type="text" class="form-control" id="post-content" name="content" value="{{ old('content', $post->content) }}">
            </div>

            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-success me-3">
                    Editing {{ $post->title }}
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
