<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post_Controller extends Controller
{
 public function index()
 {
    $allPosts = [
        ["id"=>1,"title"=>"PHP","Posted_by" =>"Ahmed","Created_at" => '2022-1-31 09:00:00'],
        ["id"=>2,"title"=>"CS","Posted_by" =>"Amr","Created_at" => '2022-10-6 15:00:00'],
        ["id"=>3,"title"=>"JS","Posted_by" =>"Mohamed","Created_at" => '2022-7-20 01:00:00'],   
        ["id"=>4,"title"=>"PHP","Posted_by" =>"Refai","Created_at" => '2022-9-12 05:00:00'],
    ];
    return view("Posts.index",['Posts'=>$allPosts]);
 }

 public function show($postID)
 {
    $singlePost = ["id"=>1,"title"=>"PHP",'Description'=>'PHP is cool language',"Posted_by" =>"Ahmed","Created_at" => '2022-1-31 09:00:00'];
  return view('posts.show',['post'=> $singlePost] );
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


