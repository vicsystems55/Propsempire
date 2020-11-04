<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    //

    public function index()
    {
        # code...

        return view('frontpage.pages.home');
    }
}
