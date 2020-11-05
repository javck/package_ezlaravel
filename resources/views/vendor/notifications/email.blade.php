@component('mail::message')
{{-- Greeting --}}
尊敬的用戶您好！

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}
@endforeach

{{-- Action Button --}}
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
<br>


{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
{{ setting('site.title') }},<br>感謝您
@endif

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
假如您找不到或無法點擊 "{{ $actionText }}" 按鈕, 複製並貼上以下網址到瀏覽器並前往: [{{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
@endisset
@endcomponent
