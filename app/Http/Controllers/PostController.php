<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();

        /*$request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);*/

        $inputs['slug'] = Uuid::uuid1()->toString();
        $inputs['user_id'] = Auth::id();

//        dd($inputs);

        $store = Post::create($inputs);
        return redirect()->route('post.index')->with('success','Post created successfully!');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',

            ]);
        $post = new Post();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->description = $request->description;


        $post->save();
        return redirect('/home')->with('success','Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/home')->with('success','Post deleted successfully!');
    }
}
