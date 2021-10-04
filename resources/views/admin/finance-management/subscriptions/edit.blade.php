@extends('layouts.app')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7"> 
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Edit Subscription Plan') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-google-wallet mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.finance.dashboard') }}"> {{ __('Finance Management') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.finance.subscriptions') }}"> {{ __('Subscription Types') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('Edit Plan') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection

@section('content')						
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Edit Subscription Plan') }}</h3>
				</div>
				<div class="card-body pt-5">									
					<form action="{{ route('admin.finance.subscriptions.update', $id) }}" method="POST" enctype="multipart/form-data">
						@method('PUT')
						@csrf

						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12">				
								<div class="input-box">	
									<h6>{{ __('Plan Type') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<select id="plan-type" name="plan-type" data-placeholder="Select Plan Type:">			
										<option value="subscription" selected>Subscription</option>
									</select>
									@error('plan-type')
										<p class="text-danger">{{ $errors->first('plan-type') }}</p>
									@enderror
								</div> 							
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">						
								<div class="input-box">	
									<h6>{{ __('Plan Status') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<select id="plan-status" name="plan-status" data-placeholder="Select Plan Status:">			
										<option value="active" @if ($id->status == 'active') selected @endif>Active</option>
										<option value="closed" @if ($id->status == 'closed') selected @endif>Closed</option>
									</select>
									@error('plan-status')
										<p class="text-danger">{{ $errors->first('plan-status') }}</p>
									@enderror	
								</div>						
							</div>
						
						</div>

						<div class="row mt-2">							
							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('Plan Name') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="plan-name" name="plan-name" value="{{ $id->plan_name }}" required>
									</div> 
									@error('plan-name')
										<p class="text-danger">{{ $errors->first('plan-name') }}</p>
									@enderror
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('Price') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="cost" name="cost" value="{{ $id->cost }}" required>
									</div> 
									@error('cost')
										<p class="text-danger">{{ $errors->first('cost') }}</p>
									@enderror
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('PayPal Gateway Plan ID') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="paypal_gateway_plan_id" name="paypal_gateway_plan_id" value="{{ $id->paypal_gateway_plan_id }}">
									</div> 
									@error('paypal_gateway_plan_id')
										<p class="text-danger">{{ $errors->first('paypal_gateway_plan_id') }}</p>
									@enderror
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('Stripe Gateway Plan ID') }} <span class="text-muted">({{ __('Required for Stripe') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="stripe_gateway_plan_id" name="stripe_gateway_plan_id" value="{{ $id->stripe_gateway_plan_id }}">
									</div> 
									@error('stripe_gateway_plan_id')
										<p class="text-danger">{{ $errors->first('stripe_gateway_plan_id') }}</p>
									@enderror
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('Currency') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<select id="currency" name="currency" data-placeholder="Select Currency:">			
										<option value="AFA" @if ($id->currency == 'AFA') selected @endif>Afghan Afghani</option>
										<option value="ALL" @if ($id->currency == 'ALL') selected @endif>Albanian Lek</option>
										<option value="DZD" @if ($id->currency == 'DZD') selected @endif>Algerian Dinar</option>
										<option value="AOA" @if ($id->currency == 'AOA') selected @endif>Angolan Kwanza</option>
										<option value="ARS" @if ($id->currency == 'AFA') selected @endif>Argentine Peso</option>
										<option value="AMD" @if ($id->currency == 'AFA') selected @endif>Armenian Dram</option>
										<option value="AWG" @if ($id->currency == 'AFA') selected @endif>Aruban Florin</option>
										<option value="AUD" @if ($id->currency == 'AFA') selected @endif>Australian Dollar</option>
										<option value="AZN" @if ($id->currency == 'AFA') selected @endif>Azerbaijani Manat</option>
										<option value="BSD" @if ($id->currency == 'BSD') selected @endif>Bahamian Dollar</option>
										<option value="BHD" @if ($id->currency == 'BHD') selected @endif>Bahraini Dinar</option>
										<option value="BDT" @if ($id->currency == 'BDT') selected @endif>Bangladeshi Taka</option>
										<option value="BBD" @if ($id->currency == 'BBD') selected @endif>Barbadian Dollar</option>
										<option value="BYR" @if ($id->currency == 'BYR') selected @endif>Belarusian Ruble</option>
										<option value="BEF" @if ($id->currency == 'BEF') selected @endif>Belgian Franc</option>
										<option value="BZD" @if ($id->currency == 'BZD') selected @endif>Belize Dollar</option>
										<option value="BMD" @if ($id->currency == 'BMD') selected @endif>Bermudan Dollar</option>
										<option value="BTN" @if ($id->currency == 'BTN') selected @endif>Bhutanese Ngultrum</option>
										<option value="BOB" @if ($id->currency == 'BOB') selected @endif>Bolivian Boliviano</option>
										<option value="BAM" @if ($id->currency == 'BAM') selected @endif>Bosnia-Herzegovina Convertible Mark</option>
										<option value="BWP" @if ($id->currency == 'BWP') selected @endif>Botswanan Pula</option>
										<option value="BRL" @if ($id->currency == 'BRL') selected @endif>Brazilian Real</option>
										<option value="GBP" @if ($id->currency == 'GBP') selected @endif>British Pound Sterling</option>
										<option value="BND" @if ($id->currency == 'BND') selected @endif>Brunei Dollar</option>
										<option value="BGN" @if ($id->currency == 'BGN') selected @endif>Bulgarian Lev</option>
										<option value="BIF" @if ($id->currency == 'BIF') selected @endif>Burundian Franc</option>
										<option value="KHR" @if ($id->currency == 'KHR') selected @endif>Cambodian Riel</option>
										<option value="CAD" @if ($id->currency == 'CAD') selected @endif>Canadian Dollar</option>
										<option value="CVE" @if ($id->currency == 'CVE') selected @endif>Cape Verdean Escudo</option>
										<option value="KYD" @if ($id->currency == 'KYD') selected @endif>Cayman Islands Dollar</option>
										<option value="XOF" @if ($id->currency == 'XOF') selected @endif>CFA Franc BCEAO</option>
										<option value="XAF" @if ($id->currency == 'XAF') selected @endif>CFA Franc BEAC</option>
										<option value="XPF" @if ($id->currency == 'XPF') selected @endif>CFP Franc</option>
										<option value="CLP" @if ($id->currency == 'CLP') selected @endif>Chilean Peso</option>
										<option value="CNY" @if ($id->currency == 'CNY') selected @endif>Chinese Yuan</option>
										<option value="COP" @if ($id->currency == 'COP') selected @endif>Colombian Peso</option>
										<option value="KMF" @if ($id->currency == 'KMF') selected @endif>Comorian Franc</option>
										<option value="CDF" @if ($id->currency == 'CDF') selected @endif>Congolese Franc</option>
										<option value="CRC" @if ($id->currency == 'CRC') selected @endif>Costa Rican ColÃ³n</option>
										<option value="HRK" @if ($id->currency == 'HRK') selected @endif>Croatian Kuna</option>
										<option value="CUC" @if ($id->currency == 'CUC') selected @endif>Cuban Convertible Peso</option>
										<option value="CZK" @if ($id->currency == 'CZK') selected @endif>Czech Republic Koruna</option>
										<option value="DKK" @if ($id->currency == 'DKK') selected @endif>Danish Krone</option>
										<option value="DJF" @if ($id->currency == 'DJF') selected @endif>Djiboutian Franc</option>
										<option value="DOP" @if ($id->currency == 'DOP') selected @endif>Dominican Peso</option>
										<option value="XCD" @if ($id->currency == 'XCD') selected @endif>East Caribbean Dollar</option>
										<option value="EGP" @if ($id->currency == 'EGP') selected @endif>Egyptian Pound</option>
										<option value="ERN" @if ($id->currency == 'ERN') selected @endif>Eritrean Nakfa</option>
										<option value="EEK" @if ($id->currency == 'EEK') selected @endif>Estonian Kroon</option>
										<option value="ETB" @if ($id->currency == 'ETB') selected @endif>Ethiopian Birr</option>
										<option value="EUR" @if ($id->currency == 'EUR') selected @endif>Euro</option>
										<option value="FKP" @if ($id->currency == 'FKP') selected @endif>Falkland Islands Pound</option>
										<option value="FJD" @if ($id->currency == 'FJD') selected @endif>Fijian Dollar</option>
										<option value="GMD" @if ($id->currency == 'GMD') selected @endif>Gambian Dalasi</option>
										<option value="GEL" @if ($id->currency == 'GEL') selected @endif>Georgian Lari</option>
										<option value="DEM" @if ($id->currency == 'DEM') selected @endif>German Mark</option>
										<option value="GHS" @if ($id->currency == 'GHS') selected @endif>Ghanaian Cedi</option>
										<option value="GIP" @if ($id->currency == 'GIP') selected @endif>Gibraltar Pound</option>
										<option value="GRD" @if ($id->currency == 'GRD') selected @endif>Greek Drachma</option>
										<option value="GTQ" @if ($id->currency == 'GTQ') selected @endif>Guatemalan Quetzal</option>
										<option value="GNF" @if ($id->currency == 'GNF') selected @endif>Guinean Franc</option>
										<option value="GYD" @if ($id->currency == 'GYD') selected @endif>Guyanaese Dollar</option>
										<option value="HTG" @if ($id->currency == 'HTG') selected @endif>Haitian Gourde</option>
										<option value="HNL" @if ($id->currency == 'HNL') selected @endif>Honduran Lempira</option>
										<option value="HKD" @if ($id->currency == 'HKD') selected @endif>Hong Kong Dollar</option>
										<option value="HUF" @if ($id->currency == 'HUF') selected @endif>Hungarian Forint</option>
										<option value="ISK" @if ($id->currency == 'ISK') selected @endif>Icelandic KrÃ³na</option>
										<option value="INR" @if ($id->currency == 'INR') selected @endif>Indian Rupee</option>
										<option value="IDR" @if ($id->currency == 'IDR') selected @endif>Indonesian Rupiah</option>
										<option value="IRR" @if ($id->currency == 'IRR') selected @endif>Iranian Rial</option>
										<option value="IQD" @if ($id->currency == 'IQD') selected @endif>Iraqi Dinar</option>
										<option value="ILS" @if ($id->currency == 'ILS') selected @endif>Israeli New Sheqel</option>
										<option value="ITL" @if ($id->currency == 'ITL') selected @endif>Italian Lira</option>
										<option value="JMD" @if ($id->currency == 'JMD') selected @endif>Jamaican Dollar</option>
										<option value="JPY" @if ($id->currency == 'JPY') selected @endif>Japanese Yen</option>
										<option value="JOD" @if ($id->currency == 'JOD') selected @endif>Jordanian Dinar</option>
										<option value="KZT" @if ($id->currency == 'KZT') selected @endif>Kazakhstani Tenge</option>
										<option value="KES" @if ($id->currency == 'KES') selected @endif>Kenyan Shilling</option>
										<option value="KWD" @if ($id->currency == 'KWD') selected @endif>Kuwaiti Dinar</option>
										<option value="KGS" @if ($id->currency == 'KGS') selected @endif>Kyrgystani Som</option>
										<option value="LAK" @if ($id->currency == 'LAK') selected @endif>Laotian Kip</option>
										<option value="LVL" @if ($id->currency == 'LVL') selected @endif>Latvian Lats</option>
										<option value="LBP" @if ($id->currency == 'LBP') selected @endif>Lebanese Pound</option>
										<option value="LSL" @if ($id->currency == 'LSL') selected @endif>Lesotho Loti</option>
										<option value="LRD" @if ($id->currency == 'LRD') selected @endif>Liberian Dollar</option>
										<option value="LYD" @if ($id->currency == 'LYD') selected @endif>Libyan Dinar</option>
										<option value="LTL" @if ($id->currency == 'LTL') selected @endif>Lithuanian Litas</option>
										<option value="MOP" @if ($id->currency == 'MOP') selected @endif>Macanese Pataca</option>
										<option value="MKD" @if ($id->currency == 'MKD') selected @endif>Macedonian Denar</option>
										<option value="MGA" @if ($id->currency == 'MGA') selected @endif>Malagasy Ariary</option>
										<option value="MWK" @if ($id->currency == 'MWK') selected @endif>Malawian Kwacha</option>
										<option value="MYR" @if ($id->currency == 'MYR') selected @endif>Malaysian Ringgit</option>
										<option value="MVR" @if ($id->currency == 'MVR') selected @endif>Maldivian Rufiyaa</option>
										<option value="MRO" @if ($id->currency == 'MRO') selected @endif>Mauritanian Ouguiya</option>
										<option value="MUR" @if ($id->currency == 'MUR') selected @endif>Mauritian Rupee</option>
										<option value="MXN" @if ($id->currency == 'MXN') selected @endif>Mexican Peso</option>
										<option value="MDL" @if ($id->currency == 'MDL') selected @endif>Moldovan Leu</option>
										<option value="MNT" @if ($id->currency == 'MNT') selected @endif>Mongolian Tugrik</option>
										<option value="MAD" @if ($id->currency == 'MAD') selected @endif>Moroccan Dirham</option>
										<option value="MZM" @if ($id->currency == 'MZM') selected @endif>Mozambican Metical</option>
										<option value="MMK" @if ($id->currency == 'MMK') selected @endif>Myanmar Kyat</option>
										<option value="NAD" @if ($id->currency == 'NAD') selected @endif>Namibian Dollar</option>
										<option value="NPR" @if ($id->currency == 'NPR') selected @endif>Nepalese Rupee</option>
										<option value="ANG" @if ($id->currency == 'ANG') selected @endif>Netherlands Antillean Guilder</option>
										<option value="TWD" @if ($id->currency == 'TWD') selected @endif>New Taiwan Dollar</option>
										<option value="NZD" @if ($id->currency == 'NZD') selected @endif>New Zealand Dollar</option>
										<option value="NIO" @if ($id->currency == 'NIO') selected @endif>Nicaraguan CÃ³rdoba</option>
										<option value="NGN" @if ($id->currency == 'NGN') selected @endif>Nigerian Naira</option>
										<option value="KPW" @if ($id->currency == 'KPW') selected @endif>North Korean Won</option>
										<option value="NOK" @if ($id->currency == 'NOK') selected @endif>Norwegian Krone</option>
										<option value="OMR" @if ($id->currency == 'OMR') selected @endif>Omani Rial</option>
										<option value="PKR" @if ($id->currency == 'PKR') selected @endif>Pakistani Rupee</option>
										<option value="PAB" @if ($id->currency == 'PAB') selected @endif>Panamanian Balboa</option>
										<option value="PGK" @if ($id->currency == 'PGK') selected @endif>Papua New Guinean Kina</option>
										<option value="PYG" @if ($id->currency == 'PYG') selected @endif>Paraguayan Guarani</option>
										<option value="PEN" @if ($id->currency == 'PEN') selected @endif>Peruvian Nuevo Sol</option>
										<option value="PHP" @if ($id->currency == 'PHP') selected @endif>Philippine Peso</option>
										<option value="PLN" @if ($id->currency == 'PLN') selected @endif>Polish Zloty</option>
										<option value="QAR" @if ($id->currency == 'QAR') selected @endif>Qatari Rial</option>
										<option value="RON" @if ($id->currency == 'RON') selected @endif>Romanian Leu</option>
										<option value="RUB" @if ($id->currency == 'RUB') selected @endif>Russian Ruble</option>
										<option value="RWF" @if ($id->currency == 'RWF') selected @endif>Rwandan Franc</option>
										<option value="SVC" @if ($id->currency == 'SVC') selected @endif>Salvadoran ColÃ³n</option>
										<option value="WST" @if ($id->currency == 'WST') selected @endif>Samoan Tala</option>
										<option value="SAR" @if ($id->currency == 'SAR') selected @endif>Saudi Riyal</option>
										<option value="RSD" @if ($id->currency == 'RSD') selected @endif>Serbian Dinar</option>
										<option value="SCR" @if ($id->currency == 'SCR') selected @endif>Seychellois Rupee</option>
										<option value="SLL" @if ($id->currency == 'SLL') selected @endif>Sierra Leonean Leone</option>
										<option value="SGD" @if ($id->currency == 'SGD') selected @endif>Singapore Dollar</option>
										<option value="SKK" @if ($id->currency == 'SKK') selected @endif>Slovak Koruna</option>
										<option value="SBD" @if ($id->currency == 'SBD') selected @endif>Solomon Islands Dollar</option>
										<option value="SOS" @if ($id->currency == 'SOS') selected @endif>Somali Shilling</option>
										<option value="ZAR" @if ($id->currency == 'ZAR') selected @endif>South African Rand</option>
										<option value="KRW" @if ($id->currency == 'KRW') selected @endif>South Korean Won</option>
										<option value="XDR" @if ($id->currency == 'XDR') selected @endif>Special Drawing Rights</option>
										<option value="LKR" @if ($id->currency == 'LKR') selected @endif>Sri Lankan Rupee</option>
										<option value="SHP" @if ($id->currency == 'SHP') selected @endif>St. Helena Pound</option>
										<option value="SDG" @if ($id->currency == 'SDG') selected @endif>Sudanese Pound</option>
										<option value="SRD" @if ($id->currency == 'SRD') selected @endif>Surinamese Dollar</option>
										<option value="SZL" @if ($id->currency == 'SZL') selected @endif>Swazi Lilangeni</option>
										<option value="SEK" @if ($id->currency == 'SEK') selected @endif>Swedish Krona</option>
										<option value="CHF" @if ($id->currency == 'CHF') selected @endif>Swiss Franc</option>
										<option value="SYP" @if ($id->currency == 'SYP') selected @endif>Syrian Pound</option>
										<option value="STD" @if ($id->currency == 'STD') selected @endif>São Tomé and Príncipe Dobra</option>
										<option value="TJS" @if ($id->currency == 'TJS') selected @endif>Tajikistani Somoni</option>
										<option value="TZS" @if ($id->currency == 'TZS') selected @endif>Tanzanian Shilling</option>
										<option value="THB" @if ($id->currency == 'THB') selected @endif>Thai Baht</option>
										<option value="TOP" @if ($id->currency == 'TOP') selected @endif>Tongan pa'anga</option>
										<option value="TTD" @if ($id->currency == 'TTD') selected @endif>Trinidad & Tobago Dollar</option>
										<option value="TND" @if ($id->currency == 'TND') selected @endif>Tunisian Dinar</option>
										<option value="TRY" @if ($id->currency == 'TRY') selected @endif>Turkish Lira</option>
										<option value="TMT" @if ($id->currency == 'TMT') selected @endif>Turkmenistani Manat</option>
										<option value="UGX" @if ($id->currency == 'UGZ') selected @endif>Ugandan Shilling</option>
										<option value="UAH" @if ($id->currency == 'UAH') selected @endif>Ukrainian Hryvnia</option>
										<option value="AED" @if ($id->currency == 'AED') selected @endif>United Arab Emirates Dirham</option>
										<option value="UYU" @if ($id->currency == 'UYU') selected @endif>Uruguayan Peso</option>
										<option value="USD" @if ($id->currency == 'USD') selected @endif>US Dollar</option>
										<option value="UZS" @if ($id->currency == 'UZS') selected @endif>Uzbekistan Som</option>
										<option value="VUV" @if ($id->currency == 'VUV') selected @endif>Vanuatu Vatu</option>
										<option value="VEF" @if ($id->currency == 'VEF') selected @endif>Venezuelan BolÃ­var</option>
										<option value="VND" @if ($id->currency == 'VND') selected @endif>Vietnamese Dong</option>
										<option value="YER" @if ($id->currency == 'YER') selected @endif>Yemeni Rial</option>
										<option value="ZMK" @if ($id->currency == 'ZMK') selected @endif>Zambian Kwacha</option>
									</select>
									@error('currency')
										<p class="text-danger">{{ $errors->first('currency') }}</p>
									@enderror
								</div> 						
							</div>
						</div>

						<div class="row mt-2">							
							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('Included Characters') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="characters" name="characters" value="{{ $id->characters }}" required>
									</div> 
									@error('characters')
										<p class="text-danger">{{ $errors->first('characters') }}</p>
									@enderror
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('Bonus Characters') }} <span class="text-muted">({{ __('Optional') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="bonus" name="bonus" value="{{ $id->bonus }}">
									</div> 
									@error('bonus')
										<p class="text-danger">{{ $errors->first('bonus') }}</p>
									@enderror
								</div> 						
							</div>
						</div>
							
						<div class="row mt-6">
							<div class="col-12">
								<div class="input-box">	
									<h6>{{ __('Primary Heading') }} <span class="text-muted">({{ __('Optional') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="primary-heading" name="primary-heading" value="{{ $id->primary_heading }}">
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-12">
								<div class="input-box">	
									<h6>{{ __('Secondary Heading') }} <span class="text-muted">({{ __('Optional') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="secondary-heading" name="secondary-heading" value="{{ $id->secondary_heading }}">
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-6">
							<div class="col-lg-12 col-md-12 col-sm-12">	
								<div class="input-box">	
									<h6>{{ __('Plan Features') }} <span class="text-muted">({{ __('Required') }})</span> <span class="text-danger">({{ __('Comma Seperated') }})</span></h6>							
									<textarea class="form-control" name="features" rows="10" >{{ $id->plan_features }}</textarea>
									@error('features')
										<p class="text-danger">{{ $errors->first('features') }}</p>
									@enderror	
								</div>											
							</div>
						</div>
						

						<!-- ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<a href="{{ route('admin.finance.subscriptions') }}" class="btn btn-cancel mr-2">{{ __('Cancel') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Save') }}</button>							
						</div>				

					</form>					
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
	<!-- Awselect JS -->
	<script src="{{URL::asset('plugins/awselect/awselect.min.js')}}"></script>
	<script src="{{URL::asset('js/awselect.js')}}"></script>
@endsection
