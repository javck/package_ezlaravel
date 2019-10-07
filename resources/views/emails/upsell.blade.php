@extends('layouts.mail')

@section('content')
  <table cellpadding="0" cellspacing="0" width="600" class="w320">
      <tr>
        <td class="content-padding">
          <table cellpadding="0" cellspacing="0" width="100%">
            <td class="header-md">
              {{ __('page.order_detail_below')}}
            </td>
          </table>
        </td>
      </tr>
      <tr>
        <td class="content-padding">
          <table cellpadding="0" cellspacing="0" width="100%">
            <td class="info-block" style="text-align:left">
              {{__('label.receiver')}}：{{ $order->receiver }}<br>
              {{__('label.receiverTitle')}}：{{ $order->receiverTitle }}<br>
              {{__('label.receiverMobile')}}：<a href="tel:{{$order->receiverMobile}}">{{ $order->receiverMobile }}</a><br>
              {{__('label.receiverEmail')}}：<a href="mailto:{{$order->receiverEmail}}">{{ $order->receiverEmail }}</a><br>
              {{__('label.receiverAddress')}}：{{ $order->receiverAddress }}<br>
              {{__('label.subtotal')}}：{{ $order->subtotal }}
            </td>
          </table>
        </td>
      </tr>
      <tr>
        <td style="padding-bottom: 75px;">
          <table cellpadding="0" cellspacing="0" width="100%" style="border-collapse:separate !important;">
            @foreach($order->items as $item)
              @if($loop->index % 3 == 0)
              <tr>
              @endif
              <td class="info-block">
                <table cellpadding="0" cellspacing="0" width="100%" style="border-collapse:separate !important;">
                  <tr>
                    <td class="block-rounded">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                          <td class="info-img">
                            <a href="{{url('/admin/items/'.$item->id)}}"><img class="info-img" src="{{Voyager::image($item->getFirstPic())}}" alt="{{$item->title}}" /></a>
                          </td>
                        </tr>
                        <tr>
                          <td style="padding: 15px;">
                            <table cellspacing="0" cellpadding="0" width="100%">
                              <tr>
                                <td style="text-align:left; width:155px">
                                  <a href=""><span class="header-sm">{{ $item->title }}</span></a><br />
                                  {{ __('page.have_stock') }}: {{ $item->stock }}
                                </td>
                                <td style="text-align:right; vertical-align: top;">
                                  <strong>x {{$item->pivot->qty}}</strong>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td style="padding: 15px;">
                            <div><!--[if mso]>
                              <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:45px;v-text-anchor:middle;width:228px;" arcsize="15%" strokecolor="#ffffff" fillcolor="#ff6f6f">
                                <w:anchorlock/>
                                <center style="color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;">My Account</center>
                              </v:roundrect>
                            <![endif]--><a class="button-width" href="{{ url('/admin/items/' . $item->id) }}"
                            style="background-color:#ff6f6f;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;-webkit-text-size-adjust:none;mso-hide:all;">{{ __('page.check_item')}}</a></div>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
              @if($loop->index % 3 == 2)
              </tr>
              @elseif($loop->last)
              </tr>
              @endif
              @endforeach
                    
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
@stop