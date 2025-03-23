<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;


use League\CommonMark\Extension\DescriptionList\Node\Description;
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

    $users = User::all();

    return view('posts.create',['users' => $users]);

}
public function store(){

    // $request = request();

    // dd($request->title,$request->all());

    $data = request()->all();

    $title = request()->title;
    $describtion = request()->description;
    $post_Creator = request()->post_Creator;


    Post::create([
        'title' => $title,
        'description' => $describtion,
        // 'post_Creator',
    ]);

    // dd($data,$title,$describtion,$post_Creator);
    // return $data;

    return to_route('posts.index');
}


public function edit(Post $post){

    $users = User::all();


    return view('posts.edit',['users'=> $users,'post'=>$post]);
}
public function update($postId){
    

    $title = request()->title;
    $description = request()->description;
    $post_Creator = request()->post_Creator;

    
    // dd($title,$describtion,$post_Creator);
    $singlePostsFromDB = Post::findOrFail($postId);
    $singlePostsFromDB->update([
        'title'=>$title,
        'description'=>$description,
    ]);

    return to_route('posts.show',$postId);
}
public function destroy(){
    

    
    return to_route('posts.index');
}


}


