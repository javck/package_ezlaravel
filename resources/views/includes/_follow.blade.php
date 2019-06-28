<div class="fancy-title title-border">
    <h4>追蹤我們</h4>
</div>

{{--更多icon可參考http://www.socicon.com/how.php--}}
@empty(!$fb_page)
    <a href="{{$fb_page}}" class="social-icon si-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
        <span class="socicon-facebook"></span>
    </a>
@endempty

@empty(!$android_page)
    <a href="{{$android_page}}" class="social-icon si-android" data-toggle="tooltip" data-placement="top" title="Android">
        <span class="socicon-android"></span>
    </a>
@endempty

@empty(!$ios_page)
    <a href="{{$ios_page}}" class="social-icon si-skype" data-toggle="tooltip" data-placement="top" title="Android">
        <span class="socicon-apple"></span>
    </a>
@endempty

@empty(!$gplus_page)
    <a href="{{$gplus_page}}" class="social-icon si-gplus" data-toggle="tooltip" data-placement="top" title="Google+">
        <span class="socicon-googleplus"></span>
    </a>
@endempty

@empty(!$skype_page)
    <a href="{{$skype_page}}" class="social-icon si-skype" data-toggle="tooltip" data-placement="top" title="Skype">
        <span class="socicon-skype"></span>
    </a>
    @endisset

    @empty(!$line_page)
        <a href="{{$line_page}}" class="social-icon si-facebook" data-toggle="tooltip" data-placement="top" title="Line">
            <span class="socicon-line"></span>
        </a>
    @endempty

    @empty(!$wechat_page)
        <a href="{{$wechat_page}}" class="social-icon si-facebook" data-toggle="tooltip" data-placement="top" title="Line">
            <span class="socicon-wechat"></span>
        </a>
    @endempty

    @empty(!$weibo_page)
        <a href="{{$weibo_page}}" class="social-icon si-facebook" data-toggle="tooltip" data-placement="top" title="Line">
            <span class="socicon-weibo"></span>
        </a>
    @endempty

    @empty(!$instagram_page)
        <a href="{{$instagram_page}}" class="social-icon si-facebook" data-toggle="tooltip" data-placement="top" title="Line">
            <span class="socicon-instagram"></span>
        </a>
    @endempty