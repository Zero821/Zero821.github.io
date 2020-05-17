<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homePage()
    {
        return view('home');
    }

    public function hilton()
    {
        return view('hilton');
    }

    public function wedding()
    {
        return view('wedding');
    }

    public function winter()
    {
        return view('winter');
    }

    public function chattanooga()
    {
        return view('chattanooga');
    }
}
