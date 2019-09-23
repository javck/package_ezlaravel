@extends('layouts.edit-add-master')


@section('panel_l_1_title')
    <i class="voyager-character"></i> {{ __('generic.basic_field') }}
    <span class="panel-desc"> {{ __('voyager::post.title_sub') }}</span>

@stop

@section('panel_l_1_body')
    @include('easyweb2::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['title','content_small'] ])
@stop

@section('panel_l_2_title')
    {{ __('voyager::post.content') }}
@stop

@section('panel_l_2_action')
    <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen" aria-hidden="true"></a>
@stop

@section('panel_l_2_body')
    @include('easyweb2::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['content','cover','images','mediums','article_belongstomany_tag_relationship'] ])
@stop

@section('panel_l_3_title')
    <i class="voyager-treasure-open"></i> {{ __('voyager::post.additional_fields') }}
@stop

@section('panel_l_3_body')
    @include('easyweb2::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => false , 'fields' => ['title', 'content', 'content_small', 'slug', 'status', 'cgy_id', 'author_id', 'featured', 'mediums', 'images' , 'meta_description', 'meta_keywords', 'seo_title','sort','mode','article_belongstomany_tag_relationship','article_belongsto_cgy_relationship','cover'] ])
@stop

@section('panel_r_1_title')
    <i class="icon wb-clipboard"></i> {{ __('voyager::post.details') }}
@stop

@section('panel_r_1_body')
    @include('easyweb2::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['mode','sort','slug','status','article_belongsto_cgy_relationship','featured'] ])
@stop

@section('panel_r_2_title')
    <i class="icon wb-search"></i> {{ __('voyager::post.seo_content') }}
@stop

@section('panel_r_2_body')
    @include('easyweb2::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['meta_description','meta_keywords','seo_title'] ])
@stop

@section('panel_r_3_all')

@stop
