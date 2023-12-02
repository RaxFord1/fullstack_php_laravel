<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Stylist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posts = Post::all();

        return view('posts.create', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'text' => 'required|string',
        ]);

        Post::create($data);

        // DB::insert('insert into posts (title, text) values (?, ?)', [$data['title'], $data['text']]);

        return redirect()->route('posts.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'required|string',
            'text' => 'required|string',
        ]);

        $post->update($data);

        // DB::update('update posts set title = ?, text = ? where id = ?', [$data['title'], $data['text'], $post->id]);

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        // DB::delete('delete from posts where id = ?', [$post->id]);

        return redirect()->route('posts.index');

    }
}
