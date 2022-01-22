<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Ads;
use App\Models\breaking_news;
use App\Models\category;
use App\Models\post;
use EasyBanglaDate\Types\BnDateTime;
use DateTimeZone;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::share('key', 'value');
        $bongabda = new BnDateTime('now', new DateTimeZone('Asia/Dhaka'));
        $dateandtime = $bongabda->getDateTime()->format('l , j F Y , b h:i'); 
        //                breaking news all info
        $breskingdatas = breaking_news::all();
        //                Category all info
        $categoryinfos = category::where('parent_id', null)->orderBy('id','DESC')->get();
        //                Ads all info
        $adsData = Ads::orderBy('id', 'desc')->get();

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

        //for letest section
        $collection = collect($postDatas);
        $letest_datas = $collection->splice(0,10);

        //for secound section
        $collection = collect($postDatas);
        $secound_sec_item_1 = $collection->splice(7,12);

        //for health section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',23)
            ->orderBy('id', 'desc')->get();

            //for health section 1
        $collection = collect($category_wize_post);
        $helth_sec_1_item = $collection->splice(0,1);
        //for health section 2 
        $collection = collect($category_wize_post);
        $helth_sec_2_item = $collection->splice(1,2);
        //for health section 3 
        $collection = collect($category_wize_post);
        $helth_sec_3_item = $collection->splice(3,15);

                //for probas section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',49)
            ->orderBy('id', 'desc')->get();

            //for probas section 1
        $collection = collect($category_wize_post);
        $probas_sec_1_item = $collection->splice(0,4);
        //for probas section 2 
        $collection = collect($category_wize_post);
        $probas_sec_2_item = $collection->splice(4,4);
        
        
                        //for law section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',36)
            ->orderBy('id', 'desc')->get();

            //for law section 1
        $collection = collect($category_wize_post);
        $law_sec_1_item = $collection->splice(0,1);
        //for law section 2 
        $collection = collect($category_wize_post);
        $law_sec_2_item = $collection->splice(1,2);

                 //for Exclusive section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',48)
            ->orderBy('id', 'desc')->get();

            //for Exclusive section 1
        $collection = collect($category_wize_post);
        $exclusive_sec_1_item = $collection->splice(0,4);

        //for Entertainment section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',24)
            ->orderBy('id', 'desc')->get();

            //for Entertainment section 1
        $collection = collect($category_wize_post);
        $entertainment_sec_1_item = $collection->splice(0,1);
        //for Entertainment section 2
        $collection = collect($category_wize_post);
        $entertainment_sec_2_item = $collection->splice(1,2);
        //for Entertainment section 3
        $collection = collect($category_wize_post);
        $entertainment_sec_3_item = $collection->splice(3,1);
        //for Entertainment section 4
        $collection = collect($category_wize_post);
        $entertainment_sec_4_item = $collection->splice(4,4);
        //for Entertainment section 5
        $collection = collect($category_wize_post);
        $entertainment_sec_5_item = $collection->splice(8,1);
        //for Entertainment section 6
        $collection = collect($category_wize_post);
        $entertainment_sec_6_item = $collection->splice(9,4);
        //for Entertainment section 7
        $collection = collect($category_wize_post);
        $entertainment_sec_7_item = $collection->splice(3,15);

            //for lifestyle section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',44)
            ->orderBy('id', 'desc')->get();

            //for lifestyle section 1
        $collection = collect($category_wize_post);
        $life_style_sec_1_item = $collection->splice(0,1);
        //for lifestyle section 2 
        $collection = collect($category_wize_post);
        $life_style_sec_2_item = $collection->splice(1,2);

            //for Information section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',45)
            ->orderBy('id', 'desc')->get();

            //for Information section 1
        $collection = collect($category_wize_post);
        $information_sec_1_item = $collection->splice(0,1);
        //for Information section 2 
        $collection = collect($category_wize_post);
        $information_sec_2_item = $collection->splice(1,2);

            //for Religion section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',46)
            ->orderBy('id', 'desc')->get();

            //for Religion section 1
        $collection = collect($category_wize_post);
        $religion_sec_1_item = $collection->splice(0,1);
        //for Religion section 2 
        $collection = collect($category_wize_post);
        $religion_sec_2_item = $collection->splice(1,2);

            //for jobs section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',20)
            ->orderBy('id','desc')->get();

            //for jobs section 1
        $collection = collect($category_wize_post);
        $jobs_sec_1_item = $collection->splice(0,1);
        //for jobs section 2 
        $collection = collect($category_wize_post);
        $jobs_sec_2_item = $collection->splice(1,2);
        //for jobs section 3
        $collection = collect($category_wize_post);
        $jobs_sec_3_item = $collection->splice(3,15);
        
                    //for holeWorld section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',27)
            ->orderBy('id', 'desc')->get();

        //for holeWorld section 1
        $collection = collect($category_wize_post);
        $holeWorld_sec_1_item = $collection->splice(0,2);
        //for holeWorld section 2 
        $collection = collect($category_wize_post);
        $holeWorld_sec_2_item = $collection->splice(2,5);
        //for holeWorld section 3 
        $collection = collect($category_wize_post);
        $holeWorld_sec_3_item = $collection->splice(7,5);
        //for holeWorld section 4
        $collection = collect($category_wize_post);
        $holeWorld_sec_4_item = $collection->splice(0,1);
        //for holeWorld section 5 
        $collection = collect($category_wize_post);
        $holeWorld_sec_5_item = $collection->splice(1,2);
        //for holeWorld section 6 
        $collection = collect($category_wize_post);
        $holeWorld_sec_6_item = $collection->splice(3,15);

        //for national section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',30)
            ->orderBy('id', 'desc')->get();

        //for national section 1
        $collection = collect($category_wize_post);
        $national_sec_1_item = $collection->splice(0,4);
        //for national section 2 
        $collection = collect($category_wize_post);
        $national_sec_2_item = $collection->splice(4,5);
        //for national section 2 
        $collection = collect($category_wize_post);
        $national_sec_3_item = $collection->splice(0,1);
        //for national section 2 
        $collection = collect($category_wize_post);
        $national_sec_4_item = $collection->splice(1,2);
        //for national section 2 
        $collection = collect($category_wize_post);
        $national_sec_5_item = $collection->splice(3,15);

        //for politics section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',29)
            ->orderBy('id', 'desc')->get();

        //for politics section 1
        $collection = collect($category_wize_post);
        $politics_sec_1_item = $collection->splice(0,5);
        //for politics section 2
        $collection = collect($category_wize_post);
        $politics_sec_2_item = $collection->splice(0,1);
        //for politics section 3
        $collection = collect($category_wize_post);
        $politics_sec_3_item = $collection->splice(1,2);
        //for politics section 4
        $collection = collect($category_wize_post);
        $politics_sec_4_item = $collection->splice(3,15);
      
        //for international section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',26)
            ->orderBy('id', 'desc')->get();

        //for international section 1
        $collection = collect($category_wize_post);
        $international_sec_1_item = $collection->splice(0,2);
        //for international section 2 
        $collection = collect($category_wize_post);
        $international_sec_2_item = $collection->splice(2,4);
        //for international section 3
        $collection = collect($category_wize_post);
        $international_sec_3_item = $collection->splice(0,1);
        //for international section 4 
        $collection = collect($category_wize_post);
        $international_sec_4_item = $collection->splice(1,2);
        //for international section 5 
        $collection = collect($category_wize_post);
        $international_sec_5_item = $collection->splice(3,15);

                //for economy section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',28)
            ->orderBy('id', 'desc')->get();

        //for economy section 1
        $collection = collect($category_wize_post);
        $economy_sec_1_item = $collection->splice(0,2);
        //for economy section 2 
        $collection = collect($category_wize_post);
        $economy_sec_2_item = $collection->splice(2,4);
        //for economy section 3
        $collection = collect($category_wize_post);
        $economy_sec_3_item = $collection->splice(0,1);
        //for economy section 4 
        $collection = collect($category_wize_post);
        $economy_sec_4_item = $collection->splice(1,2);
        //for economy section 5 
        $collection = collect($category_wize_post);
        $economy_sec_5_item = $collection->splice(3,15);

        //for sports section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',25)
            ->orderBy('id', 'desc')->get();

        //for sports section 1
        $collection = collect($category_wize_post);
        $sports_sec_1_item = $collection->splice(0,4);
        //for sports section 2 
        $collection = collect($category_wize_post);
        $sports_sec_2_item = $collection->splice(4,6);
        //for sports section 3
        $collection = collect($category_wize_post);
        $sports_sec_3_item = $collection->splice(0,1);
        //for sports section 4 
        $collection = collect($category_wize_post);
        $sports_sec_4_item = $collection->splice(1,2);
        //for sports section 5 
        $collection = collect($category_wize_post);
        $sports_sec_5_item = $collection->splice(3,15);

        //for education section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',21)
            ->orderBy('id', 'desc')->get();

        //for education section 1
        $collection = collect($category_wize_post);
        $education_sec_1_item = $collection->splice(0,1);
        //for education section 2 
        $collection = collect($category_wize_post);
        $education_sec_2_item = $collection->splice(1,2);
                //for education section 3 
        $collection = collect($category_wize_post);
        $education_sec_3_item = $collection->splice(3,15);

        View::share('adsData',$adsData); 
        View::share('secound_sec_item_1',$secound_sec_item_1); 
        View::share('breskingdatas',$breskingdatas);
        View::share('jobs_sec_1_item',$jobs_sec_1_item); 
        View::share('jobs_sec_2_item',$jobs_sec_2_item); 
        View::share('holeWorld_sec_1_item',$holeWorld_sec_1_item); 
        View::share('holeWorld_sec_2_item',$holeWorld_sec_2_item); 
        View::share('holeWorld_sec_3_item',$holeWorld_sec_3_item); 
        View::share('national_sec_1_item',$national_sec_1_item); 
        View::share('national_sec_2_item',$national_sec_2_item); 
        View::share('politics_sec_1_item',$politics_sec_1_item); 
        View::share('international_sec_2_item',$international_sec_2_item); 
        View::share('economy_sec_1_item',$economy_sec_1_item); 
        View::share('economy_sec_2_item',$economy_sec_2_item); 
        View::share('international_sec_1_item',$international_sec_1_item); 
        View::share('sports_sec_1_item',$sports_sec_1_item); 
        View::share('sports_sec_2_item',$sports_sec_2_item); 
        View::share('education_sec_1_item',$education_sec_1_item); 
        View::share('entertainment_sec_5_item',$entertainment_sec_5_item); 
        View::share('entertainment_sec_6_item',$entertainment_sec_6_item); 
        View::share('life_style_sec_1_item',$life_style_sec_1_item); 
        View::share('life_style_sec_2_item',$life_style_sec_2_item); 
        View::share('information_sec_2_item',$information_sec_2_item); 
        View::share('religion_sec_1_item',$religion_sec_1_item); 
        View::share('religion_sec_2_item',$religion_sec_2_item); 
        View::share('frist_sec_2_item',$frist_sec_2_item); 
        View::share('frist_sec_1_item',$frist_sec_1_item); 
        View::share('helth_sec_1_item',$helth_sec_1_item); 
        View::share('helth_sec_2_item',$helth_sec_2_item); 
        View::share('probas_sec_1_item',$probas_sec_1_item); 
        View::share('probas_sec_2_item',$probas_sec_2_item); 
        View::share('law_sec_1_item',$law_sec_1_item); 
        View::share('law_sec_2_item',$law_sec_2_item); 
        View::share('exclusive_sec_1_item',$exclusive_sec_1_item); 
        View::share('entertainment_sec_1_item',$entertainment_sec_1_item); 
        View::share('entertainment_sec_2_item',$entertainment_sec_2_item); 
        View::share('entertainment_sec_3_item',$entertainment_sec_3_item); 
        View::share('entertainment_sec_4_item',$entertainment_sec_4_item); 
        View::share('letest_datas',$letest_datas); 
        View::share('dateandtime',$dateandtime); 
        View::share('categoryinfos',$categoryinfos); 
        View::share('frist_sec_3_item',$frist_sec_3_item); 
        View::share('education_sec_2_item',$education_sec_2_item); 
        View::share('information_sec_1_item',$information_sec_1_item);
        View::share('national_sec_3_item',$national_sec_3_item);
        View::share('national_sec_4_item',$national_sec_4_item);
        View::share('national_sec_5_item',$national_sec_5_item);
        View::share('education_sec_3_item',$education_sec_3_item);
        View::share('sports_sec_3_item',$sports_sec_3_item);
        View::share('sports_sec_4_item',$sports_sec_4_item);
        View::share('sports_sec_5_item',$sports_sec_5_item);
        View::share('economy_sec_3_item',$economy_sec_3_item);
        View::share('economy_sec_4_item',$economy_sec_4_item);
        View::share('economy_sec_5_item',$economy_sec_5_item);
        View::share('international_sec_3_item',$international_sec_3_item);
        View::share('international_sec_4_item',$international_sec_4_item);
        View::share('international_sec_5_item',$international_sec_5_item);
        View::share('politics_sec_2_item',$politics_sec_2_item);
        View::share('politics_sec_3_item',$politics_sec_3_item);
        View::share('politics_sec_4_item',$politics_sec_4_item);
        View::share('holeWorld_sec_4_item',$holeWorld_sec_4_item);
        View::share('holeWorld_sec_5_item',$holeWorld_sec_5_item);
        View::share('holeWorld_sec_6_item',$holeWorld_sec_6_item);
        View::share('jobs_sec_3_item',$jobs_sec_3_item);
        View::share('entertainment_sec_7_item',$entertainment_sec_7_item);
        View::share('helth_sec_3_item',$helth_sec_3_item);

    }
}
