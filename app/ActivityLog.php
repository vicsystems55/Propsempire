<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    //
    public function users()
    {
        # code...
        return $this->belongsTo('App\User');
    }
}