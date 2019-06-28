<footer id="footer" class="dark">

	<div class="container">

		<!-- Footer Widgets
        ============================================= -->
		<div class="footer-widgets-wrap clearfix">

			<div class="col_one_third">

				<div class="widget clearfix">

					<img src="images/{{$footer_left->pic}}" width="97" height="18" alt="{{$footer_left->alt}}" class="footer-logo">

					<p>{{$footer_left->content}}</p>

					<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
						<address>
							<strong>教室地址</strong><br>
							{{ $address  }}<br>
						</address>
						<abbr title="Phone Number"><strong>Phone:</strong></abbr> <a href="{{  $phone_url }}">{{ $phone  }}</a><br>
						<abbr title="Email Address"><strong>Email:</strong></abbr> <a href="mailto:{{ $service_mail }}">{{ $service_mail }}
					</div>

				</div>

			</div>

			<div class="col_one_third">

				<div class="widget clearfix">

					<div class="fslider testimonial no-image nobg noborder noshadow nopadding" data-animation="slide" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								@foreach($rows_testimonials as $item)
									<div class="slide">
										<div class="testi-image">
											<a href="{{url($item->url)}}"><img src="images/{{$item->pic}}" alt="{{$item->alt}}"></a>
										</div>
										<div class="testi-content">
											<p>{{$item->content}}</p>
											<div class="testi-meta">
												{{$item->title}}
												<span>{{$item->subtitle}}</span>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>

				<div class="widget clearfix">

					<a href="{{ $fb_page }}" class="social-icon si-small si-rounded si-facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="{{ $youtube_page }}" class="social-icon si-small si-rounded si-youtube">
						<i class="icon-youtube"></i>
						<i class="icon-youtube"></i>
					</a>

				</div>

			</div>

			<div class="col_one_third col_last">

				<div class="widget quick-contact-widget clearfix">

					<h4>Send Message</h4>

					<div class="quick-contact-form-result"></div>

					<form id="quick-contact-form" name="quick-contact-form" action="{{url('/submitContact')}}" method="post" class="quick-contact-form nobottommargin">

						<div class="form-process"></div>

						{{ csrf_field() }}

						<div class="input-group divcenter">
							<span class="input-group-addon"><i class="icon-user"></i></span>
							<input type="text" class="required form-control input-block-level" id="name" name="name" value="" placeholder="姓名" />
						</div>
						<div class="input-group divcenter">
							<span class="input-group-addon"><i class="icon-email2"></i></span>
							<input type="text" class="required form-control email input-block-level" id="email" name="email" value="" placeholder="Email Address" />
						</div>
                        <div class="input-group divcenter">
                            <span class="input-group-addon"><i class="icon-phone"></i></span>
                            <input type="text" class="required form-control input-block-level" id="mobile" name="mobile" value="" placeholder="手機號碼" />
                        </div>
						<textarea class="required form-control input-block-level short-textarea" id="message" name="message" rows="4" cols="30" placeholder="詢問內容"></textarea>
						<input type="text" class="hidden" id="subject" name="subject" value="問題詢問" />
						<input type="text" class="hidden" id="service" name="service" value="courseQuery" />
                        {!! NoCaptcha::display(['data-theme' => 'dark']) !!}
						@if ($errors->has('g-recaptcha-response'))
							<span class="help-block">
        						<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
						@endif
						<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-danger nomargin" value="submit">送出</button>

					</form>

				</div>

			</div>

		</div><!-- .footer-widgets-wrap end -->

	</div>

	<!-- Copyrights
    ============================================= -->
	<div id="copyrights">

		<div class="container clearfix">

			<div class="col_half">
				{!! $footer !!}
			</div>

			<div class="col_half col_last tright">
				<div class="copyrights-menu copyright-links fright clearfix">
					<a href="{{url('/')}}">首頁</a>/<a href="{{url('/courses')}}">課程介紹</a>/<a href="{{url('/faq')}}">常見問題</a>/<a href="{{url('/curriculum')}}">課表查詢</a>/<a href="{{url('/news')}}">最新消息</a>/<a href="{{url('/login')}}">員工專區</a>
				</div>
			</div>
		</div>

	</div><!-- #copyrights end -->

</footer><!-- #footer end -->