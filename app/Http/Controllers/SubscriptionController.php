<?php

namespace App\Http\Controllers;

use App\Subscription;

use Paystack;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function subscribe()
    {
        //
        $paymentDetails = Paystack::getPaymentData();

        $subscription_plan_id = $paymentDetails['data']['metadata']['subscription_plan_id'];

        $plan_name = $paymentDetails['data']['metadata']['plan_name'];

        $agent_id = $paymentDetails['data']['metadata']['agent_id'];

        $slug = $paymentDetails['data']['metadata']['slug'];

        $subscription_plan_id = $paymentDetails['data']['metadata']['subscription_plan_id'];

        $order = Subscription::updateOrCreate([
            
            'subscription_plan_id' => $subscription_plan_id,
            'plan_name' => $plan_name,
            'agent_id' => $agent_id,
            'slug' => $slug,
            'subscription_plan_id' => $subscription_plan_id

        ]);




        return view('agents.success');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $paymentDetails = Paystack::getPaymentData();




        return view('agents.success');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}
