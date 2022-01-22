<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontCategoryController extends Controller
{
    public function posts()
    {
        return view('frontend.posts');
    }
    public function jobs()
    {
        return view('frontend.category.jobs');
    }
    public function health()
    {
        return view('frontend.category.health');
    }
    public function sports()
    {
        return view('frontend.category.sports');
    }
    public function national()
    {
        return view('frontend.category.national');
    }
    public function politics()
    {
        return view('frontend.category.politics');
    }
    public function economy()
    {
        return view('frontend.category.economy');
    }
    public function holeWorld()
    {
        return view('frontend.category.holeWorld');
    }
    public function education()
    {
        return view('frontend.category.education');
    }
    public function entertainment()
    {
        return view('frontend.category.entertainment');
    }
    public function international()
    {
        return view('frontend.category.international');
    }
}
