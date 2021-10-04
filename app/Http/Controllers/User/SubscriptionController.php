<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PaymentPlatform;
use App\Models\PrepaidPlan;
use App\Models\Plan;

class SubscriptionController extends Controller
{   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan = Plan::count();

        $prepaid_exists = PrepaidPlan::count();

        $subscriptions = Plan::where('plan_type', 'subscription')
                             ->where('status', 'active')->get();
        $prepaids = PrepaidPlan::where('plan_type', 'prepaid')
                        ->where('status', 'active')->get();

        return view('user.balance.subscriptions.index', compact('plan', 'prepaid_exists', 'subscriptions', 'prepaids'));
    }


    /**
     * Checkout for Pre Paid plans only.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function checkout(PrepaidPlan $id)
    {   
        if (config('services.paypal.enable') == 'on' && config('services.stripe.enable') == 'on') {
            $payment_platforms = PaymentPlatform::all();
        } elseif (config('services.paypal.enable') == 'on' && config('services.stripe.enable') != 'on') {
            $payment_platforms = PaymentPlatform::where('name', 'PayPal')->get();
        } elseif (config('services.paypal.enable') != 'on' && config('services.stripe.enable') == 'on') {
            $payment_platforms = PaymentPlatform::where('name', 'Stripe')->get();
        }
        
        $tax_value = (config('payment.payment_tax') > 0) ? $tax = $id->cost * config('payment.payment_tax') / 100 : 0;

        $total_value = $tax_value + $id->cost;
        $currency = $id->currency;
        
        return view('user.balance.subscriptions.prepaid-checkout', compact('id', 'payment_platforms', 'tax_value', 'total_value', 'currency'));
    }


    /**
     * Checkout for Subscription plans only.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Plan $id)
    {   
        if (config('services.paypal.enable') == 'on' && config('services.stripe.enable') == 'on') {
            $payment_platforms = PaymentPlatform::where('subscriptions_enabled', true)->get();
        } elseif (config('services.paypal.enable') == 'on' && config('services.stripe.enable') != 'on') {
            $payment_platforms = PaymentPlatform::where('name', 'PayPal')->where('subscriptions_enabled', true)->get();  
        } elseif (config('services.paypal.enable') != 'on' && config('services.stripe.enable') == 'on') {
            $payment_platforms = PaymentPlatform::where('name', 'Stripe')->where('subscriptions_enabled', true)->get();
        }

        $tax_value = (config('payment.payment_tax') > 0) ? $tax = $id->cost * config('payment.payment_tax') / 100 : 0;

        $total_value = $tax_value + $id->cost;
        $currency = $id->currency;
        $gateway_plan_id = $id->gateway_plan_id;

        return view('user.balance.subscriptions.subscribe-checkout', compact('id', 'payment_platforms', 'tax_value', 'total_value', 'currency', 'gateway_plan_id'));
    } 
}
