<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all()->paginate(5);

        return view('tags.index', compact('tags'));
    }


    public function create()
    {
        return view('tags.create');
    }


    public function store(Request $request)

    {
        $inputs = $request->all();
        $inputs['slug'] = Uuid::uuid1()->toString();
        // $request->validate([
        //     'name' => 'required',
        //     'slug' => 'required',
        // ]);
             Tag::create($inputs);
         return redirect()->route('tag.index')->with('success','Tag created successfully!');

            // Tag::create($request->all());

        // return redirect()->route('tag.index')
                        // ->with('success','Tag created successfully.');
    }


    public function show(Tag $tag)
    {
        return view('tags.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('tags.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $tag->update($request->all());

        return redirect()->route('tag.index')
                        ->with('success','Tag updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tag.index')
                        ->with('success','Tag deleted successfully');
    }
}
