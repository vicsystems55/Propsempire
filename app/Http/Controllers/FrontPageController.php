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

        $premium_listings = Listing::with('users')->where('status', 'published')->where('type', 'premium')->latest()->get();

        $frontpage_listings = Listing::with('users')->where('status', 'published')->where('type', 'frontpage')->latest()->get();

        // dd($listings);

        return view('frontpage.pages.home',[
            'premium_listings' => $premium_listings,
            'frontpage_listings' => $frontpage_listings
        ]);

    }

    public function single_view($slug)
    {
        # code...

        // $listings = Listing::with('users')->where('status', 'active');

        $listing_data = Listing::with('users')->where('slug', $slug)->first();

        // dd($listings);

        // return view('frontpage.pages.single_view',[
        //     'listing' => $listing
        // ]);

        
        return view('frontpage.pages.single_view',[
            'listing_data' => $listing_data
        ]);
    }

    public function single_view2()
    {
        # code...

        // $listings = Listing::with('users')->where('status', 'active');

        $listing_data = Listing::with('users')->where('slug', $slug)->first();

        // dd($listings);

        // return view('frontpage.pages.single_view',[
        //     'listing' => $listing
        // ]);

        
        return view('frontpage.pages.single_view',[
            'listing_data' => $listing_data
        ]);
    }

    public function search(Request $request)
    {
        # code...
        $key = $request->params['key'];
        $listings = Listing::where('title','like', $key.'%')->get();
       



        return view('frontpage.pages.search');
    
    }


    
    public function _search()
    {
        // # code...
        // $key = $request->params['key'];
        // $listings = Listing::where('title','like', $key.'%')->get();
       



        return view('frontpage.pages.search');
    
    }
}
