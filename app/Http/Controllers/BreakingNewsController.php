<?php

namespace App\Http\Controllers;

use App\Models\breaking_news;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\models\user;

class BreakingNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breskingdatas = breaking_news::all();
        return view('admin.breakingNews.breaking_news',compact('breskingdatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        // Role::create(['name' => 'Super Admin']);
        // Role::create(['name' => 'Admin']);
        // Role::create(['name' => 'User']);
        //$role = User::createRole('Super Admin');
        //$role->givePermissionTo('post.create');

        //$logedinuser= request()->user();
        


        return view('admin.breakingNews.create_breaking_news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // breaking_news::create([
        //     'name'=>$request->name,
        // ]);
        // return redirect()->back()->with('msg','insert successfully');
        
           $info = new breaking_news();
           $info->name=$request->name;
           $info->save();
           return redirect()->back()->with('msg','insert successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\breaking_news  $breaking_news
     * @return \Illuminate\Http\Response
     */
    public function show(breaking_news $breaking_news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\breaking_news  $breaking_news
     * @return \Illuminate\Http\Response
     */
    public function edit(breaking_news $breaking_news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\breaking_news  $breaking_news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, breaking_news $breaking_news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\breaking_news  $breaking_news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = breaking_news::findOrFail($id);
        $id->delete();
        return redirect()->back()->with('msg','delete success');
    }
}
