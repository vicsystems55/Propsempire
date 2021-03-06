<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Listing;

use App\FeaturedImage;

use App\Subscription;

use App\ActivityLog;

use App\User;

use Illuminate\Support\Str;

use Auth;

class ListingController extends Controller
{

    public function search(Request $request)
    {
        # code...

        $listings = Listing::with('users')->with('images')->latest()->get();

        
          
        // return $listings;

        return view('frontpage.pages.search', [
            'listings' => $listings
        ]);
    }

    public function _search(Request $request)
    {
        # code...
        $listings = Listing::with('users')->with('images')->latest()->get();

        
          
        // return $listings[0]->images;

        return view('frontpage.pages.search', [
            'listings' => $listings
        ]);
    }

    public function all_listings()
    {
        # code...

        $my_listings = Listing::with('images')->where('posted_by', Auth::user()->id)->latest()->paginate(6);

        // dd($my_listings);

        return view('agents.all_listings', [
            'my_listings' => $my_listings
        ]);
    }


    public function single_listing($slug)
    {
        # code...

        $user_subscription = Subscription::with('subscription_plans')->where('agent_id', Auth::user()->id)->first();

        $single_listing = Listing::where('slug', $slug)->with('images')->first();

        $images = FeaturedImage::where('listing_slug', $slug)->latest()->get();

        // Listing::where('slug', $slug)->increment('views', 1);

       


        // $single_listing = Listing::where('slug', $slug)->first();

        return view('agents.single_listing', [
            'single_listing' => $single_listing, 
            'user_subscription' => $user_subscription,
            'images' => $images
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

        $images = FeaturedImage::where('listing_slug', $slug)->get();


        if ($users_listings >= $limit) {
            # code...
            
            return back()->with('upgrade', 'You have excceeded your subscription');

        }else{

            if ($images->count() > 2) {
                # code...

                $publish = Listing::where('slug', $slug)->update([
                    'status' => 'published',
                    'views' => '100'
                ]);

              
    
                $log = ActivityLog::Create([
                    'title' => 'Listing Published',
                    'message' => 'You just successfully published a listing',
                    'for_' => Auth::user()->id
                ]);
    
                return back()->with('publish', 'Your listing has been published ' .'you have uploaded ' .$users_listings .' listings');
            }else{

                
                return back()->with('unpublish', 'Please add atleast 2 images to listing');

            }

        

           
        }

        


    }

    public function make_premium(Request $request)
    {
        
        # code...

        $slug = $request->slug;

        $users_listings = Listing::where('posted_by', Auth::user()->id)->where('status', 'published')->where('class', 'premium')->get()->count();

        $user_subscription = Subscription::with('subscription_plans')->where('agent_id', Auth::user()->id)->first();

        $limit = $user_subscription->subscription_plans->premium_listings;

        $images = FeaturedImage::where('listing_slug', $slug)->get();


        if ($users_listings >= $limit) {
            # code...
            
            return back()->with('upgrade', 'You have excceeded your premium count or have no premium for current plan');

        }else{

            if ($images->count() > 2) {
                # code...

                $publish = Listing::where('slug', $slug)->update([
                    'class' => 'premium',
                    
                ]);

              
    
                $log = ActivityLog::Create([
                    'title' => 'Premium Listin Published',
                    'message' => 'You just successfully published a premium listing',
                    'for_' => Auth::user()->id
                ]);
    
                return back()->with('publish', 'Your listing has been published ' .'you have published ' .$users_listings .'premium listings');
            }else{

                
                return back()->with('unpublish', 'Please add atleast 2 images to listing');

            }

        

           
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
                
                return redirect('/agent/single_listing' .'/'.$listing->slug);
    
            
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
