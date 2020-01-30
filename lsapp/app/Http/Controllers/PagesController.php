<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('index');
    }
    public function index(){
        $posv=Post::all();
        $post=$posv->count();
        return view('index')->with('post',$post);
    }
    public function WelcomePage(){
        $posv=Post::all();
        $post=$posv->count();
       return view('welcome')->with('post',$post);

    }
   
}
