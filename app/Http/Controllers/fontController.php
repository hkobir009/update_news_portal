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
        

        return view('frontend.posts',compact('post'));
    
    }
}
