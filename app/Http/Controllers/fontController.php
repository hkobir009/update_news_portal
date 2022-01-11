<?php


namespace App\Http\Controllers;
use App\Models\breaking_news;
use EasyBanglaDate\Types\BnDateTime;
use EasyBanglaDate\Types\DateTime as EnDateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class fontController extends Controller
{

    public function index()
    {   
        $bongabda = new BnDateTime('now', new DateTimeZone('Asia/Dhaka'));
        $dateandtime = $bongabda->getDateTime()->format('l , j F Y b h:i:s'); 

        $breskingdatas = breaking_news::all();
        return view('frontend.home.index',compact('breskingdatas','dateandtime'));
    }
}
