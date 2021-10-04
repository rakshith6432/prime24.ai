<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="{{ $information['author'] }}">
	    <meta name="keywords" content="{{ $information['keywords'] }}">
	    <meta name="description" content="{{ $information['description'] }}">

        <!-- CSRF TOKEN -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- TITLE -->
        <title>{{ $information['title'] }}</title>
        
        @include('layouts.header')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!--Bootstrap css -->
        <link href="{{URL::asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/slick.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/slick-theme.css')}}" rel="stylesheet">
        <!-- Data Table CSS -->
	    <link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />

    </head>
    <body>
        <!-- LOADER -->
		<div id="global-loader" >
			<img src="{{URL::asset('img/svgs/loader.svg')}}" alt="loader">           
		</div>

        <section id="main-wrapper">
            
            <div class="relative flex items-top h-100vh justify-center min-h-screen">
                <div class="bg-shape"></div>

                <div class="container-fluid">

                    <div class="container">
                        <div class="row">

                            <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
                                <a class="navbar-brand" href="#"><img src="{{ URL::asset('img/brand/logo.png') }}" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link scroll" href="#about-wrapper">{{ __('About') }} <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link scroll" href="#features-wrapper">{{ __('Features') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link scroll" href="#prices-wrapper">{{ __('Prices') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact-wrapper">{{ __('Contact Us') }}</a>
                                        </li>
                                        <li class="nav-item ml-8">
                                            @if (Route::has('login'))
                                                <div>
                                                    @auth
                                                        <a href="{{ route('user.tts') }}" class="action-button pl-4 pr-4">{{ __('Dashboard') }}</a>
                                                    @else
                                                        <a href="{{ route('login') }}" class="action-button" id="login-button">{{ __('Login') }}</a>

                                                        @if (config('settings.registration') == 'enabled')
                                                            @if (Route::has('register'))
                                                                <a href="{{ route('register') }}" class="ml-2 action-button pl-4 pr-4">{{ __('Sign Up') }}</a>
                                                            @endif
                                                        @endif
                                                    @endauth
                                                </div>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </nav>
   
                        </div>
                    </div>

                    @include('layouts.flash')

                    <div class="central-banner">
                        <div class="row text-center">
                            <div class="col-md-6 col-sm-12 pt-9 pl-9">
                                <div class="text-container">
                                    <h2><span>Text to Speech</span> Converter</h2>
                                    <p class="pl-6 pr-6">{{ __('Create realistic voices for any text in seconds by using') }} <br> {{ __('over 630+ realistic voices across 70+ languages') }}.</p>

                                    <a href="{{ route('register') }}" class="btn btn-primary">{{ __('Get Started Now') }}</a>

                                    <div class="vendors">
                                        <h6>Powered By</h6>
                                        <span class="mr-3"><img src="{{ URL::asset('img/csp/aws-sm.png') }}" alt=""></span>
                                        <span class="mr-3"><img src="{{ URL::asset('img/csp/azure-sm.png') }}" alt=""></span>
                                        <span class="mr-3"><img src="{{ URL::asset('img/csp/gcp-sm.png') }}" alt=""></span>
                                        <span><img src="{{ URL::asset('img/csp/ibm-sm.png') }}" alt=""></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="image-container pr-9">
                                    <img src="{{ URL::asset('img/files/home-bg.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>

            </div>  
        </section>


        <!-- SECTION - ABOUT US 
        ========================================================-->
        <section id="about-wrapper">

            <div class="container">         

                
                <!-- ABOUT US-->
                <div class="row d-flex" id="about-us">
                    

                    <!-- ABOUT TITLE -->
                    <div class="col-md-6" id="about-title">
                        
                        <div class="title">
                            <h6>{{ __('Synthesize Text with') }} <span>{{ config('app.name') }}</span></h6>
                            <p class="p-about">{{ __('We make to text to speech conversion easier and fun') }}</p>
                        </div>

                    </div> <!-- END ABOUT TITLE -->


                    <!-- ABOUT INFORMATION -->
                    <div class="col-md-6" id="about-info">

                        <p>Quando vituperatoribus ut sit, congue scripta delicatissimi an eos. An vel ignota consulatu referrentur. In populo labore usu, per summo aliquando democritum cu, iracundia suscipiantur ex pri. Agital definitiones ea vim, inani graece agimal an eos. Pri nobis placerat in, an tota minimum vulputate duo, eu mel scripserit scriptorem repudiandae. Tale recusabo eam eu, ex sea facer omittantur reformidans.</p>

                        <a href="#">{{ __('Discover More') }}</a>

                    </div> <!-- END ABOUT INFORMATION -->


                </div> <!-- END ROW -->
                
                

                <!-- BOX FEATURES LIST -->
                <div class="row d-flex text-center">

                    <div class="col-md-12 mb-4">
                        <h6>{{ __('Voiceover production is easires and faster with us') }}</h6>
                        <p class="mb-3 p-about">{{ __('Enjoy full flexibility of text to speech synthesize tasks') }}</p>
                    </div>
                    
                    <div class="card special-shadow border-0">
                        <div class="card-body p-5">                        
                            <div class="col-md-12">
                                <ul class="nav nav-pills w-100 mb-3" id="pills-tab" role="tablist">
                                    
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">{{ __('Standard & Neural Voices') }}</a>
                                    </li>                       
                                
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">{{ __('Multiple Voice Effects') }}</a>
                                    </li>                        
                                
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">{{ __('Various Payment Options') }}</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-left pt-9 pr-7">
                                                <h4>{{ __('Standard & Neural Voices') }}</h4>
                                                <p>Choose from a set of 630+ voices across 70+ languages and variants, including Mandarin, Hindi, Spanish, Arabic, Russian, and more. Pick the voice that works best for your user and application.</p>
                                                <a href="{{ route('register') }}" class="btn btn-primary">Sign Up Now</a>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <img class="w-70" src="{{ URL::asset('img/svgs/banner-1.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-left pt-9 pr-7">
                                                <h4>{{ __('Multiple Voice Effects') }}</h4>
                                                <p>Customize your speech with SSML tags that allow you to add various voice effects such as newscaster and conversational styles, and pauses, numbers, date and time formatting, mute words and phrases, and other pronunciation instructions.</p>
                                                <a href="{{ route('register') }}" class="btn btn-primary">Sign Up Now</a>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <img class="w-70" src="{{ URL::asset('img/svgs/banner-1.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-left pt-9 pr-7">
                                                <h4>{{ __('Various Payment Options') }}</h4>
                                                <p>We support flexible payment options, you can use your favourit Stripe or Paypal payment gateways, and also subscribe for our monthly plans to have available credits all the time, plus you can always top up with addtional credits if needed.</p>
                                                <a href="{{ route('register') }}" class="btn btn-primary">Sign Up Now</a>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <img class="w-70" src="{{ URL::asset('img/svgs/banner-1.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div> <!-- END BOX FEATURES LIST -->



            </div> <!-- END CONTAINER -->
            
        </section> <!-- END ABOUT US SECTION -->


        <!-- PARTNER BANNER SECTION
        ========================================================-->
        <section id="partners-banner">
            
            <div class="container">
                
                <div class="row text-center">
                    

                    <!-- PARTNER CLASS -->
                    <div class="col-sm-12 col-md-4">
                        
                        <div id="partner-group">
                            
                            <h6><span>Powered</span> By</h6>

                            <p>Powered by leading Cloud Service Providers who offer Standard TTS voices, and also Neural Text-to-Speech (NTTS) voices that deliver advanced improvements in speech quality through a new machine learning approach.</p>

                        </div>

                    </div> <!-- END PARTNER CLASS -->

                    
                    <!-- FOOTER LOGOS -->
                    <div class="col-sm-12 col-md-8 pt-6" id="partner-logo">

                        <ul>
                            <li class="logo-1"><img src="{{ URL::asset('img/csp/aws-logo.png') }}" alt=""></li>
                            <li class="logo-2"><img src="{{ URL::asset('img/csp/azure-logo.png') }}" alt=""></li>
                            <li class="logo-3"><img src="{{ URL::asset('img/csp/gcp-logo.png') }}" alt=""></li>
                            <li class="logo-4"><img src="{{ URL::asset('img/csp/ibm-logo.png') }}" alt=""></li>                            
                        </ul>			

                    </div> <!-- END PARTNER LOGOS -->

                </div> <!-- END ROW -->

            </div> <!-- END CONTAINER -->

        </section> <!-- END PARTNER BANNER STYLES -->


        <!-- SECTION - FEATURES
        ========================================================-->
        <section id="features-wrapper">

            <div class="container">

                <div class="row text-center mb-7">
                    <div class="col-md-12 title">
                        <h6><span>Text to Speech</span> {{ __('Benefits') }}</h6>
                        <p>{{ __('Enjoy the full flexibility of the platform with ton of features') }}</p>
                    </div>
                </div>
                
                <div class="row">
                    
                    <!-- LIST OF SOLUTIONS -->
                    <div class="row d-flex" id="solutions-list">
                        

                        <!-- SOLUTION -->
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                
                            <div class="solution">
                                
                                <div class="solution-content">
                                    
                                    <div class="solution-logo">
                                        <i class="fa fa-magic"></i>
                                    </div>
                                
                                    <h5>{{ __('Over 70+ Languages') }}</h5>
                                    
                                    <p>Lorem ipsum dolor sit amet est consectetur adipisicing elit. Ut aspernatur mollitia aliquid consectetur illo sapiente nemo obcaecati unde.</p>

                                </div>                         

                            </div>

                        </div> <!-- END SOLUTION -->


                        <!-- SOLUTION -->
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                
                            <div class="solution">
                                
                                <div class="solution-content">
                                    
                                    <div class="solution-logo">
                                        <i class="mdi mdi-access-point"></i>
                                    </div>
                                
                                    <h5>{{ __('Over 630+ Voices') }}</h5>
                                    
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aspernatur mollitia aliquid consectetur illo sapiente nemo obcaecati unde.</p>

                                </div>

                            </div>

                        </div> <!-- END SOLUTION -->


                        <!-- SOLUTION -->
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                
                            <div class="solution">
                                
                                <div class="solution-content">
                                    
                                    <div class="solution-logo">
                                        <i class="mdi mdi-audiobook"></i>
                                    </div>
                                
                                    <h5>{{ __('Various Audio Formats') }}</h5>
                                    
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aspernatur mollitia aliquid consectetur illo sapiente nemo obcaecati unde.</p>

                                </div>

                            </div>

                        </div> <!-- END SOLUTION -->


                        <!-- SOLUTION -->
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                
                            <div class="solution">
                                
                                <div class="solution-content">
                                    
                                    <div class="solution-logo">
                                        <i class="fa fa-magic"></i>
                                    </div>
                                
                                    <h5>{{ __('Amazing Voice Effects') }}</h5>
                                    
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aspernatur mollitia aliquid consectetur illo sapiente nemo obcaecati unde.</p>

                                </div>

                            </div>

                        </div> <!-- END SOLUTION -->


                        <!-- SOLUTION -->
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                
                            <div class="solution">
                                
                                <div class="solution-content">
                                    
                                    <div class="solution-logo">
                                        <i class="mdi mdi-upload-network"></i>
                                    </div>
                                
                                    <h5>{{ __('Share Results Easily') }}</h5>
                                    
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aspernatur mollitia aliquid consectetur illo sapiente nemo obcaecati unde.</p>

                                </div>                                

                            </div>

                        </div> <!-- END SOLUTION -->


                        <!-- SOLUTION -->
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                
                            <div class="solution">
                                
                                <div class="solution-content">
                                    
                                    <div class="solution-logo">
                                        <i class="fa fa-google-wallet"></i>
                                    </div>
                                
                                    <h5>{{ __('Multiple Payment Options') }}</h5>
                                    
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aspernatur mollitia aliquid consectetur illo sapiente nemo obcaecati unde.</p>

                                </div>

                            </div>

                        </div> <!-- END SOLUTION -->


                        <!-- SOLUTION -->
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                
                            <div class="solution">
                                
                                <div class="solution-content">
                                    
                                    <div class="solution-logo">
                                        <i class="fa fa-th-large"></i>
                                    </div>
                                
                                    <h5>{{ __('Standard & Neural Voices') }}</h5>
                                    
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aspernatur mollitia aliquid consectetur illo sapiente nemo obcaecati unde.</p>

                                </div>            

                            </div>

                        </div> <!-- END SOLUTION -->


                        <!-- SOLUTION -->
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                
                            <div class="solution">
                                
                                <div class="solution-content">
                                    
                                    <div class="solution-logo">
                                        <i class="mdi mdi-account-alert"></i>
                                    </div>
                                
                                    <h5>{{ __('Great Customer Support') }}</h5>
                                    
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aspernatur mollitia aliquid consectetur illo sapiente nemo obcaecati unde.</p>

                                </div>

                            </div>

                        </div> <!-- END SOLUTION -->

                        
                    </div> <!-- END LIST OF SOLUTIONS -->

                </div>

            </div>

        </section>


        <!-- SECTION - PRICES
        ========================================================-->
        <section id="prices-wrapper">

            <div class="container">

                <div class="row text-center mb-7">
                    <div class="col-md-12 title">
                        <h6>{{ __('Choose') }} <span>{{ __('Your Plan') }}</span></h6>
                        <p>{{ __('Flexible monthly subsciptions with top up options') }}</p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-3 col-sm-12">
                        <div class="price-card pt-2">
                            <div class="card border-0 pr-3 pb-4 pt-3 pl-6">
                                <div class="plan">																										
                                    <span class="welcome-plan-currency-sign">$</span><span class="plan-cost">0</span><span class="welcome-plan-currency-sign">USD</span>
                                    <p class="fs-12">Try for free</p>
                                    <div class="divider"></div>
                                    <div class="plan-title">Free</div>
                                    <p class="fs-12 mb-2">Start synthesizing text to speech for free</p>
                                    <ul class="fs-12">                                       
                                        <li><i class="fa fa-check"></i> Get 2000 characters</li>
                                        <li><i class="fa fa-check"></i> Access to all Standard Voices</li>
                                        <li><i class="fa fa-check"></i> Access to all Standard Voice Effects</li>
                                        <li><i class="fa fa-check"></i> Limited audio file creation</li>                                        														
                                    </ul>

                                    <div class="text-center plan-action-button">
                                        <a href="" class="btn btn-primary fs-12">{{ __('Subscribe Now') }}</a>                                        
                                    </div>
                                </div>							
                            </div>	
                        </div>							
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <div class="price-card pt-2">
                            <div class="card border-0 pr-3 pb-4 pt-3 pl-6">
                                <div class="plan">																										
                                    <span class="welcome-plan-currency-sign">$</span><span class="plan-cost">5</span><span class="welcome-plan-currency-sign">USD</span>
                                    <p class="fs-12">Start small with monthly 100K characters</p>
                                    <div class="divider"></div>
                                    <div class="plan-title">Basic</div>
                                    <p class="fs-12 mb-2">Start synthesizing quickly</p>
                                    <ul class="fs-12">                                       
                                        <li><i class="fa fa-check"></i> Get 100000 characters / month</li>
                                        <li><i class="fa fa-check"></i> Access to all Standard Voices</li>
                                        <li><i class="fa fa-check"></i> Access to all Neural Voices</li>
                                        <li><i class="fa fa-check"></i> Access to all Standard Voice Effects</li>
                                        <li><i class="fa fa-check"></i> Access to all Neural Voice Effects</li>
                                        <li><i class="fa fa-check"></i> Limited audio file creation</li>                                        														
                                    </ul>

                                    <div class="text-center plan-action-button">
                                        <a href="" class="btn btn-primary fs-12">{{ __('Subscribe Now') }}</a>                                        
                                    </div>
                                </div>							
                            </div>	
                        </div>							
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <div class="price-card pt-2">
                            <div class="card border-0 pr-3 pb-4 pt-3 pl-6">
                                <div class="plan">																										
                                    <span class="welcome-plan-currency-sign">$</span><span class="plan-cost">19</span><span class="welcome-plan-currency-sign">USD</span>
                                    <p class="fs-12">Enjoy 500K characters with Neural Voices</p>
                                    <div class="divider"></div>
                                    <div class="plan-title">Standard</div>
                                    <p class="fs-12 mb-2">Get all available options</p>
                                    <ul class="fs-12">                                       
                                        <li><i class="fa fa-check"></i> Get 500000 characters / month</li>
                                        <li><i class="fa fa-check"></i> Access to all Standard Voices</li>
                                        <li><i class="fa fa-check"></i> Access to all Neural Voices</li>
                                        <li><i class="fa fa-check"></i> Access to all Standard Voice Effects</li>
                                        <li><i class="fa fa-check"></i> Access to all Neural Voice Effects</li>
                                        <li><i class="fa fa-check"></i> Unlimited audio file creation</li>                                        														
                                    </ul>

                                    <div class="text-center plan-action-button">
                                        <a href="" class="btn btn-primary fs-12">{{ __('Subscribe Now') }}</a>                                        
                                    </div>
                                </div>							
                            </div>	
                        </div>							
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <div class="price-card pt-2">
                            <div class="card border-0 pr-3 pb-4 pt-3 pl-6">
                                <div class="plan">																										
                                    <span class="welcome-plan-currency-sign">$</span><span class="plan-cost">39</span><span class="welcome-plan-currency-sign">USD</span>
                                    <p class="fs-12">Enjoy 1M characters with all features</p>
                                    <div class="divider"></div>
                                    <div class="plan-title">Professional</div>
                                    <p class="fs-12 mb-2">Get Pro with Text Synthesize</p>
                                    <ul class="fs-12">                                       
                                        <li><i class="fa fa-check"></i> Get 500000 characters / month</li>
                                        <li><i class="fa fa-check"></i> Access to all Standard Voices</li>
                                        <li><i class="fa fa-check"></i> Access to all Neural Voices</li>
                                        <li><i class="fa fa-check"></i> Access to all Standard Voice Effects</li>
                                        <li><i class="fa fa-check"></i> Access to all Neural Voice Effects</li>
                                        <li><i class="fa fa-check"></i> Unlimited audio file creation</li> 
                                        <li><i class="fa fa-check"></i> 24x7 Customer Support Team</li>                                        														
                                    </ul>

                                    <div class="text-center plan-action-button">
                                        <a href="" class="btn btn-primary fs-12">{{ __('Subscribe Now') }}</a>                                        
                                    </div>
                                </div>							
                            </div>	
                        </div>							
                    </div>
                </div>

            </div>

        </section>


        <!-- SECTION - CUSTOMER FEEDBACKS
        ========================================================-->
        <section id="feedbacks-wrapper">

            <div class="container text-center">


                <!-- SECTION TITLE -->
                <div class="row mb-7">

                    <div class="title">
                        <h6>{{ __('Customer') }} <span>{{ __('Reviews') }}</span></h6>
                        <p>{{ __('We guarantee that you will be one of them as well') }}</p>
                    </div>

                </div> <!-- END SECTION TITLE -->

                
                <div class="row text-center">                    
                    

                    <!-- CUSTOMER FEEDBACKS -->
                    <div id="feedbacks">


                        <!-- FEEDBACK -->
                        <div class="feedback">						
                            
                            <!-- COMMENTER -->
                            <div class="feedback-image">
                                <img src="{{ URL::asset('img/feedback/feedback-1.jpg') }}" alt="Feedback" class="rounded-circle"><span class="fa fa-quote-left"></span>
                            </div>	
                            <p class="feedback-reviewer">Stella Mac Smith</p>
                            <p>Los Angeles - California</p>				
                            
                            <!-- MAIN COMMENT -->
                            <p class="comment"><sup><span class="fa fa-quote-left"></span></sup> Everything is perfect, CloudPolly saves me a ton of time to create audio for my text content, both for video and for audiobooks. <br /> Thanks so much for all your help! <sub><span class="fa fa-quote-right"></span></sub></p>
                            
                            <span>{{ __('Overall rating of our service') }}</span>
                            <ul>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                            </ul>

                        </div> <!-- END FEEDBACK -->



                        <!-- FEEDBACK -->
                        <div class="feedback">						
                            
                            <!-- COMMENTER -->
                            <div class="feedback-image">
                                <img src="{{ URL::asset('img/feedback/feedback-2.jpg') }}" alt="Feedback" class="rounded-circle"><span class="fa fa-quote-left"></span>
                            </div>	
                            <p class="feedback-reviewer">Tina Kandelaki</p>
                            <p>Campbridge - United Kingdom</p>				
                            
                            <!-- MAIN COMMENT -->
                            <p class="comment"><sup><span class="fa fa-quote-left"></span></sup> My favourite Text to Speech platform! User friendly interface, lot's of languages and voices available plus each one has various voice effects associated with them. <sub><span class="fa fa-quote-right"></span></sub></p>
                            
                            <span>{{ __('Overall rating of our service') }}</span>
                            <ul>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-half-full"></li>
                            </ul>

                        </div> <!-- END FEEDBACK -->



                        <!-- FEEDBACK -->
                        <div class="feedback">						
                            
                            <!-- COMMENTER -->
                            <div class="feedback-image">
                                <img src="{{ URL::asset('img/feedback/feedback-3.jpg') }}" alt="Feedback" class="rounded-circle"><span class="fa fa-quote-left"></span>
                            </div>	
                            <p class="feedback-reviewer">San Sebastian</p>
                            <p>Bogota - Columbia</p>				
                            
                            <!-- MAIN COMMENT -->
                            <p class="comment"><sup><span class="fa fa-quote-left"></span></sup> One of the best platforms to use Text to Speech services. Availability of voices get's you existed! Highly recommended. <sub><span class="fa fa-quote-right"></span></sub></p>
                            
                            <span>{{ __('Overall rating of our service') }}</span>
                            <ul>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                            </ul>

                        </div> <!-- END FEEDBACK -->



                </div> <!-- END CUSTOMER FEEDBACKS -->


                    
                </div> <!-- END ROW -->
                
            </div> <!-- END CONTAINER -->

            <div class="container">

                <div class="row text-center position-relative action-call-wrapper">

                    <div id="action-call" class="w-100 h-100"></div>

                    <div class="col-md-12 action-content">
                        <h5 class="mb-4">{{ __('Try for Free') }}</h5>
                        <h4>{{ __('Try Text to Speech Synthesize for Free') }}</h4>
                        <p class="mb-5">{{ __('You will receive free credits upon registration') }}</p>

                        <a href="{{ route('register') }}" class="btn btn-primary">{{ __('Sign Up Now') }}</a>
                        <p class="fs-10 mt-2">{{ __('No credit card required') }}</p>
                    </div>
                </div>
            </div>
            
        </section> <!-- END SECTION CUSTOMER FEEDBACK -->



        <!-- SECTION - CONTACT US
        ========================================================-->
        <section id="contact-wrapper">
            
            <div class="container">

                <!-- SECTION TITLE -->
                <div class="row text-center mb-7" id="contact-row">

                    <div class="title">
                        <h6><span>{{ __('Contact') }}</span> {{ __('Us') }}</h6>
                        <p>{{ __('Got questions? We are here to help at any time.') }}</p>
                    </div>

                </div> <!-- END SECTION TITLE -->

                
                <div class="row"> 

                    <div class="col-md-12">
                        <form id="" action="{{ route('contact') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        
                            <div class="row justify-content-md-center">
                                <div class="col-md-6 col-sm-12">
                                    <div class="input-box mb-4">                             
                                        <label for="name" class="fs-12 font-weight-bold text-md-right">{{ __('Full Name') }}</label>
                                        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="off" placeholder="First and Last Names" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror                            
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-md-center">
                                <div class="col-md-6 col-sm-12">
                                    <div class="input-box mb-4">                             
                                        <label for="email" class="fs-12 font-weight-bold text-md-right">{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off"  placeholder="Email Address" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror                            
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-md-center">
                                <div class="col-md-6 col-sm-12">
                                    <div class="input-box">	
                                        <h6 class="fs-12 font-weight-bold">{{ __('Question Category') }}</h6>
                                        <select id="support-category" name="category" data-placeholder="Select Question Category:" required>			
                                            <option value="General Quesion" selected>General Question</option>
                                            <option value="Billing Quesion">Billing Question</option>
                                            <option value="Technical Question">Technical Question</option>
                                            <option value="Bug Report">Bug Report</option>
                                            <option value="Improvement Suggestion">Improvement Suggestion</option>
                                            <option value="General Feedback">General Feedback</option>
                                        </select>
                                        @error('category')
                                            <p class="text-danger">{{ $errors->first('category') }}</p>
                                        @enderror	
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-md-center">
                                <div class="col-md-6 col-sm-12">
                                    <div class="input-box">	
                                        <h6 class="fs-12 font-weight-bold">{{ __('Email Message') }}</h6>							
                                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="10" required></textarea>
                                        @error('message')
                                            <p class="text-danger">{{ $errors->first('message') }}</p>
                                        @enderror	
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="recaptcha" id="recaptcha">
                            
                            <div class="row justify-content-md-center">
                                <!-- ACTION BUTTON -->
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary">{{ __('Send Message') }}</button>							
                                </div>
                            </div>
                        
                        </form>

                    </div>                   
                    
                </div>
            
            </div>

        </section>




        <!-- FOOTER SECTION
        ========================================================-->
        <footer id="welcome-footer" >

            <!-- FOOTER MAIN CONTENT -->
            <div id="footer" class="container text-center">
                        
                <div class="row">                    


                    <!-- FOOTER TITLE -->
                    <div class="col-md-4 col-sm-12" id="footer-logo">
                        
                        <img src="{{ URL::asset('img/brand/logo-white.png') }}" alt="Brand Logo">

                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut culpa maiores maxime illo nostrum aut totam, porro dolore minima <a href=""> {{ __('Learn More') }}<i class="fa fa-angle-double-right"></i></a></p>		

                        <div class="dropdown header-locale" id="frontend-local">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <span class="header-icon fa fa-globe pr-2"></span><span class="fs-12">{{ Config::get('locale')[App::getLocale()]['code'] }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
                                <div class="local-menu">
                                    @foreach (Config::get('locale') as $lang => $language)
                                        @if ($lang != App::getLocale())
                                            <a href="{{ route('locale', $lang) }}" class="dropdown-item d-flex">
                                                <div class="text-info"><i class="flag flag-{{ $language['flag'] }} mr-3"></i></div>
                                                <div>
                                                    <span class="font-weight-normal fs-12">{{ $language['display'] }}</span>
                                                </div>
                                            </a>                                        
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div> <!-- END FOOTER TITLE & SOCIAL ICONS -->



                    <!-- FOOTER LINKS -->
                    <div class="col-md-8 col-sm-12" id="footer-links">
                        
                        <div class="row">

                            <!-- INFORMATION LINKS -->
                            <div class="col-md-3 col-sm-12">
                            
                                <h5>{{ __('Information') }}</h5>

                                <ul class="list-unstyled">
                                    <li><a href="">Cloud Services</a></li>
                                    <li><a href="">AWS Cloud</a></li>
                                    <li><a href="">Azure Cloud</a></li>
                                    <li><a href="">GCP Cloud</a></li>
                                    <li><a href="">IBM Cloud</a></li>                                
                                </ul>

                            </div> <!-- END INFORMATION LINKS -->


                            <!-- SOLUTIONS LINKS -->
                            <div class="col-md-3 col-sm-12">				
                                    
                                <h5>{{ __('Links') }}</h5>

                                <ul class="list-unstyled">
                                    <li><a href="">Customer Support</a></li>
                                    <li><a href="">Documentation</a></li>
                                    <li><a href="">Prices</a></li>
                                    <li><a href="">Register</a></li>							
                                </ul>				

                            </div> <!-- END SOLUTIONS LINKS -->


                            <!-- COMPANY LINKS -->
                            <div class="col-md-3 col-sm-12">
                                
                                <h5>{{ __('Company') }}</h5>
                                
                                <ul class="list-unstyled">
                                    <li><a href="">About CloudPolly</a></li>
                                    <li><a href="">Terms & Conditions</a></li>
                                    <li><a href="">Privacy Policy</a></li>							
                                    <li><a href="">FAQ</a></li>
                                    <li><a href="">Contact Us</a></li>
                                </ul>		         

                            </div> <!-- COMPANY LINKS -->

                            
                            <!-- CONNECTION & NEWS LINKS -->
                            <div class="col-md-3 col-sm-12 pr-0">
                                                        
                                <h5>{{ __('Connect') }}</h5>

                                <ul id="footer-icons" class="list-inline">
                                    <a href=""><li class="list-inline-item"><i class="footer-icon fa fa-twitter"></i></li></a>
                                    <a href=""><li class="list-inline-item"><i class="footer-icon fa fa-facebook"></i></li></a>
                                    <a href=""><li class="list-inline-item"><i class="footer-icon fa fa-linkedin"></i></li></a>
                                    <a href=""><li class="list-inline-item"><i class="footer-icon fa fa-instagram"></i></li></a>
                                    <a href=""><li class="list-inline-item mt-1"><i class="footer-icon fa fa-google"></i></li></a>
                                    <a href=""><li class="list-inline-item"><i class="footer-icon fa fa-youtube"></i></li></a>
                                    <a href=""><li class="list-inline-item"><i class="footer-icon fa fa-flickr"></i></li></a>
                                    <a href=""><li class="list-inline-item"><i class="footer-icon fa fa-vimeo"></i></li></a>
                                </ul>

                            </div> <!-- END CONNECTION & NEWS LINKS -->
                        
                        </div>


                    </div> <!-- END FOOTER LINKS -->
                    

                </div> <!-- END ROW -->

            </div> <!-- END CONTAINER-->



            <!-- COPYRIGHT INFORMATION -->
            <div id="copyright" class="container">
                
                <p class="copyright-left">Copyright © {{ date("Y") }} <a href="https://codecanyon.net/user/berkine/portfolio" target="_blank">{{ config('app.name') }}</a> | {{ __('All rights reserved') }}</p>
                
                <p class="copyright-right"><a href="{{ route('terms') }}" target="_blank">{{ __('Terms & Conditions') }}</a></p>
                <p class="copyright-right"><a href="{{ route('privacy') }}" target="_blank">{{ __('Privacy Policy') }}</a><span>|</span></p>

                <!-- SCROLL TO TOP -->
                <a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>

            </div>
            
        </footer> <!-- END FOOTER -->  
        
        <!-- Jquery js-->
        <script src="{{URL::asset('js/jquery-3.6.0.min.js')}}"></script>
        <!-- Bootstrap4 js-->
        <script src="{{URL::asset('plugins/bootstrap/popper.min.js')}}"></script>
        <script src="{{URL::asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>      
        <!-- Awselect JS -->
        <script src="{{URL::asset('plugins/awselect/awselect.min.js')}}"></script>
        <script src="{{URL::asset('js/awselect.js')}}"></script>
        <!-- Custom js-->
        <script src="{{URL::asset('js/slick.min.js')}}"></script>
        <script src="{{URL::asset('js/frontend.js')}}"></script>

        @if (config('services.google.recaptcha.enable') == 'on')
            <!-- Google reCaptcha JS -->
            <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.google.recaptcha.site_key') }}"></script>
            <script>
                grecaptcha.ready(function() {
                    grecaptcha.execute('{{ config('services.google.recaptcha.site_key') }}', {action: 'contact'}).then(function(token) {
                        if (token) {
                        document.getElementById('recaptcha').value = token;
                        }
                    });
                });
            </script>
        @endif
        
    </body>   
    @include('cookieConsent::index') 
</html>
