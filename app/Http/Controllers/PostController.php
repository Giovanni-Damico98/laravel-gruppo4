<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { {
            $posts = Post::all();
            return view("posts.index", compact("posts"));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posts = Post::all();
        return view("posts.create", compact("posts"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => ["required", "string", "min:4", "max:100"],
            "author" => ["required", "string", "min:4", "max:100"],
            "description" => ["required", "string", "min:10", "max:255"],
        ]);

        $post = new Post();

        $data->request::all();

        $post = Post::create($data);

        return redirect()->route("admin.posts", [$post->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = Post::findOrFail($id);
        return view("posts.show", compact("posts"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        return view("posts.edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $post = Post::findOrFail($id);

        $post->update($data);

        return redirect()->route("posts.show", [$post->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
