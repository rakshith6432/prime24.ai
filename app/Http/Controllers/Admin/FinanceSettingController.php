<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;
use App\Models\PaymentPlatform;


class FinanceSettingController extends Controller
{
    private $api;

    public function __construct()
    {
        $this->api = new LicenseController();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verify = $this->api->verify_license();

        if($verify['status']!=true){
            die('Your license is invalid or not activated, please contact support.');
        }
        
        return view('admin.finance-management.settings.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $verify = $this->api->verify_license();

        if($verify['status']!=true){
            die('Your license is invalid or not activated, please contact support.');
        }
        
        request()->validate([
            'payment-option' => 'required',
            'tax' => 'required',

            'enable-paypal' => 'sometimes|required',
            'paypal_client_id' => 'required_if:enable-paypal,on',
            'paypal_client_secret' => 'required_if:enable-paypal,on',
            'paypal_base_uri' => 'required_if:enable-paypal,on',

            'enable-paypal-subscription' => 'sometimes|required',
            'paypal_webhook_uri' => 'required_if:enable-paypal-subscription,on',
            'paypal_webhook_id' => 'required_if:enable-paypal-subscription,on',

            'enable-stripe' => 'sometimes|required',
            'stripe_key' => 'required_if:enable-stripe,on',
            'stripe_secret_key' => 'required_if:enable-stripe,on',
            'stripe_base_uri' => 'required_if:enable-stripe,on',

            'enable-stripe-subscription' => 'sometimes|required',
            'stripe_webhook_uri' => 'required_if:enable-stripe-subscription,on',
            'stripe_webhook_secret' => 'required_if:enable-stripe-subscription,on',
        ]);

        $this->storeConfiguration('PAYMENT_OPTION', request('payment-option'));
        $this->storeConfiguration('PAYMENT_TAX', request('tax'));       
        
        $this->storeConfiguration('STRIPE_ENABLED', request('enable-stripe'));
        $this->storeConfiguration('STRIPE_SUBSCRIPTION_ENABLED', request('enable-stripe-subscription'));
        $this->storeConfiguration('STRIPE_KEY', request('stripe_key'));
        $this->storeConfiguration('STRIPE_SECRET', request('stripe_secret_key'));  
        $this->storeConfiguration('STRIPE_BASE_URI', request('stripe_base_uri'));  
        $this->storeConfiguration('STRIPE_WEBHOOK_URI', request('stripe_webhook_uri'));  
        $this->storeConfiguration('STRIPE_WEBHOOK_SECRET', request('stripe_webhook_secret'));  

        $this->storeConfiguration('PAYPAL_ENABLED', request('enable-paypal'));
        $this->storeConfiguration('PAYPAL_SUBSCRIPTION_ENABLED', request('enable-paypal-subscription'));
        $this->storeConfiguration('PAYPAL_CLIENT_ID', request('paypal_client_id'));      
        $this->storeConfiguration('PAYPAL_CLIENT_SECRET', request('paypal_client_secret'));  
        $this->storeConfiguration('PAYPAL_BASE_URI', request('paypal_base_uri'));  
        $this->storeConfiguration('PAYPAL_WEBHOOK_URI', request('paypal_webhook_uri'));  
        $this->storeConfiguration('PAYPAL_WEBHOOK_ID', request('paypal_webhook_id'));  
        
        
        # Enable/Disable Payment Gateways
        if (request('enable-paypal') == 'on') {
            $paypal = PaymentPlatform::where('name', 'PayPal')->first();
            $paypal->enabled = 1;
            $paypal->save();

        } else {
            $paypal = PaymentPlatform::where('name', 'PayPal')->first();
            $paypal->enabled = 0;
            $paypal->save();
        }

        if (request('enable-stripe') == 'on') {
            $stripe = PaymentPlatform::where('name', 'Stripe')->first();
            $stripe->enabled = 1;
            $stripe->save();

        } else {
            $stripe = PaymentPlatform::where('name', 'Stripe')->first();
            $stripe->enabled = 0;
            $stripe->save();
        }

        # Enable/Disable Payment Gateways Subscription
        if (request('enable-paypal-subscription') == 'on') {
            $paypal = PaymentPlatform::where('name', 'PayPal')->first();
            $paypal->subscriptions_enabled = 1;
            $paypal->save();

        } else {
            $paypal = PaymentPlatform::where('name', 'PayPal')->first();
            $paypal->subscriptions_enabled = 0;
            $paypal->save();
        }

        if (request('enable-stripe-subscription') == 'on') {
            $stripe = PaymentPlatform::where('name', 'Stripe')->first();
            $stripe->subscriptions_enabled = 1;
            $stripe->save();

        } else {
            $stripe = PaymentPlatform::where('name', 'Stripe')->first();
            $stripe->subscriptions_enabled = 0;
            $stripe->save();
        }

        return redirect()->back()->with('success', 'Payment settings successfully updated');
    }

    /**
     * Record in .env file
     */
    private function storeConfiguration($key, $value)
    {
        $path = base_path('.env');

        if (file_exists($path)) {

            file_put_contents($path, str_replace(
                $key . '=' . env($key), $key . '=' . $value, file_get_contents($path)
            ));

        }
    }

}
