<?php


namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\breaking_news;
use App\Models\category;
use App\Models\post;
use EasyBanglaDate\Types\BnDateTime;
use EasyBanglaDate\Types\DateTime as EnDateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fontController extends Controller
{

    public function index()
    {
        return view('frontend.home.index');
    }

    public function posts($category ,$id)
    {

        $post = post::with('categories')->where('id',$id)->firstOrFail();
        // view count
        DB::table('posts')->where('id',$id)->increment('view_count');

         // post time show
         $postTime = $post->created_at;
         $banglatime = new BnDateTime($postTime, new DateTimeZone('Asia/Dhaka'));
         $postTime = $banglatime->getDateTime()->format('l , j F Y , b h:i');

         //for related posts quary
         $categories = category::with('posts')->where('slug',$category)->get();
         foreach($categories as $category){
            $allposts =$category->posts;
        }
        //dd($allposts);
        // $velus = json_decode(json_encode($categories));
        // foreach($velus as $velu){
        //       $allposts = $velu->posts;
        //     }
        
        //for related posts 1
        $collection = collect($allposts);
        $related_posts = $collection->splice(0,6);
        //for related posts 2
        $collection = collect($allposts);
        $related_posts_2 = $collection->splice(6,6);
        
        return view('frontend.posts',compact('post','postTime','related_posts','related_posts_2'));
    
    }
    // public function test()
    // {

    //     $post = post::firstOrFail();
    //     $post = $post->created_at;
    //     return $post;
    //     //dd($post);

    //     return view('frontend.posts',compact('post'));
    
    // }
}
