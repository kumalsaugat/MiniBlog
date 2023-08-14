<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = $request->user();
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $user->post()->save($post);
        return redirect (route('dashboard'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view ('EditPost', [
            'post'=> $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect(route('dashboard'))->with('status','Post Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $post = Post::destroy($id);
        return redirect(route('dashboard'))->with('status','Post Deleted !!');
    }
}
