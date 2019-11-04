@extends('layouts.site')
@section('seo')
	@parent
	@isset($keywords)
	    <meta name="keywords" content="{{ $keywords }}">
	@endisset
	@isset($description)
	    <meta name="description" content="{{ $description }}">
	@endisset
@stop
@section('page_title'){{ trans('page.contactUs') }}@stop

@section('pri_nav')
    {{ menu('frontend',setting('canvas.pri_menu_file')) }}
@stop

@section('body')
	<section id="content">
		<div class="content-wrap">

			<div class="container clearfix">

				<!-- 聯絡表單
				============================================= -->
				<div class="col_half">

					<div class="fancy-title title-dotted-border">
						<h3>{{ trans('page.contactUs') }}</h3>
					</div>

					 {{--<div class="contact-widget">--}}

						<div class="contact-form-result"></div>

						{{ Form::open(['action'=>'\Javck\Easyweb2\Http\Controllers\MyVoyagerContactController@save','role'=>'form','class'=>'nobottommargin']) }}
							<div class="form-process"></div>

							<div class="col_one_third">
								<label for="name">{{ trans('page.name') }} <small>*</small></label>
								<input type="text" id="name" name="name" value="" class="sm-form-control required" />
								@if (isset($errors) and $errors->has('name'))
									{{ Form::label('name',$errors->first('name'),['class'=>'text-danger control-label','for'=>'inputError']) }}
								@endif
								
							</div>

							<div class="col_one_third">
								<label for="email">{{ trans('page.email') }}<small>*</small> </label>
								<input type="email" id="email" name="email" value="" class="email sm-form-control" />
								@if (isset($errors) and $errors->has('email'))
									{{ Form::label('email',$errors->first('email'),['class'=>'text-danger control-label','for'=>'inputError']) }}
								@endif
							</div>

							<div class="col_one_third col_last">
								<label for="mobile">{{ trans('page.mobile') }}<small>*</small></label>
								<input type="text" id="mobile" name="mobile" value="" class="required sm-form-control" />
								@if (isset($errors) and $errors->has('mobile'))
									{{ Form::label('mobile',$errors->first('mobile'),['class'=>'text-danger control-label','for'=>'inputError']) }}
								@endif
							</div>

							<div class="clear"></div>

							<div class="col_two_third">
								<label for="subject">{{ trans('page.subject') }}<small>*</small></label>
								<input type="text" id="subject" name="subject" value="" class="required sm-form-control" />
								@if (isset($errors) and $errors->has('subject'))
									{{ Form::label('subject',$errors->first('subject'),['class'=>'text-danger control-label','for'=>'inputError']) }}
								@endif
							</div>

							<div class="col_one_third col_last">
								<label for="service">{{ trans('page.services') }}<small>*</small></label>
								{{ Form::select('service', $services ,'courseInfo' ,['class'=>'required sm-form-control']) }}
							</div>

							<div class="clear"></div>

							<div class="col_one_third">
								{{ Form::label('source',trans('page.source') ) }}<small>*</small>
								{{ Form::select('source', $sources ,'others' ,['class'=>'required sm-form-control']) }}
                            </div>
                            
                            <div class="col_two_third col_last">
								{!! NoCaptcha::display() !!}<br/>
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="message">{{ trans('page.message') }} </label>
								<textarea class="sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
							</div>

							

							<div class="col_full hidden">
								<input type="text" id="botcheck" name="botcheck" value="goblinLab" class="sm-form-control" />
							</div>

							<div class="col_full">
								{{ Form::submit( trans('page.submit'),['tabindex'=>'5','class'=>'button button-3d nomargin']) }}
{{-- 								<button name="submit" type="submit" id="submit" tabindex="5" value="Submit" class="button button-3d nomargin">{{ trans('page.submit') }}</button> --}}
							</div>

						</form>
					{{-- </div> --}}

				</div><!-- Contact Form End -->

				<!-- 表單說明
				============================================= -->
				<div class="col_half col_last">
	 				<div class="widget subscribe-widget clearfix">
						<div class="dark" style="padding: 25px; background-color: #383838; border-radius: 2px;">
							<div class="fancy-title title-border">
								<h4>{{ $item_row1_right->title }}</h4>
							</div>

							<p style="font-size: 15px; line-height: 1.5; color: #999;">{!! $item_row1_right->content !!}</p>
							
						</div>
					</div>
				</div>

				<div class="clear"></div>

				<!-- 聯絡資訊
				============================================= -->
				<div class="row clear-bottommargin">

					<div class="col-md-3 col-sm-6 bottommargin clearfix">
						<div class="feature-box fbox-center fbox-bg fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="icon-phone3"></i></a>
							</div>
							<h3>{{ trans('page.welcomeCall') }}<span class="subtitle">{{setting('site.phone')}}</span></h3>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 bottommargin clearfix">
						<div class="feature-box fbox-center fbox-bg fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="icon-mobile"></i></a>
							</div>
							<h3>{{ trans('page.consulter') }}<span class="subtitle">{{setting('site.mobile')}}</span></h3>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 bottommargin clearfix">
						<div class="feature-box fbox-center fbox-bg fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="icon-line-mail"></i></a>
							</div>
							<h3>{{ trans('page.serviceMail')}}<a href="mailto:{{setting('site.service_mail')}}"><span class="subtitle">{{setting('site.service_mail')}}</span></a></h3>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 bottommargin clearfix">
						<div class="feature-box fbox-center fbox-bg fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="icon-line2-users"></i></a>
							</div>
							<h3>{{ trans('page.fans') }}<a href="https://www.facebook.com/{{setting('site.fb_id')}}" target="_blank"><span class="subtitle">{{setting('site.fb_id')}}</span></a></h3>
						</div>
					</div>

				</div><!-- 聯絡資訊 End -->

			</div>

		</div>

	</section><!-- #content end -->
@stop