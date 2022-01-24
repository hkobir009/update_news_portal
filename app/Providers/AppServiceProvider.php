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
        $postDatas = post::with('categories')->orderBy('id', 'desc')->get();
        
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
        //for probas section 3
        $collection = collect($category_wize_post);
        $probas_sec_3_item = $collection->splice(0,1);
        //for probas section 4 
        $collection = collect($category_wize_post);
        $probas_sec_4_item = $collection->splice(1,2);
        //for probas section 5
        $collection = collect($category_wize_post);
        $probas_sec_5_item = $collection->splice(3,15);
        
        //for weather section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',54)
            ->orderBy('id', 'desc')->get();

            //for weather section 1
        $collection = collect($category_wize_post);
        $weather_sec_1_item = $collection->splice(0,1);
        //for weather section 2 
        $collection = collect($category_wize_post);
        $weather_sec_2_item = $collection->splice(1,2);
        //for weather section 3 
        $collection = collect($category_wize_post);
        $weather_sec_3_item = $collection->splice(3,15);

        //for opinions section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',69)
            ->orderBy('id', 'desc')->get();

            //for opinions section 1
        $collection = collect($category_wize_post);
        $opinions_sec_1_item = $collection->splice(0,1);
        //for opinions section 2 
        $collection = collect($category_wize_post);
        $opinions_sec_2_item = $collection->splice(1,2);
        //for opinions section 3 
        $collection = collect($category_wize_post);
        $opinions_sec_3_item = $collection->splice(3,15);

        //for columns section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',70)
            ->orderBy('id', 'desc')->get();

            //for columns section 1
        $collection = collect($category_wize_post);
        $columns_sec_1_item = $collection->splice(0,1);
        //for columns section 2 
        $collection = collect($category_wize_post);
        $columns_sec_2_item = $collection->splice(1,2);
        //for columns section 3 
        $collection = collect($category_wize_post);
        $columns_sec_3_item = $collection->splice(3,15);
        
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
        //for law section 3 
        $collection = collect($category_wize_post);
        $law_sec_3_item = $collection->splice(3,15);

                 //for Exclusive section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',48)
            ->orderBy('id', 'desc')->get();

            //for Exclusive section 1
        $collection = collect($category_wize_post);
        $exclusive_sec_1_item = $collection->splice(0,4);
        //for Exclusive section 1
        $collection = collect($category_wize_post);
        $exclusive_sec_2_item = $collection->splice(0,1);
        //for Exclusive section 1
        $collection = collect($category_wize_post);
        $exclusive_sec_3_item = $collection->splice(1,2);
        //for Exclusive section 1
        $collection = collect($category_wize_post);
        $exclusive_sec_4_item = $collection->splice(3,15);

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
        
            // for bollywood section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',63)
            ->orderBy('id', 'desc')->get();

            //for bollywood section 1
        $collection = collect($category_wize_post);
        $bollywood_sec_1_item = $collection->splice(0,1);
        //for bollywood section 2
        $collection = collect($category_wize_post);
        $bollywood_sec_2_item = $collection->splice(1,2);
        //for bollywood section 3
        $collection = collect($category_wize_post);
        $bollywood_sec_3_item = $collection->splice(3,15);

            // for tollywood section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',64)
            ->orderBy('id', 'desc')->get();

            //for tollywood section 1
        $collection = collect($category_wize_post);
        $tollywood_sec_1_item = $collection->splice(0,1);
        //for tollywood section 2
        $collection = collect($category_wize_post);
        $tollywood_sec_2_item = $collection->splice(1,2);
        //for tollywood section 3
        $collection = collect($category_wize_post);
        $tollywood_sec_3_item = $collection->splice(3,15);

        // for dhaliwood section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',65)
            ->orderBy('id', 'desc')->get();

            //for dhaliwood section 1
        $collection = collect($category_wize_post);
        $dhaliwood_sec_1_item = $collection->splice(0,1);
        //for dhaliwood section 2
        $collection = collect($category_wize_post);
        $dhaliwood_sec_2_item = $collection->splice(1,2);
        //for dhaliwood section 3
        $collection = collect($category_wize_post);
        $dhaliwood_sec_3_item = $collection->splice(3,15);

        // for hollywood section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',62)
            ->orderBy('id', 'desc')->get();

            //for hollywood section 1
        $collection = collect($category_wize_post);
        $hollywood_sec_1_item = $collection->splice(0,1);
        //for hollywood section 2
        $collection = collect($category_wize_post);
        $hollywood_sec_2_item = $collection->splice(1,2);
        //for hollywood section 3
        $collection = collect($category_wize_post);
        $hollywood_sec_3_item = $collection->splice(3,15);

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
        //for lifestyle section 3 
        $collection = collect($category_wize_post);
        $life_style_sec_3_item = $collection->splice(3,15);

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
        //for Information section 3 
        $collection = collect($category_wize_post);
        $information_sec_3_item = $collection->splice(1,2);

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
        //for Religion section 2 
        $collection = collect($category_wize_post);
        $religion_sec_3_item = $collection->splice(3,15);

            //for artAndLiterature section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',51)
            ->orderBy('id', 'desc')->get();

        //for artAndLiterature section 1
        $collection = collect($category_wize_post);
        $artAndLiterature_sec_1_item = $collection->splice(0,1);
        //for artAndLiterature section 2 
        $collection = collect($category_wize_post);
        $artAndLiterature_sec_2_item = $collection->splice(1,2);
        //for artAndLiterature section 2 
        $collection = collect($category_wize_post);
        $artAndLiterature_sec_3_item = $collection->splice(3,15);

        //for bookCriticism section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',59)
            ->orderBy('id', 'desc')->get();

        //for bookCriticism section 1
        $collection = collect($category_wize_post);
        $bookCriticism_sec_1_item = $collection->splice(0,1);
        //for bookCriticism section 2 
        $collection = collect($category_wize_post);
        $bookCriticism_sec_2_item = $collection->splice(1,2);
        //for bookCriticism section 2 
        $collection = collect($category_wize_post);
        $bookCriticism_sec_3_item = $collection->splice(3,15);

        //for smallStory section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',60)
            ->orderBy('id', 'desc')->get();

        //for smallStory section 1
        $collection = collect($category_wize_post);
        $smallStory_sec_1_item = $collection->splice(0,1);
        //for smallStory section 2 
        $collection = collect($category_wize_post);
        $smallStory_sec_2_item = $collection->splice(1,2);
        //for smallStory section 2 
        $collection = collect($category_wize_post);
        $smallStory_sec_3_item = $collection->splice(3,15);

        //for Poetry section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',61)
            ->orderBy('id', 'desc')->get();

        //for Poetry section 1
        $collection = collect($category_wize_post);
        $Poetry_sec_1_item = $collection->splice(0,1);
        //for Poetry section 2 
        $collection = collect($category_wize_post);
        $Poetry_sec_2_item = $collection->splice(1,2);
        //for Poetry section 2 
        $collection = collect($category_wize_post);
        $Poetry_sec_3_item = $collection->splice(3,15);

        //for fromFacebookPage section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',52)
            ->orderBy('id', 'desc')->get();

        //for fromFacebookPage section 1
        $collection = collect($category_wize_post);
        $fromFacebookPage_sec_1_item = $collection->splice(0,1);
        //for fromFacebookPage section 2 
        $collection = collect($category_wize_post);
        $fromFacebookPage_sec_2_item = $collection->splice(1,2);
        //for fromFacebookPage section 2 
        $collection = collect($category_wize_post);
        $fromFacebookPage_sec_3_item = $collection->splice(3,15);

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

        //for bank section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',66)
            ->orderBy('id', 'desc')->get();

        //for bank section 1
        $collection = collect($category_wize_post);
        $bank_sec_1_item = $collection->splice(0,1);
        //for bank section 2 
        $collection = collect($category_wize_post);
        $bank_sec_2_item = $collection->splice(1,2);
        //for bank section 3
        $collection = collect($category_wize_post);
        $bank_sec_3_item = $collection->splice(3,15);

        //for insurance section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',67)
            ->orderBy('id', 'desc')->get();

        //for insurance section 1
        $collection = collect($category_wize_post);
        $insurance_sec_1_item = $collection->splice(0,1);
        //for insurance section 2 
        $collection = collect($category_wize_post);
        $insurance_sec_2_item = $collection->splice(1,2);
        //for insurance section 3
        $collection = collect($category_wize_post);
        $insurance_sec_3_item = $collection->splice(3,15);

        //for stockMarket section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',68)
            ->orderBy('id', 'desc')->get();

        //for stockMarket section 1
        $collection = collect($category_wize_post);
        $stockMarket_sec_1_item = $collection->splice(0,1);
        //for stockMarket section 2 
        $collection = collect($category_wize_post);
        $stockMarket_sec_2_item = $collection->splice(1,2);
        //for stockMarket section 3
        $collection = collect($category_wize_post);
        $stockMarket_sec_3_item = $collection->splice(3,15);

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

        //for cricket section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',55)
            ->orderBy('id', 'desc')->get();

        //for cricket section 1
        $collection = collect($category_wize_post);
        $cricket_sec_1_item = $collection->splice(0,1);
        //for cricket section 2 
        $collection = collect($category_wize_post);
        $cricket_sec_2_item = $collection->splice(1,2);
        //for cricket section 3
        $collection = collect($category_wize_post);
        $cricket_sec_3_item = $collection->splice(3,15);

        //for football section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',56)
            ->orderBy('id', 'desc')->get();

        //for football section 1
        $collection = collect($category_wize_post);
        $football_sec_1_item = $collection->splice(0,1);
        //for football section 2 
        $collection = collect($category_wize_post);
        $football_sec_2_item = $collection->splice(1,2);
        //for football section 3
        $collection = collect($category_wize_post);
        $football_sec_3_item = $collection->splice(3,15);

        //for hockey section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',57)
            ->orderBy('id', 'desc')->get();

        //for hockey section 1
        $collection = collect($category_wize_post);
        $hockey_sec_1_item = $collection->splice(0,1);
        //for hockey section 2 
        $collection = collect($category_wize_post);
        $hockey_sec_2_item = $collection->splice(1,2);
        //forhockeyl section 3
        $collection = collect($category_wize_post);
        $hockey_sec_3_item = $collection->splice(3,15);

        //for otherSports section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',58)
            ->orderBy('id', 'desc')->get();

        //for otherSports section 1
        $collection = collect($category_wize_post);
        $otherSports_sec_1_item = $collection->splice(0,1);
        //for otherSports section 2 
        $collection = collect($category_wize_post);
        $otherSports_sec_2_item = $collection->splice(1,2);
        //for otherSports section 3
        $collection = collect($category_wize_post);
        $otherSports_sec_3_item = $collection->splice(3,15);

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

        //for campus section

        $category_wize_post = DB::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->select('posts.*', 'category_post.category_id')
            ->where('category_id',53)
            ->orderBy('id', 'desc')->get();

        //for campus section 1
        $collection = collect($category_wize_post);
        $campus_sec_1_item = $collection->splice(0,1);
        //for campus section 2 
        $collection = collect($category_wize_post);
        $campus_sec_2_item = $collection->splice(1,2);
                //for campus section 3 
        $collection = collect($category_wize_post);
        $campus_sec_3_item = $collection->splice(3,15);

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
        View::share('life_style_sec_3_item',$life_style_sec_3_item); 
        View::share('information_sec_2_item',$information_sec_2_item); 
        View::share('religion_sec_1_item',$religion_sec_1_item); 
        View::share('religion_sec_2_item',$religion_sec_2_item); 
        View::share('religion_sec_3_item',$religion_sec_3_item); 
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
        View::share('artAndLiterature_sec_1_item',$artAndLiterature_sec_1_item);
        View::share('artAndLiterature_sec_2_item',$artAndLiterature_sec_2_item);
        View::share('artAndLiterature_sec_3_item',$artAndLiterature_sec_3_item);
        View::share('law_sec_3_item',$law_sec_3_item);
        View::share('bollywood_sec_1_item',$bollywood_sec_1_item);
        View::share('bollywood_sec_2_item',$bollywood_sec_2_item);
        View::share('bollywood_sec_3_item',$bollywood_sec_3_item);
        View::share('tollywood_sec_1_item',$tollywood_sec_1_item);
        View::share('tollywood_sec_2_item',$tollywood_sec_2_item);
        View::share('tollywood_sec_3_item',$tollywood_sec_3_item);
        View::share('dhaliwood_sec_1_item',$dhaliwood_sec_1_item);
        View::share('dhaliwood_sec_2_item',$dhaliwood_sec_2_item);
        View::share('dhaliwood_sec_3_item',$dhaliwood_sec_3_item);
        View::share('hollywood_sec_1_item',$hollywood_sec_1_item);
        View::share('hollywood_sec_2_item',$hollywood_sec_2_item);
        View::share('hollywood_sec_3_item',$hollywood_sec_3_item);
        View::share('cricket_sec_1_item',$cricket_sec_1_item);
        View::share('cricket_sec_2_item',$cricket_sec_2_item);
        View::share('cricket_sec_3_item',$cricket_sec_3_item);
        View::share('football_sec_1_item',$football_sec_1_item);
        View::share('football_sec_2_item',$football_sec_2_item);
        View::share('football_sec_3_item',$football_sec_3_item);
        View::share('hockey_sec_1_item',$hockey_sec_1_item);
        View::share('hockey_sec_2_item',$hockey_sec_2_item);
        View::share('hockey_sec_3_item',$hockey_sec_3_item);
        View::share('otherSports_sec_1_item',$otherSports_sec_1_item);
        View::share('otherSports_sec_2_item',$otherSports_sec_2_item);
        View::share('otherSports_sec_3_item',$otherSports_sec_3_item);
        View::share('bank_sec_1_item',$bank_sec_1_item);
        View::share('bank_sec_2_item',$bank_sec_2_item);
        View::share('bank_sec_3_item',$bank_sec_3_item);
        View::share('insurance_sec_1_item',$insurance_sec_1_item);
        View::share('insurance_sec_2_item',$insurance_sec_2_item);
        View::share('insurance_sec_3_item',$insurance_sec_3_item);
        View::share('stockMarket_sec_1_item',$stockMarket_sec_1_item);
        View::share('stockMarket_sec_2_item',$stockMarket_sec_2_item);
        View::share('stockMarket_sec_3_item',$stockMarket_sec_3_item);
        View::share('campus_sec_1_item',$campus_sec_1_item);
        View::share('campus_sec_2_item',$campus_sec_2_item);
        View::share('campus_sec_3_item',$campus_sec_3_item);
        View::share('exclusive_sec_2_item',$exclusive_sec_2_item);
        View::share('exclusive_sec_3_item',$exclusive_sec_3_item);
        View::share('exclusive_sec_4_item',$exclusive_sec_4_item);
        View::share('information_sec_3_item',$information_sec_3_item);
        View::share('probas_sec_3_item',$probas_sec_3_item);
        View::share('probas_sec_4_item',$probas_sec_4_item);
        View::share('probas_sec_5_item',$probas_sec_5_item);
        View::share('weather_sec_1_item',$weather_sec_1_item);
        View::share('weather_sec_2_item',$weather_sec_2_item);
        View::share('weather_sec_3_item',$weather_sec_3_item);
        View::share('opinions_sec_1_item',$opinions_sec_1_item);
        View::share('opinions_sec_2_item',$opinions_sec_2_item);
        View::share('opinions_sec_3_item',$opinions_sec_3_item);
        View::share('columns_sec_1_item',$columns_sec_1_item);
        View::share('columns_sec_2_item',$columns_sec_2_item);
        View::share('columns_sec_3_item',$columns_sec_3_item);
        View::share('bookCriticism_sec_1_item',$bookCriticism_sec_1_item);
        View::share('bookCriticism_sec_2_item',$bookCriticism_sec_2_item);
        View::share('bookCriticism_sec_3_item',$bookCriticism_sec_3_item);
        View::share('smallStory_sec_1_item',$smallStory_sec_1_item);
        View::share('smallStory_sec_2_item',$smallStory_sec_2_item);
        View::share('smallStory_sec_3_item',$smallStory_sec_3_item);
        View::share('Poetry_sec_1_item',$Poetry_sec_1_item);
        View::share('Poetry_sec_2_item',$Poetry_sec_2_item);
        View::share('Poetry_sec_3_item',$Poetry_sec_3_item);
        View::share('fromFacebookPage_sec_1_item',$fromFacebookPage_sec_1_item);
        View::share('fromFacebookPage_sec_2_item',$fromFacebookPage_sec_2_item);
        View::share('fromFacebookPage_sec_3_item',$fromFacebookPage_sec_3_item);

    }
}
