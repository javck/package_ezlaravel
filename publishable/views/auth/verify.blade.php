@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">驗證您的Email信箱</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            剛已將驗證連結寄到您註冊的Email郵箱
                        </div>
                    @endif

                    在接著繼續下去之前，請先確認電子郵箱是否收到驗證連結.<br>
                    如果您沒收到信件，<a href="{{ route('verification.resend') }}">點這裡來重新寄送</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
