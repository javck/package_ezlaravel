@extends('layouts.site')

@section('css')
	<link rel="stylesheet" href="{{ asset('demos/app-landing/app-landing.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('demos/app-landing/css/fonts.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('one-page/css/et-line.css') }}" type="text/css" />
@endsection

@section('page_title')展示頁@stop

@section('pri_nav')
	<nav id="primary-menu" class="{{ setting('canvas.pri_menu_class') }}" >
		{{ menu('frontend_demo_left','menu.priMenu_one_page',['data_easing'=>'easeInOutExpo','data_speed'=>'1250','data_offset'=>'160']) }}
		{{ menu('frontend_demo_right','menu.priMenu_one_page',['data_easing'=>'easeInOutExpo','data_speed'=>'1250','data_offset'=>'160']) }}
	</nav><!-- #primary-menu end -->
@endsection

@section('page_top')
	@include('Ezlaravel::includes._slider3')
@endsection

@section('body')
	<!-- Modal -->
			@include('Ezlaravel::partials.modal_login')

				<div class="container clearfix">

					<div id="section-nextgen" class="page-section bottommargin-lg">
						<div class="row clearfix">

							<div class="col-lg-7 center">
								<img src="{{ Voyager::image($item_row1->pic) }}" alt="{{ $item_row1->alt }}" data-animate="fadeInLeft">
							</div>

							<div class="col-lg-5">
								<div class="topmargin-lg d-none d-lg-block"></div>
								<img src="demos/app-landing/images/section/section-1-icon.png" alt="{{ $item_row1->alt }}" style="display: block;" class="bottommargin-sm">
								<div class="emphasis-title bottommargin-sm">
									<span class="before-heading">走向未來</span>
									<h2 style="font-size: 42px;" class="font-body ls1 t400">{{ $item_row1->title }}</h2>
								</div>
								<p style="color: #777;" class="lead">{!! $item_row1->content !!}</p>
								<a href="{{ $item_row1->url }}" class="section-more-link">{{ $item_row1->url_txt }} <i class="icon-angle-right"></i></a>
							</div>

						</div>
					</div>

					<div class="line"></div><div class="clear"></div>

					<div id="section-stunning-graphics" class="page-section topmargin bottommargin-lg">
						<div class="row clearfix">

							<div class="col-lg-5">
								<div class="topmargin-lg d-none d-lg-block"></div>
								<img src="demos/app-landing/images/section/section-2-icon.png" alt="{{ $item_row2->alt }}" style="display: block;" class="bottommargin-sm">
								<div class="emphasis-title bottommargin-sm">
									<span class="before-heading">支援Retina 解析度 &#x7E; 534 PPI</span>
									<h2 style="font-size: 42px;" class="font-body ls1 t400">{{ $item_row2->title }}</h2>
								</div>
								<p style="color: #777;" class="lead">{{ $item_row2->content }}</p>
								<a href="{{ $item_row2->url }}" class="section-more-link">{{ $item_row2->url_txt }} <i class="icon-angle-right"></i></a>
							</div>

							<div class="col-lg-7 center">
								<img src="{{ Voyager::image( $item_row2->pic) }}" alt="{{ $item_row2->alt }}" data-animate="fadeInRight">
							</div>

						</div>
					</div>

					<div class="line"></div><div class="clear"></div>

				</div>

				<div id="section-secured-solutions" class="page-section section nopadding topmargin-sm" style="background: url({{ $item_row3->getPicUrl() }}) no-repeat left bottom; background-size: 100% auto;" data-height-xl="700" data-height-lg="700" data-height-md="450" data-height-sm="450" data-height-xs="450">
					<div class="container clearfix">
						<div class="row clearfix">
							<div class="col-lg-5 offset-lg-6">
								<div class="topmargin-lg d-none d-lg-block"></div>
								<div class="topmargin-lg d-none d-lg-block"></div>
								<img src="demos/app-landing/images/section/section-3-icon.png" alt="" style="display: block;" class="bottommargin-sm">
								<div class="emphasis-title bottommargin-sm">
									<span class="before-heading">{{ $item_row3->subtitle }}</span>
									<h2 style="font-size: 42px;" class="font-body ls1 t400">{{ $item_row3->title }}</h2>
								</div>
								<p style="color: #777;" class="lead">{{ $item_row3->content }}</p>
								<a href="{{ $item_row3->url }}" class="section-more-link">{{ $item_row3->url_txt }} <i class="icon-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="video-wrap" style="position: absolute; height: 100%; z-index: 1;">
						<div class="video-overlay d-none d-lg-block" style="background: url('demos/app-landing/images/section/iphone-3d.png') no-repeat left top; background-size: auto 100%;" data-animate="fadeInLeft"></div>
					</div>
				</div>

				<div class="clear bottommargin"></div>

				<div class="container clearfix">

					<div id="section-pricing" class="page-section nopadding nomargin">

						<div id="pricing-switch" class="pricing row bottommargin-lg clearfix">

							@foreach ($items_prices as $item)
								<div class="col-lg-4 col-md-6">
									<div class="pricing-box">
										<div class="pricing-title">
											<h3>{{ $item->title }}</h3>
										</div>
										<div class="pricing-price">
											<div class="pts-switch-content-left"><span class="price-unit">&dollar;</span>{{ $item->price }}<span class="price-tenure">{{ $item->subtitle }}</span></div>
										</div>
										<div class="pricing-features">
											{!! $item->content !!}
										</div>
										<div class="pricing-action">
											<a href="{{ $item->url }}" data-lightbox="inline" data-pricing-plan="Starter Plan" class="button button-large button-rounded capitalize ls0" style="border-radius: 23px;">{{ $item->url_txt }}</a>
										</div>
									</div>

								</div>
							@endforeach

						</div>

						<!-- Modal -->
						<div class="modal1 mfp-hide" id="modal-get-started">
							<div class="block divcenter" style="background-color: #FFF; max-width: 800px;">
								<div style="padding: 50px;">
									<form action="#" id="get-started-form" method="post" class="nobottommargin">

										<div class="row clearfix">
											<div class="col-md-8">
												<h3 class="font-body">Register for an Account</h3>
											</div>
											<div class="col-md-4">
												<div id="modal-get-started-package"></div>
											</div>
										</div>

										<div class="col_half">
											<label class="font-body capitalize" for="get-started-form-username">Choose Username:</label>
											<input type="text" id="get-started-form-username" name="get-started-form-username" value="" class="form-control required no-error-msg" />
										</div>

										<div class="col_half col_last">
											<label class="font-body capitalize" for="get-started-form-email">Your Email:</label>
											<input type="email" id="get-started-form-email" name="get-started-form-email" value="" class="form-control required email no-error-msg" />
										</div>

										<div class="clear"></div>

										<div class="col_half">
											<label class="font-body capitalize" for="get-started-form-password">Choose Password:</label>
											<input type="password" id="get-started-form-password" name="get-started-form-password" value="" class="form-control required no-error-msg" />
										</div>

										<div class="col_half col_last">
											<label class="font-body capitalize" for="get-started-form-password">Retype Password:</label>
											<input type="password" id="get-started-form-repassword" name="get-started-form-repassword" value="" class="form-control required no-error-msg" />
										</div>

										<!-- Package Selector Hidden Input Value Setter -->
										<input type="hidden" id="get-started-form-package" name="get-started-form-package" value="Free">

										<div class="col_full">
											<label>
												<input type="checkbox" id="get-started-form-agree" name="get-started-form-agree" value="1" style="position: relative; top: 2px; margin-right: 5px;"> I Agree to the Terms &amp; Conditions
											</label>
										</div>

										<div class="col_full nobottommargin">
											<button class="button button-rounded nomargin" id="get-started-form-submit" name="get-started-form-submit" value="login">Get Started</button>
											<a href="#" data-scrollto="#section-pricing" data-easing="easeInOutExpo" data-speed="1250" data-offset="160" class="fright" onClick="$.magnificPopup.close();">Change Plan?</a>
										</div>

									</form>
								</div>
							</div>
						</div>

					</div>

					<div class="clear"></div>

					<div id="section-faqs" class="page-section nopadding nomargin">

						<h2 class="center font-body bottommargin-lg">常見問題</h2>

						<div class="row topmargin-sm clearfix">

							@foreach ($items_qna as $item)
								<div class="col-lg-5 col-md-6 bottommargin-sm
									@if ($loop->iteration % 2 == 0)
										offset-lg-1
									@endif">
									<h4 class="font-body" style="margin-bottom:15px;">{{ $item->title }}</h4>
									<p>{{ $item->content }}</p>
								</div>
							@endforeach

						</div>

					</div>

				</div>

				<div class="section bottommargin-lg" style="background-color: #F8FAFB; border-top: 1px solid #E5E5E5; border-bottom: 1px solid #E5E5E5;">

					<div class="fslider testimonial testimonial-full nobg noborder noshadow" data-animation="fade" style="max-width: none;">
						<div class="flexslider">
							<div class="slider-wrap divcenter" style="max-width: 650px;">
								@foreach ($items_comment as $item)
									<div class="slide">
										<div class="testi-image">
											<img src="{{ $item->getPicUrl() }}" alt="Customer Testimonails">
										</div>
										<div class="testi-content">
											<p>{{ $item->content }}</p>
											<div class="testi-meta">
												{{ $item->title }}
												<span>{{ $item->subtitle }}</span>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>

				</div>

				<div class="clear"></div>

				<div id="section-gallery" class="page-section nopadding nomargin">

					<div class="container topmargin bottommargin-lg center clearfix">

						<h3 class="ls1 t400" style="font-size: 32px; margin-bottom: 10px;">軟體畫面</h3>
						<p class="lead divcenter" style="max-width: 600px">方便的功能，美觀的使用者介面，盡在EasyWeb。今天就來試用...</p>
						<a href="#" class="button button-circle capitalize">看更多</a>

					</div>

					<div class="owl-carousel owl-carousel-full image-carousel carousel-widget bottommargin" data-margin="20" data-center="true" data-loop="true" data-nav="false" data-pagi="true" data-items-xs="2" data-items-sm="2" data-items-md="4" data-items-lg="4" data-items-xl="6" data-stage-padding="30" data-lightbox="gallery">

						<div class="oc-item">
							<a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-1.jpg"><img src="demos/app-landing/images/gallery/img-1.jpg" alt="Image 1"></a>
						</div>
						<div class="oc-item">
							<a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-2.jpg"><img src="demos/app-landing/images/gallery/img-2.jpg" alt="Image 2"></a>
						</div>
						<div class="oc-item">
							<a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-3.jpg"><img src="demos/app-landing/images/gallery/img-3.jpg" alt="Image 3"></a>
						</div>
						<div class="oc-item">
							<a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-4.jpg"><img src="demos/app-landing/images/gallery/img-4.jpg" alt="Image 4"></a>
						</div>
						<div class="oc-item">
							<a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-5.jpg"><img src="demos/app-landing/images/gallery/img-5.jpg" alt="Image 5"></a>
						</div>
						<div class="oc-item">
							<a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-6.jpg"><img src="demos/app-landing/images/gallery/img-6.jpg" alt="Image 5"></a>
						</div>
						<div class="oc-item">
							<a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-7.jpg"><img src="demos/app-landing/images/gallery/img-7.jpg" alt="Image 5"></a>
						</div>

					</div>

				</div>

				<div class="clear"></div>

				<!-- <div class="section nomargin">
					<div class="container clearfix">

						<h2></h2>

					</div>
				</div> -->

				<div class="section" style="padding: 30px 0; color: #999; background-color: #F8FAFB; border-top: 1px solid #E5E5E5; border-bottom: 1px solid #E5E5E5;">
					<div class="container clearfix">
						<div class="row topmargin-lg clearfix">

							@foreach ($items_chars as $item)
								<div class="col-lg-4 bottommargin">
									<i class="i-plain i-large {{ $item->icon }} inline-block" style="margin-bottom: 30px; color: #999;"></i>
									<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
										<h4 style="font-size: 16px;">{{ $item->title }}</h4>
									</div>
									<p class="" style="line-height: 26px;">{{ $item->content }}</p>
								</div>
							@endforeach
						</div>
					</div>
				</div>

				<div class="section center nobottommargin nobg">
					<div class="container clearfix">

						<h3 class="ls1 t400" style="font-size: 32px;">{{ $item_row4->title }} <span>{{ $item_row4->subtitle }}</span> </h3>
						<a href="{{ $item_row4->url }}" data-lightbox="inline" class="button button-large button-black capitalize" style="border-radius: 23px;">{{ $item_row4->url_txt }}</a>
						{!! $item_row4->content !!}

						<div class="clear bottommargin"></div>

					</div>
				</div>

				<div class="section notopmargin footer-stick" style="padding: 10px 0; background-color: #F8FAFB; border-top: 1px solid #E5E5E5;">
					<div class="container clearfix">

						<div class="row clearfix">
							@foreach ($items_row5 as $item)
								<div class="col-lg-4">
									<div class="app-footer-features"><i class="{{ $item->icon }}"></i><h5 class="font-body"><a href="{{ $item->url }}">{{ $item->title }}</a><span>{{ $item->subtitle }}</span></h5></div>
								</div>
							@endforeach
						</div>

					</div>
				</div>
@endsection

@section('js')
	<script>
		jQuery(document).ready( function($){

			function pricingSwitcher( elementCheck, elementParent, elementPricing ) {
				elementParent.find('.pts-left,.pts-right').removeClass('pts-switch-active');
				elementPricing.find('.pts-switch-content-left,.pts-switch-content-right').addClass('hidden');

				if( elementCheck.filter(':checked').length > 0 ) {
					elementParent.find('.pts-right').addClass('pts-switch-active');
					elementPricing.find('.pts-switch-content-right').removeClass('hidden');
				} else {
					elementParent.find('.pts-left').addClass('pts-switch-active');
					elementPricing.find('.pts-switch-content-left').removeClass('hidden');
				}
			}

			$('.pts-switcher').each( function(){
				var element = $(this),
					elementCheck = element.find(':checkbox'),
					elementParent = $(this).parents('.pricing-tenure-switcher'),
					elementPricing = $( elementParent.attr('data-container') );

				pricingSwitcher( elementCheck, elementParent, elementPricing );

				elementCheck.on( 'change', function(){
					pricingSwitcher( elementCheck, elementParent, elementPricing );
				});
			});

			// Get Started From Validation
			var getStartedForm = $('#get-started-form'),
				getStartedFormAlert = getStartedForm.attr('data-alert-type'),
				getStartedFormLoader = getStartedForm.attr('data-loader'),
				getStartedFormResult = getStartedForm.find('.contact-form-result'),
				getStartedFormRedirect = getStartedForm.attr('data-redirect');

			getStartedForm.validate({
				submitHandler: function(form) {

					getStartedFormResult.hide();

					if( getStartedFormLoader == 'button' ) {
						var defButton = $(form).find('button'),
							defButtonText = defButton.html();

						defButton.html('<i class="icon-line-loader icon-spin nomargin"></i>');
					} else {
						$(form).find('.form-process').fadeIn();
					}

					$(form).ajaxSubmit({
						target: getStartedFormResult,
						dataType: 'json',
						resetForm: true,
						success: function( data ) {
							if( getStartedFormLoader == 'button' ) {
								defButton.html( defButtonText );
							} else {
								$(form).find('.form-process').fadeOut();
							}
							if( data.alert != 'error' && getStartedFormRedirect ){
								window.location.replace( getStartedFormRedirect );
								return true;
							}
							if( getStartedFormAlert == 'inline' ) {
								if( data.alert == 'error' ) {
									var alertType = 'alert-danger';
								} else {
									var alertType = 'alert-success';
								}

								getStartedFormResult.addClass( 'alert ' + alertType ).html( data.message ).slideDown( 400 );
							} else {
								getStartedFormResult.attr( 'data-notify-type', data.alert ).attr( 'data-notify-msg', data.message ).html('');
								SEMICOLON.widget.notifications( getStartedFormResult );
							}
						}
					});
				}
			});

			$('[data-pricing-plan]').click( function(){
				getStartedForm.find('#get-started-form-package').val( $(this).attr('data-pricing-plan') );
				getStartedForm.find('#modal-get-started-package').html( $(this).attr('data-pricing-plan') );
			});

		});
	</script>
@endsection
