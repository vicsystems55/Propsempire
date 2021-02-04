<?php

namespace App\Http\Controllers;

use App\FeaturedImage;
use Auth;
use Illuminate\Http\Request;

class FeaturedImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $image = $request->file('file');

        $listing_id = $request->listing_id;
        $listing_slug = $request->listing_slug;

        $newname = rand(233,9000).'.'.$image->getClientOriginalExtension();

        $image->move(public_path('listings_images'), $newname);

            $upload = FeaturedImage::Create([
                'listing_slug' => $listing_slug,
                'listing_id' => $listing_id,
                'user_id' => Auth::user()->id,
                'file_path' => $newname
                
            ]);

        return $upload;



        







    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeaturedImage  $featuredImage
     * @return \Illuminate\Http\Response
     */
    public function show(FeaturedImage $featuredImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeaturedImage  $featuredImage
     * @return \Illuminate\Http\Response
     */
    public function edit(FeaturedImage $featuredImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeaturedImage  $featuredImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeaturedImage $featuredImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeaturedImage  $featuredImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeaturedImage $featuredImage)
    {
        //
    }
}
