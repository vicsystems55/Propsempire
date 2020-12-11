<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Listing;

use Carbon\Carbon;

class FrontPageController extends Controller
{
    //

    public function index()
    {
        # code...

        // $listings = Listing::with('users')->where('status', 'active');

        $listings = Listing::with('users')->latest()->get();

        // dd($listings);

        return view('frontpage.pages.home',[
            'listings' => $listings
        ]);
    }
}
