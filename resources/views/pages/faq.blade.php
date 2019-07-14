@extends('layouts.site')
@section('seo')
    <meta name="description" content="{{ $description }}">
@stop
@section('page_title')常見問題@stop

@section('body')


<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="postcontent nobottommargin clearfix">

                <ul id="portfolio-filter" class="portfolio-filter clearfix">
                    <li class="activeFilter"><a href="#" data-filter="all">全部</a></li>
                    @if (isset($tags))
                        @foreach ($tags as $key => $value)
                            <li><a href="#" data-filter=".faq-{{$key}}">{{$value}}</a></li>
                        @endforeach
                    @endif

                    {{--<li class="activeFilter"><a href="#" data-filter="全部">全部</a></li>--}}
                    {{--<li><a href="#" data-filter=".faq-課程報名">課程報名</a></li>--}}
                    {{--<li><a href="#" data-filter=".faq-請假規則">請假規則</a></li>--}}
                    {{--<li><a href="#" data-filter=".faq-教室禮儀">教室禮儀</a></li>--}}
                    {{--<li><a href="#" data-filter=".faq-課前準備">課前準備</a></li>--}}
                    {{--<li><a href="#" data-filter=".faq-置物櫃使用">置物櫃使用</a></li>--}}
                    {{--<li><a href="#" data-filter=".faq-瑜珈修習守則">瑜珈修習守則</a></li>--}}


                </ul>

                <div class="clear"></div>

                <div id="faqs" class="faqs">

                    @if (isset($items_row1))
                        @foreach ($items_row1 as $element)
                            <div class="toggle faq faq-{{ $element->q_mode }}">
                                <div class="togglet"><i class="toggle-closed {{ $element->icon }}"></i><i class="toggle-open icon-info"></i>{{ $element->title }}</div>
                                <div class="togglec">{!! $element->content !!}</div>
                            </div>
                        @endforeach
                    @endif

                    {{--<div class="toggle faq faq-marketplace faq-authors">--}}
                        {{--<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-info"></i>可否將鞋子穿入教室內？</div>--}}
                        {{--<div class="togglec">進入館內請脫鞋，請將鞋子留在鞋櫃或您的個人置物櫃中。教室需保持安靜，避免喧嘩影響課程進行及他人的冥想調息。教室內全面禁菸。</div>--}}
                    {{--</div>--}}

                    {{--<div class="toggle faq faq-authors faq-miscellaneous">--}}
                        {{--<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-info"></i>課前與課中禮儀事項？</div>--}}
                        {{--<div class="togglec">學員上課須於開課前20分鐘，出示學員卡完成簽到後，方能領取上課卡進場更衣、置物、準備上課。學員請於開課前5分鐘進入指定教室，並保持安靜等候開課，請勿交談。課程開始後，為尊重老師及其他同學，遲到者將不得進入教室。已進教室之學員亦不得無故中途離開。進入館內後，請將手機關掉或改為震動，並放入置物櫃中，不得將手機及個人物品帶進教室。</div>--}}
                    {{--</div>--}}

                    {{--<div class="toggle faq faq-miscellaneous">--}}
                        {{--<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-info"></i>上課服裝？</div>--}}
                        {{--<div class="togglec">上課請著適合練習之瑜珈服或運動服，為避免影響其他學員及確保您練習的安全，請勿穿著過於暴露，或牛仔褲及短裙等不適合運動之服裝。上課前2小時請勿進食，保持空腹狀態。上熱瑜珈課程前2小時，請務必陸續補充1-1.5公升的水份。女生請將長髮束起，將會讓您的練習更加舒適與專注。若您的身體有任何疾病、舊傷、不適或適逢生理期，請於上課前告知您的瑜珈指導師，以便老師在適當的時候幫您調整姿勢或教導您以替代姿勢學習。</div>--}}
                    {{--</div>--}}

                    {{--<div class="toggle faq faq-authors faq-legal faq-itemdiscussion">--}}
                        {{--<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-info"></i>置物櫃使用須知？</div>--}}
                        {{--<div class="togglec">學員可自行使用置物櫃存放個人物品，應避免攜帶貴重物品至館內。在館內活動需請自行保管個人財物，本館將不負任何保管或損害賠償之責。下課後應將個人物品帶離，不得隔夜使用置物櫃。</div>--}}
                    {{--</div>--}}

                    {{--<div class="toggle faq faq-marketplace faq-authors">--}}
                        {{--<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-info"></i>學員安全</div>--}}
                        {{--<div class="togglec">請選擇適合自己強度的課程。上課時必須遵照老師的指示來感受自己的練習及身體狀況，切勿勉強達到身體極限或模仿他人。</div>--}}
                    {{--</div>--}}

                    {{--<div class="toggle faq faq-affiliates faq-miscellaneous">--}}
                        {{--<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-info"></i>瑜珈學習守則</div>--}}
                        {{--<div class="togglec">為了練習需要的專注與完整性，課程進行中請不要任意離開教室。初學者在剛開始的幾堂課中，可能會感覺頭暈或喘不過氣，這是一般常見的反應，不需驚慌只要放鬆專注調整好呼吸的頻率，很快可以恢復。在課堂中若感覺不適，可以蹲坐下來，並立即告知您的瑜珈指導師。</div>--}}
                    {{--</div>--}}

                    {{--<div class="toggle faq faq-legal faq-itemdiscussion">--}}
                        {{--<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-info"></i>什麼是「大休息」？</div>--}}
                        {{--<div class="togglec">每堂課程結束前的「大休息」是整堂課程相當重要的部分，可以幫助將腦中的雜念完全放掉，並使肌肉在經歷強化與伸展後得到完全的放鬆，也幫助我們在最短的時間恢復失去的能量與活力，請學員務必完成再離開教室，以免影響其他學員。</div>--}}
                    {{--</div>--}}

                    {{--<div class="toggle faq faq-legal faq-authors faq-itemdiscussion">--}}
                        {{--<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-info"></i>什麼是「大休息」？</div>--}}
                        {{--<div class="togglec">每堂課程結束前的「大休息」是整堂課程相當重要的部分，可以幫助將腦中的雜念完全放掉，並使肌肉在經歷強化與伸展後得到完全的放鬆，也幫助我們在最短的時間恢復失去的能量與活力，請學員務必完成再離開教室，以免影響其他學員。</div>--}}
                    {{--</div>--}}

                    {{--<div class="toggle faq faq-affiliates">--}}
                        {{--<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-info"></i>什麼是「大休息」？</div>--}}
                        {{--<div class="togglec">每堂課程結束前的「大休息」是整堂課程相當重要的部分，可以幫助將腦中的雜念完全放掉，並使肌肉在經歷強化與伸展後得到完全的放鬆，也幫助我們在最短的時間恢復失去的能量與活力，請學員務必完成再離開教室，以免影響其他學員。</div>--}}
                    {{--</div>--}}

                    {{--<div class="toggle faq faq-authors faq-itemdiscussion">--}}
                        {{--<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-info"></i>什麼是「大休息」？</div>--}}
                        {{--<div class="togglec">每堂課程結束前的「大休息」是整堂課程相當重要的部分，可以幫助將腦中的雜念完全放掉，並使肌肉在經歷強化與伸展後得到完全的放鬆，也幫助我們在最短的時間恢復失去的能量與活力，請學員務必完成再離開教室，以免影響其他學員。</div>--}}
                    {{--</div>--}}

                    {{--<div class="toggle faq faq-marketplace faq-itemdiscussion">--}}
                        {{--<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-info"></i>什麼是「大休息」？</div>--}}
                        {{--<div class="togglec">每堂課程結束前的「大休息」是整堂課程相當重要的部分，可以幫助將腦中的雜念完全放掉，並使肌肉在經歷強化與伸展後得到完全的放鬆，也幫助我們在最短的時間恢復失去的能量與活力，請學員務必完成再離開教室，以免影響其他學員。</div>--}}
                    {{--</div>--}}

                </div>

            </div>

        </div>

    </div>

</section><!-- #content end -->
@stop

@section('js')
    <script>

        $(document).ready(function($){
            var $faqItems = $('#faqs .faq');
            if( window.location.hash != '' ) {
                var getFaqFilterHash = window.location.hash;
                var hashFaqFilter = getFaqFilterHash.split('#');
                if( $faqItems.hasClass( hashFaqFilter[1] ) ) {
                    $('#portfolio-filter li').removeClass('activeFilter');
                    $( '[data-filter=".'+ hashFaqFilter[1] +'"]' ).parent('li').addClass('activeFilter');
                    var hashFaqSelector = '.' + hashFaqFilter[1];
                    $faqItems.css('display', 'none');
                    if( hashFaqSelector != 'all' ) {
                        $( hashFaqSelector ).fadeIn(500);
                    } else {
                        $faqItems.fadeIn(500);
                    }
                }
            }

            $('#portfolio-filter a').click(function(){
                $('#portfolio-filter li').removeClass('activeFilter');
                $(this).parent('li').addClass('activeFilter');
                var faqSelector = $(this).attr('data-filter');
                $faqItems.css('display', 'none');
                if( faqSelector != 'all' ) {
                    $( faqSelector ).fadeIn(500);
                } else {
                    $faqItems.fadeIn(500);
                }
                return false;
            });
        });
    </script>
@stop