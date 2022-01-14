<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;
use Illuminate\Support\Str;
class TagController extends Controller
{
    public function tagIndex(){
        $tagDatas = tag::get();
        return view('admin.tag.tag',compact('tagDatas'));
    }

    public function create(Request $request){
        return view('admin.tag.create_tag');
    }

    public function store(Request $request){
        $slug = Str::slug($request->name);
        $menu = new tag();
        $menu->name = $request->name;
        $menu->slug = $slug;
        $menu->save();
        return redirect()->back()->with('msg','tag Insert Successfully');
    }

    public function edit($id){
        $tagid = tag::findOrFail($id);
        return view('admin.tag.update_tag',compact('tagid'));
    }

    public function update(Request $request, $id){
        $menu = tag::findOrFail($id);
        $menu->name=$request->name;
        $menu->save();
        return redirect()->route('tag')->with('msg','tag Update Successfully');
    }

    public function delete(Request $request, $id){
        $id= tag::findOrFail($id);
        $id->delete();
        return redirect()->back()->with('msg','tag Delete successfully');
    }
}
