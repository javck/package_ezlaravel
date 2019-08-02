@extends('layouts.site')
@section('seo')
	@isset($keywords)
	    <meta name="keywords" content="{{ $keywords }}">
	@endisset
	@isset($description)
	    <meta name="description" content="{{ $description }}">
	@endisset
@stop
@section('page_title') {{trans('menu.myProfile')}} @stop

@section('pri_nav')
    {{ menu('frontend','menu.classic') }}
@stop

@section('body')
{{ Form::model($user,['method'=>'post','url'=>'users/profile/'.$user->id ,'role'=>'form','files'=>true]) }}
<div class="row">
    <div class="col-lg-6"> 
    	<div class="col-lg-6">
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
    		<!-- 帳號 username-->
    		@if (isset($errors) and $errors->has('username'))
		    	<div class="form-group has-error">
		    		{{ Form::label('username','用戶帳號') }}&nbsp;&nbsp;{{ Form::label('username',$errors->first('username'),['class'=>'text-danger control-label','for'=>'inputError']) }}
		    		{{ Form::label('username',$user->username) }}
					{{ Form::text('newUsername',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">如需變更，請輸入新用戶帳號</p>
				</div>
	    	@else
	    		<div class="form-group">
		    		{{ Form::label('username','用戶帳號') }}
		    		{{ Form::label('username',$user->username) }}
					{{ Form::text('newUsername',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">如需變更，請輸入新用戶帳號</p>
				</div>
	    	@endif

			<!-- 用戶姓名 name-->
	    	@if (isset($errors) and $errors->has('name'))
		    	<div class="form-group has-error">
		    		{{ Form::label('name','用戶姓名') }}&nbsp;&nbsp;{{ Form::label('name',$errors->first('name'),['class'=>'text-danger control-label','for'=>'inputError']) }}
					{{ Form::text('name',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入用戶姓名</p>
				</div>
	    	@else
	    		<div class="form-group">
		    		{{ Form::label('name','用戶姓名',['class'=>'text-warning']) }}
					{{ Form::text('name',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入用戶姓名</p>
				</div>
	    	@endif

	    	<!-- 英文姓名 en_name-->
	    	@if (isset($errors) and $errors->has('en_name'))
		    	<div class="form-group has-error">
		    		{{ Form::label('en_name','英文姓名') }}&nbsp;&nbsp;{{ Form::label('en_name',$errors->first('en_name'),['class'=>'text-danger control-label','for'=>'inputError']) }}
					{{ Form::text('en_name',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入英文姓名，非必填</p>
				</div>
	    	@else
	    		<div class="form-group">
		    		{{ Form::label('en_name','英文姓名') }}
					{{ Form::text('en_name',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入英文姓名，非必填</p>
				</div>
	    	@endif

	    	<!-- 頭銜 title -->
	    	@if (isset($errors) and $errors->has('title'))
		    	<div class="form-group has-error">
		    		{{ Form::label('title','頭銜') }}&nbsp;&nbsp;{{ Form::label('title',$errors->first('title'),['class'=>'text-danger control-label','for'=>'inputError']) }}
					{{ Form::text('title',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入頭銜，非必填</p>
				</div>
	    	@else
	    		<div class="form-group">
		    		{{ Form::label('title','頭銜') }}
					{{ Form::text('title',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入頭銜，非必填</p>
				</div>
	    	@endif

	    	<!-- 組織 organization-->
	    	@if (isset($errors) and $errors->has('organization'))
		    	<div class="form-group has-error">
		    		{{ Form::label('organization','組織') }}&nbsp;&nbsp;{{ Form::label('organization',$errors->first('organization'),['class'=>'text-danger control-label','for'=>'inputError']) }}
					{{ Form::text('organization',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入所屬組織，如公司或學校，非必填</p>
				</div>
	    	@else
	    		<div class="form-group">
		    		{{ Form::label('organization','組織') }}
					{{ Form::text('organization',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入所屬組織，如公司或學校，非必填</p>
				</div>
	    	@endif

			<!-- 生日 birthday-->
	    	@if (isset($errors) and $errors->has('birthday'))
		    	<div class="form-group has-error">
		    		{{ Form::label('birthday','生日') }}&nbsp;&nbsp;{{ Form::label('birthday',$errors->first('birthday'),['class'=>'text-danger control-label','for'=>'inputError']) }}
					{{ Form::date('birthday',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">輸入西元生日，例1911/01/01</p>
				</div>
	    	@else
	    		<div class="form-group">
		    		{{ Form::label('birthday','生日',['class'=>'text-warning']) }}
					{{ Form::date('birthday',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">輸入西元生日，例1911/01/01</p>
				</div>
	    	@endif

     	</div>
     	<div class="col-lg-6">
     		<!-- 電子郵箱 email-->
	    	@if (isset($errors) and $errors->has('email'))
		    	<div class="form-group has-error">
		    		{{ Form::label('email','電子郵箱') }}&nbsp;&nbsp;{{ Form::label('email',$errors->first('email'),['class'=>'text-danger control-label','for'=>'inputError']) }}
					{{ Form::text('email',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入電子郵箱，非必填</p>
				</div>
	    	@else
	    		<div class="form-group">
		    		{{ Form::label('email','電子郵箱',['class'=>'text-warning']) }}
					{{ Form::text('email',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入電子郵箱</p>
				</div>
	    	@endif

	    	<!-- 手機號碼 mobile-->
	    	@if (isset($errors) and $errors->has('mobile'))
		    	<div class="form-group has-error">
		    		{{ Form::label('mobile','手機號碼') }}&nbsp;&nbsp;{{ Form::label('mobile',$errors->first('mobile'),['class'=>'text-danger control-label','for'=>'inputError']) }}
					{{ Form::text('mobile',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入手機號碼</p>
				</div>
	    	@else
	    		<div class="form-group">
		    		{{ Form::label('mobile','手機號碼',['class'=>'text-warning']) }}
					{{ Form::text('mobile',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入手機號碼</p>
				</div>
	    	@endif

     		<!-- 電話 tel-->
	    	@if (isset($errors) and $errors->has('tel'))
		    	<div class="form-group has-error">
		    		{{ Form::label('tel','電話') }}&nbsp;&nbsp;{{ Form::label('tel',$errors->first('tel'),['class'=>'text-danger control-label','for'=>'inputError']) }}
					{{ Form::text('tel',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入電話號碼含區碼，非必填</p>
				</div>
	    	@else
	    		<div class="form-group">
		    		{{ Form::label('tel','電話') }}
					{{ Form::text('tel',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入電話號碼含區碼，非必填</p>
				</div>
	    	@endif

	    	<!-- 地址 address-->
	    	@if (isset($errors) and $errors->has('address'))
		    	<div class="form-group has-error">
		    		{{ Form::label('address','地址') }}&nbsp;&nbsp;{{ Form::label('address',$errors->first('address'),['class'=>'text-danger control-label','for'=>'inputError']) }}
					{{ Form::text('address',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入完整地址，非必填</p>
				</div>
	    	@else
	    		<div class="form-group">
		    		{{ Form::label('address','地址') }}
					{{ Form::text('address',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">請輸入完整地址，非必填</p>
				</div>
	    	@endif

     	</div>

		<div class="col-lg-12">

			<div class="form-group">
				{{ Form::submit('儲存',['class'=>'btn btn-primary form-control']) }}
			</div>
	   
    	</div>		

    </div>

    <div class="col-lg-6">
    	<div class="col-lg-6">
    		<!-- 圖片 pic-->
    		<div class="form-group">
	    		{{ Form::label('pic','目前圖片') }}<br>
				<img src="{{asset("images/users/".$user->pic)}}" width="100pt" height="100pt"/>
			</div>

    		<!-- 圖片上傳 pic_upload-->
			@if (isset($errors) and $errors->has('pic_upload'))
		    	<div class="form-group has-error">
		    		{{ Form::label('pic_upload','圖片上傳') }}&nbsp;&nbsp;{{ Form::label('pic_upload',$errors->first('pic_upload'),['class'=>'text-danger control-label','for'=>'inputError']) }}<br>
					{!! Form::file('pic_upload') !!}
				</div>
	    	@else
	    		<div class="form-group">
		    		{{ Form::label('pic_upload','圖片上傳') }}<br>
					{!! Form::file('pic_upload') !!}
				</div>
	    	@endif

    	</div>
    	<div class="col-lg-6">
    		<!-- 密碼 newPwd-->
	    	@if (isset($errors) and $errors->has('newPwd'))
		    	<div class="form-group has-error">
		    		{{ Form::label('newPwd','密碼') }}&nbsp;&nbsp;{{ Form::label('newPwd',$errors->first('newPwd'),['class'=>'text-danger control-label','for'=>'inputError']) }}<br>
					{{ Form::password('newPwd',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">限定6個字元以上</p>
				</div>
	    	@else
	    		<div class="form-group">
		    		{{ Form::label('newPwd','密碼') }}<br>
					{{ Form::password('newPwd',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">限定6個字元以上</p>
				</div>
	    	@endif

	    	<!-- 密碼確認 chkPwd-->
	    	@if (isset($errors) and $errors->has('chkPwd'))
		    	<div class="form-group has-error">
		    		{{ Form::label('chkPwd','確認密碼') }}&nbsp;&nbsp;{{ Form::label('chkPwd',$errors->first('chkPwd'),['class'=>'text-danger control-label','for'=>'inputError']) }}<br>
					{{ Form::password('chkPwd',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">限定6個字元以上</p>
				</div>
	    	@else
	    		<div class="form-group">
		    		{{ Form::label('chkPwd','確認密碼') }}<br>
					{{ Form::password('chkPwd',null,['class'=>'form-control','rows'=>'3']) }}
					<p class="help-block">限定6個字元以上</p>
				</div>
	    	@endif
    	</div>
    </div>
 {{ Form::close() }}
</div>
@stop

<div id="custom-notification-message" data-notify-position="top-right" data-notify-type="info" data-notify-msg="{{trans('label.saveDone')}}"></div>


@section("js")
	<script>
	$(function () {
        @if(Request::has('sd'))
	        jQuery(window).load( function(){
				SEMICOLON.widget.notifications( jQuery('#custom-notification-message') );
			});
		@endif
    });
    </script>
@stop







