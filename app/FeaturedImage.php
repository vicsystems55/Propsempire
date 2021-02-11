<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedImage extends Model
{
    //

    protected $guarded = [];

    public function listings()
    {
        return $this->belongsTo('App\Listing');
    }


}
