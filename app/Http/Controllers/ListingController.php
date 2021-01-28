<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Listing;

use App\FeauturedImage;

use App\Subscription;

use Illuminate\Support\Str;

use Auth;

class ListingController extends Controller
{

    public function all_listings()
    {
        # code...

        $my_listings = Listing::where('posted_by', Auth::user()->id)->latest()->paginate(6);

        return view('agents.all_listings', [
            'my_listings' => $my_listings
        ]);
    }


    public function single_listing($slug)
    {
        # code...

        $single_listing = Listing::where('slug', $slug)->first();

        return view('agents.single_listing', [
            'single_listing' => $single_listing
        ]);
    }
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

    public function publish(Request $request)
    {
        # code...

        $slug = $request->slug;

        $users_listings = Listing::where('posted_by', Auth::user()->id)->where('status', 'published')->get()->count();

        $user_subscription = Subscription::with('subscription_plans')->where('agent_id', Auth::user()->id)->first();

        $limit = $user_subscription->subscription_plans->max_listings;


        if ($users_listings >= $limit) {
            # code...
            
            return back()->with('upgrade', 'You have excceeded your subscription');

        }else{

        

            $publish = Listing::where('slug', $slug)->update([
                'status' => 'published'
            ]);
            return back()->with('publish', 'Your listing has been published ' .'you have uploaded ' .$users_listings .' listings');
        }

        


    }


    public function unpublish(Request $request)
    {
        # code...

        $slug = $request->slug;

        $unpulish = Listing::where('slug', $slug)->update([
            'status' => 'unpublished'
        ]);



        return back()->with('unpublish', 'Your listing has been unpublished');

    }

    

 

    public function up_doccc(Request $request, $slug)
    {
        # code...

        
       

        $user_id = Auth::user()->id;

        $this->validate($request,
        [
            'featured_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        

        // if($type =='passport'){

        //     request()->validate([
        //         'passport'  => 'mimes:jpeg,jpg,png,gif|required|max:600',
                
        //       ]);

        // }

        // if($type =='first_appoint'){

        //     request()->validate([
        //         'first_appoint'  => 'mimes:jpeg,jpg,png,gif|required|max:500',
                
        //       ]);

        // }

        

        

        $doc = $request->file('featured_img');

        

        $new_name = rand().".".$doc->getClientOriginalExtension();

        $path = "images/listings_images";

        $file1 = $doc->move(public_path($path), $new_name);

        $image = Listing::where('slug', $slug)->first();

        if($image->featured_img1 == 'default.png' ){

            Listing::where('slug', $slug)->update([
                'featured_img1' => $new_name,
            ]);

            return back()->with('message','Image 1 uploaded successfully');

        }
        if(!$image->featured_img2){
            
            Listing::where('slug', $slug)->update([
                'featured_img2' => $new_name,
            ]);

            return back()->with('message','Image 2 uploaded successfully');
        }

        if(!$image->featured_img3){
            Listing::where('slug', $slug)->update([
                'featured_img3' => $new_name,
            ]);

            return back()->with('message','Image 3 uploaded successfully');
        }

        if(!$image->featured_img4){
            Listing::where('slug', $slug)->update([
                'featured_img4' => $new_name,
            ]);

            return back()->with('message','Image 4 uploaded successfully');
        }


      



          return back()->with('message','All images are uploaded');


    }

    public function remove_pix(Request $request, $slug)
    {
        # code...

        if($request->pix == '1'){

            Listing::where('slug', $slug)->update([
                'featured_img1' => 'default.png',
            ]);


            return back()->with('message','Image 1 removed, bros why you change am na..');

        }

        if($request->pix == '2'){

            Listing::where('slug', $slug)->update([
                'featured_img2' => null,
            ]);


            return back()->with('message','You don comot image 2 ooo... how far na');

        }

        if($request->pix == '3'){

            Listing::where('slug', $slug)->update([
                'featured_img3' => null,
            ]);


            return back()->with('message','Image 3 again this one serious ooo');

        }

        if($request->pix == '3'){

            Listing::where('slug', $slug)->update([
                'featured_img3' => null,
            ]);


            return back()->with('message','Image 3 are updated');

        }


        return back()->with('message','an error occured...');


    }

        public function step1(Request $request)
        {
            # code...

            $listing = Listing::Create($request->all() + [
                'posted_by' => Auth::user()->id,  
                'slug' => Str::random(32)
                ]);
                
                return redirect('/agent/add_prop2/'. $listing->slug);
    
            
        }
        
        public function step2($slug)
        {

            $listing_data = Listing::where('slug', $slug)->where('posted_by', Auth::user()->id)->first();


            return view('agents.upload',[

                'listing_data' => $listing_data
            ]);
            # code...
        }


        public function step3($slug)
        {

            $listing_data = Listing::where('slug', $slug)->first();


            return view('agents.add_prop_step3',[

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
