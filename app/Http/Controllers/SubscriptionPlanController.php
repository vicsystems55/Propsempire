<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SubscriptionPlan;

class SubscriptionPlanController extends Controller
{
    //

    public function subscription_plans()
    {
        # code...

        $subscription_plans = SubscriptionPlan::where('status', 'active')->get();

        return view('agents.subscription_plans',[
            'subscription_plans' => $subscription_plans
        ]);
    }
}
