<?php

namespace App\Http\Controllers;

use App\Models\breaking_news;
use App\Models\category;
use App\Models\post;
use App\Models\Subscribe;
use App\Models\tag;
use App\Models\User;
use Illuminate\Http\Request;

class deshboardController extends Controller
{
    public function index()
    {
        $userCount = User::get();
        $postCount = post::get();
        $categoryCount = category::get();
        $tagCount = tag::get();
        $subscribeCount = Subscribe::get();
        $breakingNews = breaking_news::get();

        return view('admin.layouts.deshboard',compact('userCount','postCount','categoryCount',
                                    'tagCount','subscribeCount','breakingNews'));
    }
   
    public function userInfo()
    {
        $usersdata = User::get();
        return view('admin.partial.user',compact('usersdata'));
    }
   
}
