<?php

namespace App\Http\Controllers;

use App\Models\breaking_news;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\models\user;

class BreakingNewsController extends Controller
{
    public function index()
    {
        $breskingdatas = breaking_news::all();
        return view('admin.breakingNews.breaking_news',compact('breskingdatas'));
    }

    public function create()
    {    
        return view('admin.breakingNews.create_breaking_news');
    }

    public function store(Request $request)
    {
           $info = new breaking_news();
           $info->name=$request->name;
           $info->save();
           return redirect()->back()->with('msg','Breaking News Added successfully');

    }

    public function delete($id)
    {
        $breaking_newsid = breaking_news::findOrFail($id);
        $breaking_newsid->delete();
        return redirect()->back()->with('msg','Breaking News delete success');
    }



}
