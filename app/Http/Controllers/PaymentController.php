<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {

      
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            dd($e);
            return Redirect::back()->with('msg','The paystack token has expired. Please refresh the page and try again.');
        }  
        
        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        // $paymentDetails = Paystack::getPaymentData();

       

        return view('agents.success')

        // $order = Subscription::firstOrCreate([
        //     'status' => $paymentDetails['data']['status'],
        //     'reference' => $paymentDetails['data']['reference'],
        //     'amount' => $paymentDetails['data']['amount'],
        //     'paid_at' => $paymentDetails['data']['paid_at'],
        //     'channel' => $paymentDetails['data']['channel'],
        //     'currency' => $paymentDetails['data']['currency'],
        //     'ip_address' => $paymentDetails['data']['ip_address'],
          
            
        //     'user_id' => $paymentDetails['data']['metadata']['user_id'],
           
        //     'mobile' => $paymentDetails['data']['log']['mobile'],
        //     'status' => $paymentDetails['data']['status'],
        //     'customer_id' => $paymentDetails['data']['customer']['id'],
        //     'customer_email' => $paymentDetails['data']['customer']['email'],
        //     'customer_code' => $paymentDetails['data']['customer']['customer_code']
        // ]);


        // dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}