<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all()->take(3);
        return view('posts.index', compact('posts','categories'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();

        $inputs['slug'] = Uuid::uuid1()->toString();
        $inputs['user_id'] = Auth::id();

        $post = Post::create($inputs);

        $files = $request->file('files');

        foreach ($files as $file) {
            $path = Storage::putFile('posts', $file);
            $actualName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $size = $file->getSize();
            $name = basename($path);

            $attachment = new Attachment([
                'path' => $path,
                'extension' => $extension,
                'size' => $size,
                'name' => $name,
                'actual_name' => $actualName,
                'user_id' => Auth::id(),
            ]);

            $post->attachments()->save($attachment);
        }

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
