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


        $most_viewed_listings = Listing::with('images')->with('users')->where('status', 'published')->where('views', '>=', '100')->orderBy('views', 'desc')->get();

        // dd($listings);

        return view('frontpage.pages.home',[
            'premium_listings' => $premium_listings,
            'frontpage_listings' => $frontpage_listings,
            'most_viewed_listings' => $most_viewed_listings
        ]);

    }

    public function single_view($slug)
    {
        # code...

        $single_listing = Listing::where('slug', $slug)->with('images')->with('users')->first();

        // $images = FeaturedImage::where('listing_slug', $slug)->latest()->get();

        // Listing::where('slug', $slug)->increment('views', 1);

       
        // dd($single_listing);

        // $single_listing = Listing::where('slug', $slug)->first();

        return view('frontpage.pages.single_view', [
            'single_listing' => $single_listing, 
            // 'images' => $images
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
        
        $key = $request->key;

       
        
        $listings = Listing::where('title','like', $key.'%')->orwhere('description','like', $key.'%')
                                ->orwhere('location','like', $key.'%')->get();

        // dd($listings);
       



        return view('frontpage.pages.search',[
            'listings' => $listings
        ]);
    
    }


    
    public function _search()
    {
        // # code...
        // $key = $request->params['key'];
        // $listings = Listing::where('title','like', $key.'%')->get();
       



        return view('frontpage.pages.search');
    
    }

    public function all_listings($key)
    {
        // # code...
        // $key = $request->params['key'];
        // $listings = Listing::where('title','like', $key.'%')->get();

        

        $listing_data = Listing::where('title','like', $key.'%')->orwhere('description','like', $key.'%')
                                ->orwhere('location','like', $key.'%')->get();
       



        return $listing_data;


    
    }
}
