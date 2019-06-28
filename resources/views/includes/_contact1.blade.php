<div data-animate="@if(isset($item_contact_pageTop->animation)){{$item_contact_pageTop->animation}}@endif" data-delay="@if(isset($item_contact_pageTop->animationDelay)){{$item_contact_pageTop->animationDelay}}@endif">
    <div class="heading-block title-center">
        <h2>{{$item_contact_pageTop->title}}</h2>
        <span>{{$item_contact_pageTop->subtitle}}</span>
    </div>

    <div class="container clearfix">

        <!-- Contact Form
        ============================================= -->
        <div class="col_half">

            <div class="fancy-title title-dotted-border">
                <h3>{{$item_contact_pageTop->content}}</h3>
            </div>

            <div class="contact-widget">

                <div class="contact-form-result"></div>

                <form class="nobottommargin" id="contactform" name="contactform" action="{{url('/submitContact')}}" method="post">

                    {{ csrf_field() }}

                    <div class="form-process"></div>

                    <div class="col_one_third">
                        <label for="name">{{ trans('page.name') }} <small>*</small></label>
                        <input type="text" id="name" name="name" value="" class="sm-form-control required" />
                    </div>

                    <div class="col_one_third">
                        <label for="email">{{ trans('page.email') }} <small>*</small></label>
                        <input type="email" id="email" name="email" value="" class="required email sm-form-control" />
                    </div>

                    <div class="col_one_third col_last">
                        <label for="mobile">{{ trans('page.mobile') }} <small>*</small></label>
                        <input type="text" id="mobile" name="mobile" value="" class="sm-form-control" />
                    </div>

                    <div class="clear"></div>

                    <div class="col_two_third">
                        <label for="subject">{{ trans('page.subject') }} <small>*</small></label>
                        <input type="text" id="subject" name="subject" value="" class="required sm-form-control" />
                    </div>

                    <div class="col_one_third col_last">
                        <label for="service">{{ trans('page.services') }}</label>
                        {{ Form::select('service', $services ,'serviceQuery' ,['class'=>'required sm-form-control']) }}
                    </div>

                    <div class="clear"></div>

                    <div class="col_full">
                        <label for="message">{{ trans('page.message') }}</label>
                        <textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
                    </div>

                    {!! NoCaptcha::display() !!}

                    <br/>

                    <div class="col_full">
                        <button class="button button-3d nomargin" type="submit" id="submit" name="submit" value="submit">{{ trans('page.submit') }}</button>
                    </div>

                </form>

            </div>


        </div><!-- Contact Form End -->

        <!-- Google Map
        ============================================= -->
        <div class="col_half col_last">

            <section id="google-map" class="gmap" style="height: 410px;"></section>


        </div><!-- Google Map End -->

        <!-- Contact Info
        ============================================= -->
        <div class="col_full nobottommargin clearfix">

            <div class="col_one_fourth">
                <div class="feature-box fbox-center fbox-bg fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-map-marker2"></i></a>
                    </div>
                    <h3>地址<span class="subtitle">{{$address}}</span></h3>
                </div>
            </div>

            <div class="col_one_fourth">
                <div class="feature-box fbox-center fbox-bg fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-phone3"></i></a>
                    </div>
                    <h3>電話<span class="subtitle"><a href="{{$phone_url}}">{{$phone}}</a></span></h3>
                </div>
            </div>

            <div class="col_one_fourth">
                <div class="feature-box fbox-center fbox-bg fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-mobile"></i></a>
                    </div>
                    <h3>手機<span class="subtitle"><a href="tel:{{$mobile}}">{{$mobile}}</a></span></h3>
                </div>
            </div>

            <div class="col_one_fourth col_last">
                <div class="feature-box fbox-center fbox-bg fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-facebook"></i></a>
                    </div>
                    <h3>粉絲專頁<span class="subtitle"><a href="https://www.facebook.com/{{$fb_id}}/">{{$fb_id}}</a></span></h3>
                </div>
            </div>

        </div><!-- Contact Info End -->

    </div>
</div>