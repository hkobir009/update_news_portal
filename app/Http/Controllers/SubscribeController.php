<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function subIndex(){
        $subDatas = Subscribe::orderBy('id','desc')->get();
        return view('admin.partial.subscribe',compact('subDatas'));
    }


    public function store(Request $request){
        
        $subscribe = new Subscribe();
        $subscribe->email = $request->email;
        $subscribe->save();
        return redirect()->back()->with('msg','Subscribe Insert Successfully');
    }


    public function delete(Request $request, $id){
        $id= Subscribe::findOrFail($id);
        $id->delete();
        return redirect()->back()->with('msg','Subscribe Delete successfully');
    }
}
