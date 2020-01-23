<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\categorie;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Posts = Post::where('user_id',Auth::user()->id)->get();
        return view('posts.index',compact('Posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = categorie::all();
        $post = new Post();
        $btnText = 'Añadir';
        return view('posts.create',compact('categories','btnText','post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->title = request('title');
        $post->excerpt = request('excerpt');
        $post->body =request('body');
        $post->category_id = request('category');
        $post->image = request('img');
        $post->save();
        return redirect(route('Post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Post = Post::find($id);
        return view('posts.show',compact('Post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = categorie::all();
        $btnText = 'Editar';
        $post = Post::find($id);
        return view('posts.edit',compact('post','btnText','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->user_id = Auth::user()->id;
        $post->title = request('title');
        $post->excerpt = request('excerpt');
        $post->body =request('body');
        $post->category_id = request('category');
        $post->image = request('img');
        $post->save();
        return redirect(route('Post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect(route('Post.index'));
    }
}
