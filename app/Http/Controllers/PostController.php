<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Only 6 post show in blog 
    public function index(){
        $posts = Post::orderBy('id','desc')->take(6)->get();
        return view('posts',compact('posts'));
    }
    //All post show
    public function allposts(){
        $posts = Post::orderBy('id','desc')->get();
        return view('allposts',compact('posts'));
    }
    //Show when click detail button
    public function show($id){
       $post = Post ::find($id);
        return view('posts.show',compact('post'));
    }

    //To show create page
    public function create(){
        return view('posts.create');
    }

    //Store data to database from form request
    public function store(Request $request){
        $validate =$request->validate([
            "title"=>"required",
            "description"=>"required",
            "content"=>"required",
        ]);
        Post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'content'=>$request->content,
        ]);
        return redirect('/posts/create')->with('status','Successfully Inserted Data');
    }

        //To edit post
    public function edit($id){
        $post = Post::find($id);
        return view('posts.edit',compact('post'));
    }
    //To update post
    public function update(Request $request,$id){
        $post = Post::find($id);
            $post->title = $request->title;
            $post->description = $request->description;
            $post->content = $request->content;
            $post->update();
       
        return redirect()->route('posts');
    }

    //To delete a post
    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts');
    }

   

    
}
