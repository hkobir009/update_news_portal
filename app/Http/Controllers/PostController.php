<?php

namespace App\Http\Controllers;

use App\Models\tag;
use App\Models\post;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File; 
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\ImageManagerStatic as Image;


class PostController extends Controller
{
    public function postIndex(Request $request){
        $postdatas = post::with('categories')->orderBy('id','desc')->get();
        //$post_category = category::with('posts')->orderBy('id','desc')->get();
     //    foreach($postdatas as $categorys){
     //        foreach($categorys->categories as $category){
     //              $category;
     //      }
     //     }
         //dd($category);
        
 //                 for datatable
     //    if ($request->ajax()) {
     //     $data = post::select('*');
     //     return DataTables::of($data)
     //             ->addIndexColumn()
     //             ->rawColumns(['action'])
     //             ->make(true);
     // }
 
 
         return view('admin.post.post',compact('postdatas'));
     }
 
     public function create(Request $request){
         $postdatas = post::with('user')->orderBy('id','desc')->get();
         $parantNames = category::orderBy('id','desc')->get();
         $tagdatas = tag::orderBy('id','desc')->get();
         return view('admin.post.create_post',compact('parantNames','postdatas','tagdatas'));
     }
 
     public function store(Request $request){
         $slug = $request->title;
         function make_slug($slug) {
             return preg_replace('/\s+/u', '-', trim($slug));
         }
         $slug = $request->title;
         $slug = make_slug($slug);
 
         $post = new post();
         $post->user_id = Auth::id();
         $post->title = $request->title;
         $post->slug = $slug;
         $post->body = $request->body;
     
         //       for Image uploads
         if($request->hasfile('image'))
         {
                // make unique name for image
          $image = $request->file('image');   
          
        //  foreach ($image as $key => $multi_image){
             
             $fileName =time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
             Image::make($image)->save('post/'.$fileName);
             $save_img='post/'.$fileName;
             // $file->move('post/',$fileName);
             $post->image = $save_img;
        //  }
              
         }
         
         $post->save();
         $post->categories()->attach($request->categories);
         $post->tags()->attach($request->tags);
 
         return redirect()->back()->with('msg','Post Created Successfully');
 
 
     }
 
     public function edit($id){
         $postshowid = post::findOrFail($id);
         $parantNames = category::get();
         $tagdatas = tag::get();
         return view('admin.post.update_post',compact('postshowid','parantNames','tagdatas'));
     }
     
     public function update(Request $request, $id){
         $post = post::findOrFail($id);
         $slug = Str::slug($request->title);
         $post->title = $request->title;
         $post->slug = $slug;
         $post->body = $request->body;
 
             //       for Image uploads
             if($request->hasfile('image'))
             {
             
             $filepath=$post->image;
             if (File::exists($filepath)) 
             {  
                 File::delete($filepath);
             }  

             $image = $request->file('image');   
          
             //  foreach ($image as $key => $multi_image){
                  
                  $fileName =time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
                  Image::make($image)->save('post/'.$fileName);
                  $save_img='post/'.$fileName;
                  // $file->move('post/',$fileName);
                  $post->image = $save_img;
             //  }
             }else{
                $fileName = $post->image;
             }
 
         $post->update();
         $post->categories()->sync($request->categories);
         $post->tags()->sync($request->tags);
         return redirect()->route('blog_post')->with('msg','Post Updated Successfully');
     }
 
     public function delete(Request $request, $id){
         $postid= post::findOrFail($id);
 
         $filepath=$postid->image;
 
         if (File::exists($filepath)) 
             {  
              File::delete($filepath);
             }  
         $postid->categories()->detach();
         $postid->tags()->detach();
         $postid->delete();
         return redirect()->back()->with('msg','post Delete successfully');
     }

}
