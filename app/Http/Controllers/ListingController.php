<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Listing;

use Illuminate\Support\Str;

use Auth;

class ListingController extends Controller
{
    //
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'location' => 'required'
         ]);
        // $validate = request()->validate([
        //     'featured_img'  => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        //   ]);

        

        $listing = Listing::Create($request->all() + [
            'posted_by' => Auth::user()->id,  
            'slug' => Str::random(32)
            ]);

        

          


        return redirect('add_listing2/'.$listing->slug);

    }

        public function step2($slug)
        {

            $listing_data = Listing::where('slug', $slug)->first();


            return view('agents.add_prop_step2',[

                'listing_data' => $listing_data
            ]);
            # code...
        }


        public function add_assets(Request $request, $slug)
        {
            request()->validate([
                'featured_img1'  => 'mimes:jpeg,jpg,png,gif|required|max:10000',
              ]);
         
                $featured_img1 = $request->file('featured_img1');
                $featured_img2 = $request->file('featured_img2');
                $featured_img3 = $request->file('featured_img3');
                $featured_img4 = $request->file('featured_img4');


                $new_name1 = rand().".".$featured_img1->getClientOriginalExtension();
                $new_name2 = rand().".".$featured_img2->getClientOriginalExtension();
                $new_name3 = rand().".".$featured_img3->getClientOriginalExtension();
                $new_name4 = rand().".".$featured_img4->getClientOriginalExtension();


                $file1 = $featured_img1->move(public_path("listings_images"), $new_name1);
                $file2 = $featured_img2->move(public_path("listings_images"), $new_name2);
                $file3 = $featured_img3->move(public_path("listings_images"), $new_name3);
                $file4 = $featured_img4->move(public_path("listings_images"), $new_name4);


            $listing_data = Listing::where('slug', $slug)->update([
                'featured_img1' => $new_name1,
                'featured_img2' => $new_name2,
                'featured_img3' => $new_name3,
           

            ]);

         

            return view('agents.add_prop_step3',[

                'listing_data' => $listing_data
            ]);
            # code...
        }
}
