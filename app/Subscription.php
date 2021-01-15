<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //

    protected $guarded = [];

    public function subscription_plans()
    {
        # code...
        return $this->belongsTo('App\SubscriptionPlan', 'subscription_plan_id');
    }
}
