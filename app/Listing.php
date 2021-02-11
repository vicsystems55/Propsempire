<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //
    protected $guarded=[];

    public function users()
    {
        return $this->belongsTo('App\User', 'posted_by');
    }

    public function images()
    {
        return $this->hasMany('App\FeaturedImage', 'listing_id');
    }


}
