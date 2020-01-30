<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class SearchController extends Controller
{
    public function search(Request $request){
        $this->validate($request,[
            'search'=>'required'
        ]);
           $post=null;
           $i=1;
           $posts=Post::all();
        foreach($posts as $pos){
           
            $file=file_get_contents(URl($pos->meta));
            $data=json_decode($file,true);
            foreach($data["meta"]["clinical"] as $d ){

            if(strpos($d,$request->search) !== false)
            {  
               
                    $post[$i]=$pos;
                    $i++;
           } 
        }
        }if($i>1){
            return view('search')->with('post',$post);
         } else{ $post=null;
             return view('search')->with('post',$post);
    
        }
}
}