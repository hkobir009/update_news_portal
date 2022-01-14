<?php


namespace App\Http\Controllers;
use App\Models\breaking_news;
use App\Models\category;
use App\Models\post;
use EasyBanglaDate\Types\BnDateTime;
use EasyBanglaDate\Types\DateTime as EnDateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class fontController extends Controller
{

    public function index()
    {   //                live date and time
        $bongabda = new BnDateTime('now', new DateTimeZone('Asia/Dhaka'));
        $dateandtime = $bongabda->getDateTime()->format('l , j F Y , b h:i'); 

        //                Category all info
        $categoryinfos = category::where('parent_id', null)->orderBy('id','DESC')->get();

        //                breaking news all info
        $postDatas = post::all();

        //                breaking news all info
        $breskingdatas = breaking_news::all();
        return view('frontend.home.index',compact('breskingdatas','dateandtime','categoryinfos','postDatas'));


    }
}
