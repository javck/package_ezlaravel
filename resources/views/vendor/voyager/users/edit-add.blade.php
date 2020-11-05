@extends('layouts.edit-add-master')


@section('panel_l_1_title')
    <i class="voyager-file-text"></i> {{ __('generic.basic_field') }}
@stop

@section('panel_l_1_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['username','password','name','email','enabled'] ])

    <!--  語系Locale -->
    @php
        if (isset($dataTypeContent->locale)) {
            $selected_locale = $dataTypeContent->locale;
        } else {
            $selected_locale = config('app.locale', 'en');
        }
    @endphp
    <div class="form-group">
        <label for="locale">{{ __('generic.locale') }}</label>
        <select class="form-control select2" id="locale" name="locale">
            @foreach (Voyager::getLocales() as $locale)
            <option value="{{ $locale }}" {{ ($locale == $selected_locale ? 'selected' : '') }}>{{
                $locale }}</option>
            @endforeach
        </select>
    </div>
@stop

@section('panel_l_2_title')
    <i class="voyager-list"></i> {{ __('generic.personal_data') }}
@stop

@section('panel_l_2_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['nickname','title','birthday','organization','mobile','tel','post_id','address','desc','socialLinks','gender','identify','fb_id'] ])
@stop

@section('panel_l_3_title')
    <i class="voyager-treasure-open"></i> {{ __('generic.additional_field') }}
@stop

@section('panel_l_3_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent ,
    'isInclude' => false , 'fields' =>
    ['name','email','password','default_role','additional_roles','username','nickname','avatar','birthday','user_belongsto_role_relationship','user_belongstomany_role_relationship','post_id','address','desc','title','organization','enabled','tel','mobile','email_verified_at','gender','identify','fb_id']
    ])
@stop

@if (Auth::user()->role->name == 'admin' || Auth::user()->role->name == 'super')
    @section('panel_r_1_title')
        <i class="voyager-group"></i> {{ __('generic.role') }}
    @stop
    @section('panel_r_1_body')

        <div class="form-group">
            <label for="default_role">{{ __('voyager::profile.role_default') }}</label>
            @php
            $dataTypeRows = $dataType->{(isset($dataTypeContent->id) ? 'editRows' : 'addRows' )};

            $row = $dataTypeRows->where('field', 'user_belongsto_role_relationship')->first();
            $options = $row->details;
            @endphp
            @include('Ezlaravel::formFields.user_relationship')
        </div>
        <div class="form-group">
            <label for="additional_roles">{{ __('voyager::profile.roles_additional') }}</label>
            @php
            $row = $dataTypeRows->where('field', 'user_belongstomany_role_relationship')->first();
            $options = $row->details;
            @endphp
            @include('Ezlaravel::formFields.user_relationship')
        </div>
    @stop
@else
    @section('panel_r_1_all')
    @stop
@endif


@section('panel_r_2_title')
    <i class="icon voyager-images"></i> {{ __('generic.avatar') }}
@stop

@section('panel_r_2_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['avatar'] ])
@stop

@section('panel_r_3_all')
@stop
