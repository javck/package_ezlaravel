@extends('layouts.mail')

@section('content_top')
<tr>
  <td class="w320">
    <table cellpadding="0" cellspacing="0" width="100%">
      <tr>
        <td class="mini-container-left">
          <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <td class="mini-block-padding">
                <table cellspacing="0" cellpadding="0" width="100%" style="border-collapse:separate !important;">
                  <tr>
                    <td class="mini-block">
                      <span class="header-sm">聯絡窗口</span><br />
                      {{ $contact->name }} <br />
                      <a href="tel:{{ $contact->mobile }}">{{ $contact->mobile }} </a><br />
                      <a href="mailto:{{ $contact->email }}">{{ $contact->email }} </a><br />
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
        <td class="mini-container-right">
          <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <td class="mini-block-padding">
                <table cellspacing="0" cellpadding="0" width="100%" style="border-collapse:separate !important;">
                    <tr>
                      <td class="mini-block">
                        <span class="header-sm">路線</span><br />
                        {{ $contact->deliver }} <br />
                        <span class="header-sm">貨物品名</span><br />
                        {{ $contact->cargoType}} <br />
                        <span class="header-sm">目的城市</span><br />
                        {{ $contact->destination}} <br />
                        <span class="header-sm">貨物重量</span><br />
                        {{ $contact->weight}}公斤 <br />
                        <span class="header-sm">貨物長度</span><br />
                        {{ $contact->length}}公分 <br />
                        <span class="header-sm">貨物寬度</span><br />
                        {{ $contact->width}}公分 <br />
                        <span class="header-sm">貨物高度</span><br />
                        {{ $contact->height}}公分
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
@stop