<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\post;

class PostController extends Controller
{
    public function postIndex(Request $request){
        $postdatas = post::get();
        $datas = post::pluck('id')->toArray();
        $usernamedatas = $datas->user->name;
        dd($usernamedatas);
        // return view('admin.post.post',compact('postdatas','usernamedatas'));
    }

    public function create(Request $request){
        $parantNames = category::get();
        return view('admin.post.create_post',compact('parantNames'));
    }


}
