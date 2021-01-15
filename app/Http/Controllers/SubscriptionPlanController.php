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
            $my_plan = $my_plan->plan_name;
        }else{
            $my_plan = null;
        }

           

        return view('agents.subscription_plans',[
            'subscription_plans' => $subscription_plans,
            'subscriptions' => $subscriptions,
            'my_plan' => $my_plan
        ]);
    }

    public function checkout_plans($plan_name)
    {
        # code...

        $single_plan = SubscriptionPlan::where('plan_name', $plan_name)->first();

        return view('agents.checkout_plans',[
            'single_plan' => $single_plan
        ]);

    }
}
