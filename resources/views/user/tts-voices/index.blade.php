@extends('layouts.app')
@section('css')
	<!-- Green Audio Player CSS -->
	<link href="{{ URL::asset('plugins/audio-player/green-audio-player.css') }}" rel="stylesheet" />
@endsection
@section('page-header')
<!-- PAGE HEADER -->
<div class="page-header mt-5-7">
	<div class="page-leftheader">
		<h4 class="page-title mb-0">{{ __('All Voices') }}</h4>
		<ol class="breadcrumb mb-2">
			<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="mdi mdi-access-point mr-2 fs-12"></i>{{ __('User') }}</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('All Voices') }}</a></li>
		</ol>
	</div>
</div>
<!-- END PAGE HEADER -->
@endsection
@section('content')	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('TTS Voices Demo') }}</h3>
				</div>
				<div class="card-body pt-5">
					<div class="accordion" id="accordionVoiceList">

						<div class="card">
						  	<div class="card-header" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#arabic" aria-expanded="true" aria-controls="collapseOne">
										<i class="flag flag-sa"></i> Arabic
							  		</button>
								</h2>
						  	</div>					  
						  	<div id="arabic" class="collapse" aria-labelledby="headingOne" data-parent="#accordionVoiceList">
								<div class="card-body mb-2">
									<!-- VOICE AUDIO FILE -->
									<div class="voice-player">
										<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
										<div class="text-center player">
											<audio class="voice-audio" preload="none">
												<source src="{{ URL::asset('voices/aws/zeina-aws.mp3') }}" type="audio/mpeg">
											</audio>	
										</div>
										<span class="voice-name">Zeina <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
									</div><!-- END VOICE AUDIO FILE -->									
								</div>
						  	</div>
						</div>

						<div class="card">
						  	<div class="card-header" id="headingTwo">
								<h2 class="mb-0">
									<button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#chinese" aria-expanded="false" aria-controls="collapseTwo">
										<i class="flag flag-cn"></i> Chinese (China)
									</button>
								</h2>
						  	</div>
						  	<div id="chinese" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionVoiceList">
								<div class="card-body mb-2">
									<!-- VOICE AUDIO FILE -->
									<div class="voice-player">
										<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
										<div class="text-center player">
											<audio class="voice-audio" preload="none">
												<source src="{{ URL::asset('voices/aws/zhiyu-aws.mp3') }}" type="audio/mpeg">
											</audio>	
										</div>
										<span class="voice-name">Zhiyu <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
									</div><!-- END VOICE AUDIO FILE -->
								</div>
						  	</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingThree">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#danish" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-dk"></i> Danish (Denmark)
								  </button>
							  </h2>
							</div>
							<div id="danish" class="collapse" aria-labelledby="headingThree" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/naja-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Naja <span class="text-muted font-weight-normal fs-12">(F)</span></span>								
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/mads-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Mads <span class="text-muted font-weight-normal fs-12">(M)</span></span>								
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="headingFour">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#dutch" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-nl"></i> Dutch (Netherlands)
								  </button>
							  </h2>
							</div>
							<div id="dutch" class="collapse" aria-labelledby="headingFour" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/lotte-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Lotte <span class="text-muted font-weight-normal fs-12">(F)</span></span>							
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/ruben-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Ruben <span class="text-muted font-weight-normal fs-12">(M)</span></span>							
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>
						
						<div class="card">
							<div class="card-header" id="headingFive">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#english-australia" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-au"></i> English (Australia)
								  </button>
							  </h2>
							</div>
							<div id="english-australia" class="collapse" aria-labelledby="headingFive" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/nicole-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Nicole <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/olivia-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Olivia <span class="text-muted font-weight-normal fs-12">(F)</span></span>
									<p class="neural-voice">Neural</p>								
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/russell-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Russell <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="headingSix">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#english-uk" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-gb"></i> English (UK)
								  </button>
							  </h2>
							</div>
							<div id="english-uk" class="collapse" aria-labelledby="headingSix" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/amy-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Amy <span class="text-muted font-weight-normal fs-12">(F)</span></span>									 
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/emma-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Emma <span class="text-muted font-weight-normal fs-12">(F)</span></span>								
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/brian-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Brian <span class="text-muted font-weight-normal fs-12">(M)</span></span>								
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/amy-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Amy <span class="text-muted font-weight-normal fs-12">(F)</span></span>
									<p class="neural-voice">Neural</p>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/emma-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Emma <span class="text-muted font-weight-normal fs-12">(F)</span></span>
									<p class="neural-voice">Neural</p>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/brian-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Brian <span class="text-muted font-weight-normal fs-12">(M)</span></span>
									<p class="neural-voice">Neural</p>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="headingSeven">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#english-in" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-in"></i> English (India)
								  </button>
							  </h2>
							</div>
							<div id="english-in" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/aditi-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Aditi <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/raveena-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Raveena <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="headingEight">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#english-us" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-us"></i> English (US)
								  </button>
							  </h2>
							</div>
							<div id="english-us" class="collapse" aria-labelledby="headingEight" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/ivy-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Ivy <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/joanna-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Joanna <span class="text-muted font-weight-normal fs-12">(F)</span></span>								
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/kendra-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Kendra <span class="text-muted font-weight-normal fs-12">(F)</span></span>								
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/kimberly-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Kimberly <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/salli-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Salli <span class="text-muted font-weight-normal fs-12">(F)</span></span>								
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/joey-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Joey <span class="text-muted font-weight-normal fs-12">(M)</span></span>								
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/justin-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Justin <span class="text-muted font-weight-normal fs-12">(M)</span></span>								
								</div><!-- END VOICE AUDIO FILE -->								
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/matthew-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Matthew <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/ivy-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Ivy <span class="text-muted font-weight-normal fs-12">(F)</span></span>
									<p class="neural-voice">Neural</p>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/joanna-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Joanna <span class="text-muted font-weight-normal fs-12">(F)</span></span>
									<p class="neural-voice">Neural</p>								
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/kendra-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Kendra <span class="text-muted font-weight-normal fs-12">(F)</span></span>
									<p class="neural-voice">Neural</p>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/kimberly-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Kimberly <span class="text-muted font-weight-normal fs-12">(F)</span></span>
									<p class="neural-voice">Neural</p>								
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/Salli-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Salli <span class="text-muted font-weight-normal fs-12">(F)</span></span>
									<p class="neural-voice">Neural</p>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/joey-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Joey <span class="text-muted font-weight-normal fs-12">(M)</span></span>
									<p class="neural-voice">Neural</p>								
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/justin-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Justin <span class="text-muted font-weight-normal fs-12">(M)</span></span>
									<p class="neural-voice">Neural</p>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/matthew-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Matthew <span class="text-muted font-weight-normal fs-12">(M)</span></span>
									<p class="neural-voice">Neural</p>								
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/kevin-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Kevin <span class="text-muted font-weight-normal fs-12">(M)</span></span>
									<p class="neural-voice">Neural</p>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="headingNine">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#english-welsh" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-gb-wls"></i> English (Wales)
								  </button>
							  </h2>
							</div>
							<div id="english-welsh" class="collapse" aria-labelledby="headingNine" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/geraint-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Geraint <span class="text-muted font-weight-normal fs-12">(M)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="headingTen">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#french" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-fr"></i> French (France)
								  </button>
							  </h2>
							</div>
							<div id="french" class="collapse" aria-labelledby="headingTen" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/celine-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Celine <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/lea-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Lea <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/mathieu-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Mathieu <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading11">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#french-ca" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-ca"></i> French (Canada)
								  </button>
							  </h2>
							</div>
							<div id="french-ca" class="collapse" aria-labelledby="heading11" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/chantal-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Chantal <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								<div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/gabrielle-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Gabrielle <span class="text-muted font-weight-normal fs-12">(F)</span></span>
									<p class="neural-voice">Neural</p>								
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading12">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#german" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-de"></i> German (Germany)
								  </button>
							  </h2>
							</div>
							<div id="german" class="collapse" aria-labelledby="heading12" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/marlene-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Marlene <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/vicky-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Vicky <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/hans-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Hans <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading13">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#hindi" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-in"></i> Hindi (India)
								  </button>
							  </h2>
							</div>
							<div id="hindi" class="collapse" aria-labelledby="heading13" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/aditi-in-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Aditi <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading14">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#icelandic" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-is"></i> Icelandic (Iceland)
								  </button>
							  </h2>
							</div>
							<div id="icelandic" class="collapse" aria-labelledby="heading14" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/dora-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Dora <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/karl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Karl <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading15">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#italian" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-it"></i> Italian (Italy)
								  </button>
							  </h2>
							</div>
							<div id="italian" class="collapse" aria-labelledby="heading15" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/carla-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Carla <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/bianca-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Bianca <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/giorgio-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Giorgio <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading16">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#japanese" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-jp"></i> Japanese (Japan)
								  </button>
							  </h2>
							</div>
							<div id="japanese" class="collapse" aria-labelledby="heading16" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/mizuki-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Mizuki <span class="text-muted font-weight-normal fs-12">(F)</span></span>									 
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/takumi-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Takumi <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading17">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#korean" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-kr"></i> Korean (Korea)
								  </button>
							  </h2>
							</div>
							<div id="korean" class="collapse" aria-labelledby="heading17" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/seoyeon-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Seoyeon <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								<div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/seoyeon-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Seoyeon <span class="text-muted font-weight-normal fs-12">(F)</span></span>
									<p class="neural-voice">Neural</p>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading18">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#norwegian" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-no"></i> Norwegian (Norway)
								  </button>
							  </h2>
							</div>
							<div id="norwegian" class="collapse" aria-labelledby="heading18" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/liv-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Liv <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading19">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#polish" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-pl"></i> Polish (Poland)
								  </button>
							  </h2>
							</div>
							<div id="polish" class="collapse" aria-labelledby="heading19" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/ewa-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">EWA <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/maja-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Maja <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/jan-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Jan <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/jacek-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Jacek <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading20">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Portuguese" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-br"></i> Portuguese (Brazil)
								  </button>
							  </h2>
							</div>
							<div id="Portuguese" class="collapse" aria-labelledby="heading20" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/camila-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Camila <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/victoria-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Victoria <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/ricardo-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Ricardo <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/camila-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Camila <span class="text-muted font-weight-normal fs-12">(F)</span></span>
									<p class="neural-voice">Neural</p>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading21">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Portuguese-pt" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-pt"></i> Portuguese (Portugal)
								  </button>
							  </h2>
							</div>
							<div id="Portuguese-pt" class="collapse" aria-labelledby="heading21" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/ines-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Inês <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/cristiano-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Cristiano <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading22">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Romanian" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-ro"></i> Romanian (Romania)
								  </button>
							  </h2>
							</div>
							<div id="Romanian" class="collapse" aria-labelledby="heading22" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/carmen-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Carmen <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading23">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Russian" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-ru"></i> Russian (Russia)
								  </button>
							  </h2>
							</div>
							<div id="Russian" class="collapse" aria-labelledby="heading23" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/tatyana-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Tatyana <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/maxim-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Maxim <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>
						  
						<div class="card">
							<div class="card-header" id="heading24">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Spanish" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-es"></i> Spanish (Spain)
								  </button>
							  </h2>
							</div>
							<div id="Spanish" class="collapse" aria-labelledby="heading24" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/conchita-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Conchita <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/lucia-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Lucia <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/enrique-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Enrique <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading25">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Spanish-mx" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-mx"></i> Spanish (Mexico)
								  </button>
							  </h2>
							</div>
							<div id="Spanish-mx" class="collapse" aria-labelledby="heading25" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/mia-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Mia <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading26">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Spanish-usa" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-us"></i> Spanish (USA)
								  </button>
							  </h2>
							</div>
							<div id="Spanish-usa" class="collapse" aria-labelledby="heading26" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/lupe-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Lupe <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/penelope-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Penélope <span class="text-muted font-weight-normal fs-12">(F)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player mb-6">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/miguel-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Miguel <span class="text-muted font-weight-normal fs-12">(M)</span></span>									
								</div><!-- END VOICE AUDIO FILE -->
								<!-- VOICE AUDIO FILE -->
								<div class="voice-player">
									<img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									<div class="text-center player">
										<audio class="voice-audio" preload="none">
											<source src="{{ URL::asset('voices/aws/lupe-nrl-aws.mp3') }}" type="audio/mpeg">
										</audio>	
									</div>
									<span class="voice-name">Lupe <span class="text-muted font-weight-normal fs-12">(F)</span></span>
									<p class="neural-voice">Neural</p>									
								</div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading27">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Swedish" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-se"></i> Swedish (Sweden)
								  </button>
							  </h2>
							</div>
							<div id="Swedish" class="collapse" aria-labelledby="heading27" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/astrid-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Astrid <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						<div class="card">
							<div class="card-header" id="heading28">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Turkish" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-tr"></i> Turkish (Turkey)
								  </button>
							  </h2>
							</div>
							<div id="Turkish" class="collapse" aria-labelledby="heading28" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/filiz-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Filiz <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>

						  <div class="card">
							<div class="card-header" id="heading29">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#Welsh" aria-expanded="false" aria-controls="collapseTwo">
									  <i class="flag flag-gb-wls"></i> Welsh (Wales)
								  </button>
							  </h2>
							</div>
							<div id="Welsh" class="collapse" aria-labelledby="heading29" data-parent="#accordionVoiceList">
							  <div class="card-body mb-2">
								  <!-- VOICE AUDIO FILE -->
								  <div class="voice-player">
									  <img src="{{ URL::asset('img/csp/aws-ssm.png') }}" alt="">																	
									  <div class="text-center player">
										  <audio class="voice-audio" preload="none">
											  <source src="{{ URL::asset('voices/aws/gwyneth-aws.mp3') }}" type="audio/mpeg">
										  </audio>	
									  </div>
									  <span class="voice-name">Gwyneth <span class="text-muted font-weight-normal fs-12">(F)</span></span>									  
								  </div><!-- END VOICE AUDIO FILE -->
							  </div>
							</div>
					  	</div>
						

					  </div>
				</div>
			</div>
		</div>
	</div>

		</div>
	</div>
	<!-- END APP CONTENT-->
</div>
@endsection
@section('js')
	<!-- Green Audio Player JS -->
	<script src="{{ URL::asset('plugins/audio-player/green-audio-player.js') }}"></script>
	<script src="{{ URL::asset('js/audio-player.js') }}"></script>
@endsection