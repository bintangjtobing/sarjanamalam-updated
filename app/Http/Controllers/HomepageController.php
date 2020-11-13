<?php

namespace App\Http\Controllers;

// Use Illuminate
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Database


class HomepageController extends Controller
{
    public function index()
    {
        return view('homepage.index');
    }
    public function forum()
    {
        return view('forumpage.index');
    }
    public function newpost()
    {
        return view('forumpage.newpost');
    }
}
