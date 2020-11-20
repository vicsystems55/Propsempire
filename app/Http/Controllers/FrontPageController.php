<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Listing;

class FrontPageController extends Controller
{
    //

    public function index()
    {
        # code...

        $listings = Listing::with('users')->where('status', 'active');

        return view('frontpage.pages.home',[
            'listings' => $listings
        ]);
    }
}
