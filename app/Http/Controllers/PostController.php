<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post=Post::all();
        return view('posts.index')->with(compact('post'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        $post=Post::where('id',$post->id)->first();
        return view('posts.read-post')->with(compact('post'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $post=Post::where('id',$post->id)->first();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //

    }
    public function showCelebrities(){
        $post=DB::table('posts')->where('category','Celebrity')->get();
        return view('posts.celebrities')->with(compact('post'));
    }
    public function showPolitics(){
        $post=DB::table('posts')->where('category','Politics')->get();

        return view('posts.politics')->with(compact('post'));
    }
    public function showSports(){
        $post=DB::table('posts')->where('category','Sports')->get();

        return view('posts.sports')->with(compact('post'));

    }
    public function showTrends(){
        $post=DB::table('posts')->where('category','Trends')->get();

        return view('posts.trends')->with(compact('post'));

    }
    public function showCampusVibe(){
        $post=DB::table('posts')->where('category','Campus Vibe')->get();

        return view('posts.campus-vibe')->with(compact('post'));

    }
    public function showRelationships(){
        $post=DB::table('posts')->where('category','Relationships')->get();

        return view('posts.relationships')->with(compact('post'));

    }
    public function showHealth(){
        $post=DB::table('posts')->where('category','Health')->get();

        return view('posts.health')->with(compact('post'));

    }
    public function showBettingTips(){
        $post=DB::table('posts')->where('category','Betting tips')->get();

        return view('posts.betting-tips')->with(compact('post'));

    }
    public function showMovies(){
        $post=DB::table('posts')->where('category','Movies')->get();

        return view('posts.movies')->with(compact('post'));

    }
    public function showUnclassified(){
        $post=DB::table('posts')->where('category','Unclassified')->get();
        return view('posts.unclassified')->with(compact('post'));

    }

}
