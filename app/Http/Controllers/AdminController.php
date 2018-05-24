<?php

namespace App\Http\Controllers;

use App\Post;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use File;
use Image;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        return view('administration.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administration.addpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Post $post)
    {
        //
        $validatedData = $request->validate([
            'category'=>'required',
            'title' => 'required|unique:posts|max:255',
            'photo' => 'sometime',
            'description'=>'required|min:50|max:5000',
        ]);
        
        $photo='default.jpg';
        if($request->hasFile('photo')){
            $destinationPath='images/posts_caption/';
            $file=$request->photo;
            $extension=$file->getClientOriginalExtension();
            $fileName=rand(0101,9999).$post->id.$extension;
            Image::make($file)->resize(400,300);
            $file->move($destinationPath,$fileName);

            $photo=$fileName;
        }

        if(Auth::check()){
            $post=Post::create([
                'category'=>$request->input('category'),
                'title'=>$request->input('title'),
                'photo'=>$photo,
                'description'=>$request->input('description'),
            ]);
            if($post){
                return redirect()->route('administration.create')->with('success','Successfully uploaded your post');
            }

        }
        return back()->withInput()->with('errors','Post NOT uploaded,please retry');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
       // $all_posts=Post::all();



        $post=Post::where('id',$post->id)->first();
        dd($post);
        return view('administration.editPost')->with(compact('post'));



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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $findPost=Post::find($post->id);
        dd($findPost);
    }
    public function viewPosts(){
        $users=1;
        $post=DB::table('posts')->orderBy('created_at','desc')->get();
        return view('administration.show')->with(compact('post','users'));
    }
    public function editPosts(){
        $users=1;
        $post=DB::table('posts')->orderBy('created_at','desc')->get();
        return view('administration.edit')->with(compact('post','users'));
    }
    public function deletePost(){
        $users=1;
        $post=DB::table('posts')->orderBy('created_at','desc')->get();
        return view('administration.delete')->with(compact('post','users'));
    }
}
