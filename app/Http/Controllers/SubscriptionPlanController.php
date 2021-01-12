<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SubscriptionPlan;

use App\Subscription;

use Auth;

class SubscriptionPlanController extends Controller
{
    //

    public function subscription_plans()
    {
        # code...

        $subscription_plans = SubscriptionPlan::where('status', 'active')->get();

        $subscriptions = Subscription::get();

        $my_plan = Subscription::where('agent_id', Auth::user()->id)->first();

            if ($my_plan) {
                # code...
            }else{
                $my_plan = null;
            }

        return view('agents.subscription_plans',[
            'subscription_plans' => $subscription_plans,
            'subscriptions' => $subscriptions,
            'my_plan' => $my_plan
        ]);
    }
}
