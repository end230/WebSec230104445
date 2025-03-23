<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

use function PHPUnit\Framework\isNull;

class Post_Controller extends Controller
{
 public function index()
 {
    $postsFromDM = post::all();
        
    return view("Posts.index",['Posts' => $postsFromDM]);
 }

 public function show(Post $post)
 {

    // $singlePostsFromDB = Post::findOrFail($postID);

  return view('posts.show',['post'=> $post] );

}

public function create(){

    return view('posts.create');

}
public function store(){

    // $request = request();

    // dd($request->title,$request->all());

    $data = request()->all();

    $title = request()->title;
    $describtion = request()->description;
    $post_Creator = request()->post_Creator;

    // dd($data,$title,$describtion,$post_Creator);
    // return $data;

    return to_route('posts.index');
}


public function edit(){

    return view('posts.edit');
}
public function update(){
    

    $title = request()->title;
    $describtion = request()->description;
    $post_Creator = request()->post_Creator;

    
    // dd($title,$describtion,$post_Creator);
   
    return to_route('posts.show',1);
}
public function destroy(){
    

    
    return to_route('posts.index');
}


}


