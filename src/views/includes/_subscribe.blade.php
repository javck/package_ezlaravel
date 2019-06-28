@if(isset($item_subscribe))
    <div data-animate="@if(isset($item_subscribe->animation)){{$item_subscribe->animation}}@endif"
         data-delay="@if(isset($item_subscribe->animationDelay)){{$item_subscribe->animationDelay}}@endif">
        <div class="fancy-title title-border">
            <h4>{{$item_subscribe->title}}</h4>
        </div>
        <p>{!! $item_subscribe->content !!}</p>
        <div class="widget-subscribe-form-result"></div>
        <form id="widget-subscribe-form2" action="{{asset('include/subscribe.php')}}" method="post"
              class="nobottommargin">
            <div class="input-group divcenter">
                <span class="input-group-addon"><i class="icon-email2"></i></span>
                <input type="email" name="widget-subscribe-form-email" class="form-control required email"
                       placeholder="Enter your Email">
                <span class="input-group-btn">
									<button class="btn btn-default" type="submit">訂閱</button>
								</span>
            </div>
        </form>
    </div>
@endif