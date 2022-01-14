<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class deshboardController extends Controller
{
    public function index()
    {
        return view('admin.layouts.deshboard');
    }

   
}
