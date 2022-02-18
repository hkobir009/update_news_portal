<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function adsIndex(){
        //$adsDatas = Ads::get();
        return view('admin.ads.ads');
    }

    public function create(Request $request){
        return view('admin.ads.create_ads');
    }

    public function store(Request $request){
        
        // $ads = new Ads();
        // $ads->first_left_img_url = $request->first_left;
        // $ads->first_left_img_target_url = $request->first_left_target;
        // $ads->save();
        // return redirect()->back()->with('msg','Ads Insert Successfully');
    }

    public function edit($id){
        $adsid = Ads::findOrFail($id);
        return view('admin.ads.update_ads');
    }

    public function update(Request $request, $id){
        // $ads = Ads::findOrFail($id);
        // $ads->first_left_img_url = $request->first_left;
        // $ads->first_left_img_target_url = $request->first_left_target;
        // $ads->save();
        // return redirect()->route('ads')->with('msg','Ads Update Successfully');
    }

    public function delete(Request $request, $id){
        // $id= Ads::findOrFail($id);
        // $id->delete();
        // return redirect()->back()->with('msg','Ads Delete successfully');
    }
}
