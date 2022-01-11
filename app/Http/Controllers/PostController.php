<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\post;

class PostController extends Controller
{
    public function postIndex(Request $request){
        $postdatas = post::with('user')->get();
        return view('admin.post.post',compact('postdatas'));
    }

    public function create(Request $request){
        $postdatas = post::get();
        $parantNames = category::get();
        return view('admin.post.create_post',compact('parantNames','postdatas'));
    }

    public function store(Request $request){
        $post = new post();
        $post->user_id=$request->user_id;
        $post->title=$request->title;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->slug=$request->slug;
        $post->save();
        return redirect()->back()->with('msg','Post Created Successfully');
    }

    public function edit($id){
        $data = post::findOrFail($id);
        return view('admin.post.update_post',compact('data'));
    }

    




}
