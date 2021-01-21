<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Listing;

use Carbon\Carbon;

use DB;

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

    public function single_view($slug)
    {
        # code...

        // $listings = Listing::with('users')->where('status', 'active');

        $listing = Listing::with('users')->where('slug', $slug)->first();

        // dd($listings);

        return view('frontpage.pages.single_view',[
            'listing' => $listing
        ]);
    }

    public function search(Request $request)
    {
        # code...
        $key = $request->params['key'];
        $listings = Listing::where('title','like', $key.'%')->get();
       



        return $listings;
    }
}
