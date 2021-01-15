<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Listing;

use Auth;

class PublishListing extends Component
{

   public $me;

   public $user_id;

    public function render()
    {

        

      
        return view('livewire.publish-listing');
    }

    // public function publish($me)
    // {
    //     # code...
    //     $user_id = Auth::user()->id;

    //     $users_listings = Listing::where('posted_by', $user_id)->get()->count();

    //     if ($users_listings > 4) {
    //         # code...
    //         $this->dispatchBrowserEvent('name-updated', ['newName' => 'unpublished']);

    //     }else{

    //         $publish = Listing::find($me)->update([
    //             'status' => 'published'
    //         ]);

    //         $this->dispatchBrowserEvent('name-updated', ['newName' => 'published']);


    //     }
        

    // }

    public function test()
    {
        # code...

        $value = "me";

        $this->dispatchBrowserEvent('name-updated', ['newName' => $value]);
    }
}
