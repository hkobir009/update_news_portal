<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function category(){
        $getdata = category::where('parent_id', null)->get();
        return view('welcome',compact('getdata'));

    }

    public function deshboardIndex(){
        $datas = category::get();
        return view('admin.category.category',compact('datas'));
    }

    public function create(Request $request){

        $parantNames= category::where('parent_id',null)->get();
        return view('admin.category.create_category',compact('parantNames'));
    }

    public function store(Request $request){

        $slug = Str::slug($request->name);
        $menu = new category();
        $menu->name = $request->name;
        $menu->parent_id = $request->parent_id ;
        $menu->target_url = $request->target_url;
        $menu->slug = $slug;
        $menu->save();
        return redirect()->back()->with('msg','Data Insert Successfully');
    }

    public function edit($id){
        $data = category::findOrFail($id);
        return view('admin.category.update_category',compact('data'));
    }

    public function update(Request $request, $id){
        $menu = category::findOrFail($id);
        $menu->name=$request->name;
        $menu->target_url=$request->target_url;
        $menu->slug=$request->slug;
        $menu->save();
        return redirect()->route('category')->with('msg','Category Update Successfully');
    }

    public function delete(Request $request, $id){
        $id= category::findOrFail($id);
        $id->delete();
        return redirect()->back()->with('msg','Category Delete successfully');
    }
}

