<?php


namespace App\Http\Controllers;
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
        //                live date and time
        $bongabda = new BnDateTime('now', new DateTimeZone('Asia/Dhaka'));
        $dateandtime = $bongabda->getDateTime()->format('l , j F Y , b h:i'); 
        //                breaking news all info
        $breskingdatas = breaking_news::all();
        //                Category all info
        $categoryinfos = category::where('parent_id', null)->orderBy('id','DESC')->get();

        //                post all info
        $postDatas = post::orderBy('id', 'desc')->get();

        // for frist section 3 item
        $collection = collect($postDatas);
        $frist_sec_3_item = $collection->splice(0,3);
               // for frist section 1 item
        $collection = collect($postDatas);
        $frist_sec_1_item = $collection->splice(3,1);
                // for frist section 2 item
        $collection = collect($postDatas);
        $frist_sec_2_item = $collection->splice(4,2);

        //$postDatas = post::with('categories')->orderBy('id','desc')->get();
        //$postDatas = $postDatas->categories()->where('id',13);
        // dd($postDatas);

        $postDatas = post::orderBy('id', 'desc')->get();
        
     dd();
        
        // $categorysinfo = Category::whereHas('post', function($q) use($id) {
        //         $q->where('post_id', $id);
        //     })
        //     ->with(['medicines' => function($q) use($id) {
        //         $q->where('pharmacy_id', $id);
        //     }])
        //     ->get();
        
        return view('frontend.home.index',compact('breskingdatas','dateandtime',
        'categoryinfos','frist_sec_3_item','frist_sec_1_item','frist_sec_2_item'));

    }
}
