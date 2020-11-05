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
                      <span class="header-sm">主旨</span><br />
                      {{ $contact->subject }} <br />
                      <br />
                      <span class="header-sm">訊息</span> <br />
                      {{ $contact->message }}
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