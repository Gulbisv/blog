<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

       return view('pages.post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('pages/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'title_desc'=>'required',
            'content'=>'required',
            'picture'=>'image|max:5000'
        ]);

        $file = $request->file('picture');
        $destinationPath = public_path('/assets/img');
        $file->move($destinationPath, $file->getClientOriginalName());

        $post = new Post([
            'title' => $request->get('title'),
            'title_desc' => $request->get('title_desc'),
            'content' => $request->get('content'),
            'picture' => $file->getClientOriginalName(),
        ]);

        $post->save();

        return redirect('/blog')->with('success', 'Post saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('pages.edit', compact('post'));


    }


    public function update(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'title_desc'=>'required',
            'content'=>'required',
            'id'=>'required'

        ]);
        $id = $request->get('id');

        $post = Post::find($id);

        if ($request->hasFile('picture')){
            $request->validate(['picture'=>'image|max:5000']);
            $file = $request->file('picture');
            $destinationPath = public_path('/assets/img');
            $file->move($destinationPath, $file->getClientOriginalName());
            $post->picture=$file->getClientOriginalName();
        }





        $post->fill([
            'title' => $request->get('title'),
            'title_desc' => $request->get('title_desc'),
            'content' => $request->get('content')
        ]);

        $post->save();

        return redirect('/blog')->with('success', 'Post saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
    }

    public function deleteById($id)
    {
        Post::find($id)->delete();
        return redirect('/blog')->with('success', 'Post saved!');

    }
}
