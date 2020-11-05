<footer id="footer" class="dark">
    <!-- Copyrights
            ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                {{setting('site.frontend_footer')}}<br>
                <div class="copyright-links">
                    {{ menu('frontend_footer','menu.menu_footer') }}
                </div>
            </div>

            <div class="col_half col_last tright">
                <div class="fright clearfix">
                    <a href="#" class="si-borderless">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    &nbsp;&nbsp;
                    <a href="#" class="si-borderless">
                        <i class="fab fa-line"></i>
                    </a>
                    &nbsp;&nbsp;
                    <a href="#" class="si-borderless">
                        <i class="fab fa-weixin"></i>
                    </a>

                </div>

                <div class="clear"></div>

                <i class="icon-envelope2"></i> {{setting('site.service_mail')}} <span class="middot">&middot;</span> <i
                        class="icon-headphones"></i> <a href="tel:{{ setting('site.phone') }}">{{setting('site.phone')}}</a> <span class="middot">&middot;</span>
                <i class="fa fa-line"></i> {{setting('site.lineAt')}}
            </div>

        </div>

    </div><!-- #copyrights end -->
</footer>