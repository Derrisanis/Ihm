<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{

/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
          
          $posts= Post::orderBy('id','desc')->paginate(9);
          
          return view("Posts.post")->with("posts",$posts); 
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("Posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           'image'=>'required',
           'txt'=>'required'
       
       ]);
    
      if($request->hasFile('image')){
        $f1=$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('\public\store',$f1);
      
      }
      if($request->hasFile('txt')){
        $file1=$request->file('txt')->getClientOriginalName();
        $request->file('txt')->storeAs('\public\store',$file1);
       
      }
      $post =new Post;
      $post->path=('/storage/store/'.$f1);
      $post->meta=('/storage/store/'.$file1);
      $post->user_id = auth()->user()->id;
      $post->save();
      return redirect("home");
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
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete(); 
        return redirect('home');

    }
}
