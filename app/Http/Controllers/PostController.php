<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Post[]|Collection
     */
    public function index()
    {
        return Post::latest()->paginate();
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
        $post->content = $request->input('body');
        $post->title = $request->input('title');
        $post->user_id = 1;
        $post->save();
        return $post;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if($request->has('body')) {
            $post->content = $request->input('body');
        }
        if($request->has('title')) {
            $post->title = $request->input('title');
        }
        $post->save();
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response('', 200);
    }
}
