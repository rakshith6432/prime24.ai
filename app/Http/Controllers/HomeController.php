<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Models\Setting;

class HomeController extends Controller
{
    /**
     * Show home page
     */
    public function index()
    {
        $information_rows = ['title', 'author', 'keywords', 'description'];
        $information = [];
        $settings = Setting::all();

        foreach ($settings as $row) {
            if (in_array($row['name'], $information_rows)) {
                $information[$row['name']] = $row['value'];
            }
        }

        return view('welcome', compact('information'));
    }


    /**
     * Display terms & conditions page
     * 
     */
    public function termsAndConditions() {
        return view('auth.service-terms');
    }


    /**
     * Display privacy policy page
     * 
     */
    public function privacyPolicy() {
        return view('auth.privacy-policy');
    }


    /**
     * Frontend contact us form
     * 
     */
    public function contact()
    {
        request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'category' => 'required',
            'message' => 'required|string',
        ]);

        if (config('services.google.recaptcha.enable') == 'on') {

            $recaptchaResult = $this->reCaptchaCheck(request('recaptcha'));

            if ($recaptchaResult->success != true) {
                return redirect()->back()->with('error', 'Google reCaptcha Validation has Failed');
            }

            if ($recaptchaResult->score >= 0.5) {

                Mail::send(array(), array(), function ($message) {
                    $message->from(request('email'), request('name'));
                    $message->cc(request('email'));
                    $message->to(config('mail.from.address'));
                    $message->subject(request('category'));
                    $message->setBody(request('message'));
                });

                if (Mail::failures()) {
                    return redirect()->back()->with('error', 'Sending email failed, please try again.');
                }

                return redirect()->back()->with('success', 'Email was successfully sent');

            } else {
                return redirect()->back()->with('error', 'Google reCaptcha Validation has Failed');
            }
        
        } else {

            Mail::send(array(), array(), function ($message) {
                $message->from(request('email'), request('name'));
                $message->cc(request('email'));
                $message->to(config('mail.from.address'));
                $message->subject(request('category'));
                $message->setBody(request('message'));
            });

            if (Mail::failures()) {
                return redirect()->back()->with('error', 'Sending email failed, please try again.');
            }

            return redirect()->back()->with('success', 'Email was successfully sent');
        }  
    }


    /**
     * Verify reCaptch for frontend contact us page (if enabled)
     * 
     */
    private function reCaptchaCheck($recaptcha)
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $data = [
                'secret' => config('services.google.recaptcha.secret_key'),
                'response' => $recaptcha,
                'remoteip' => $remoteip
        ];

        $options = [
                'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
                ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);

        return $resultJson;
    }
}
