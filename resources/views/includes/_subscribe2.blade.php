<div class="section notopborder nobottomborder nomargin nopadding nobg footer-stick">
    <div class="container clearfix">

        <div class="col_half nobottommargin topmargin">
            <img src="{{asset('images/'.$item_callActionSubscribe->pic)}}" alt="{{$item_callActionSubscribe->title}}" class="nobottommargin">
        </div>

        <div class="col_half subscribe-widget nobottommargin col_last">

            <div class="heading-block topmargin-lg">
                <h3><strong>{{$item_callActionSubscribe->title}}</strong></h3>
                <span>{{$item_callActionSubscribe->subtitle}}</span>
            </div>

            <p>{!! $item_callActionSubscribe->content !!}</p>

            <div class="widget-subscribe-form-result"></div>
            <form id="widget-subscribe-form3" action="include/subscribe.php" method="post"
                  class="nobottommargin">
                <div class="input-group" style="max-width:400px;">
                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                    <input type="email" name="widget-subscribe-form-email" class="form-control required email"
                           placeholder="輸入您的郵箱">
                    <span class="input-group-btn">
										<button class="btn btn-danger" type="submit">{{$item_callActionSubscribe->url_txt}}</button>
									</span>
                </div>
            </form>

        </div>

    </div>
</div>