@extends('layouts.edit-add-master')

@section('panel_top')
    @if(isset($dataTypeContent))
        <a class="btn btn-info btn-rounded" href="{{ url('/admin/elements/copy/' . $dataTypeContent->id ) }}">{{ trans('label.copy_'.$dataType->slug) }} </a>
        <a class="btn btn-danger btn-rounded" href="{{ url('/admin/elements/del/' . $dataTypeContent->id ) }}">{{ trans('label.delete_'.$dataType->slug) }} </a>
    @endif
    <a class="btn btn-success btn-rounded" href="{{ url('/admin/'.$dataType->slug) }}">{{ trans('label.back_'.$dataType->slug) }} </a>
@stop


@section('panel_l_1_title')
    <i class="voyager-character"></i> {{ __('generic.basic_field') }}
    {{-- <span class="panel-desc"> {{ __('voyager::post.title_sub') }}</span> --}}
@stop

@section('panel_l_1_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['title','title_color','isShowTitle','subtitle','mode','page','position'] ])
@stop

@section('panel_l_2_title')
    {{ __('generic.content_field_big') }}
@stop

@section('panel_l_2_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['url','url_txt','video','content','pic','alt'] ])
@stop

@section('panel_l_3_title')
    <i class="voyager-treasure-open"></i> {{ __('voyager::post.additional_fields') }}
@stop

@section('panel_l_3_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => false , 'fields' => ['title','subtitle','mode','sort','enabled','video','content','pic','alt','page','lang','position','title_pos','title_color','q_mode','i_mode','price','priceUnit','isBestPrice','icon','animation','animationDelay','url','url_txt','isShowTitle'] ])
@stop

@section('panel_r_1_title')
    <i class="icon wb-clipboard"></i> {{ __('generic.adv_field') }}
@stop

@section('panel_r_1_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['lang','sort','enabled'] ])
@stop

@section('panel_r_2_title')
    {{ __('generic.content_field_small') }}
@stop

@section('panel_r_2_body')
    @include('Ezlaravel::partials.data_type_fields', [ 'dataType' => $dataType ,'dataTypeContent' => $dataTypeContent , 'isInclude' => true , 'fields' => ['title_pos','q_mode','i_mode','price','priceUnit','isBestPrice','icon','animation','animationDelay'] ])
@stop

@section('panel_r_3_all')

@stop

@section('javascript_child')
    <script>

        //清除元件
        function clear(){
            $("#title_pos select").val(null).trigger('change');
            $("#url_txt").val(null);
            $("#url").val(null);
            $("#icon").val(null);
            $("#pic").val(null);
            $("#alt").val(null);
            $("#video").val(null);
            $("#q_mode select").val(null).trigger('change');
            $("#i_mode select").val(null).trigger('change');
            $("#animation select").val(null).trigger('change');
            $("#price").val(null);
            $("#priceUnit").val(null);
            $("#price2").val(null);
            $("#price2Unit").val(null);
            $("#currency").val(null);
        }

        //隱藏元件
        function hide(){
            $("#title_pos").hide();
            $("#url_txt").hide();
            $("#url").hide();
            $("#icon").hide();
            $("#pic").hide();
            $("#alt").hide();
            $("#video").hide();
            $("#q_mode").hide();
            $("#i_mode").hide();
            $("#price").hide();
            $("#priceUnit").hide();
            $("#currency").hide();
            $("#price2").hide();
            $("#price2Unit").hide();
            $("#isBestPrice").hide();
        }

        //根據所選擇mode來開通支援的輸入項
        function reset(){
            var mode = $("#mode option:selected").val();
            switch(mode){
                case 'txt':
                    break;
                case 'price':
                    $("#price").show();
                    $("#priceUnit").show();
                    $("#price2").show();
                    $("#price2Unit").show();
                    $("#isBestPrice").show();
                    $("#currency").show();
                    $("#url").show();
                    $("#url_txt").show();
                    break;
                case 'iconTxt':
                    $("#icon").show();
                    break;
                case 'imgText':
                    $("#url").show();
                    $("#pic").show();
                    $("#alt").show();
                    break;
                case 'imgBtn':
                    $("#url").show();
                    $("#url_txt").show();
                    $("#pic").show();
                    $("#alt").show();
                    break;
                case 'action':
                    $("#url").show();
                    $("#url_txt").show();
                    break;
                case 'richTxt':
                    $("#icon").show();
                    $("#url").show();
                    $("#url_txt").show();
                    $("#pic").show();
                    $("#alt").show();
                    $("#video").show();
                    break;
                case 'slider':
                    $("#title_pos").show();
                    $("#url").show();
                    $("#url_txt").show();
                    $("#pic").show();
                    $("#alt").show();
                    break;
                case 'qna':
                    $("#icon").show();
                    $("#q_mode").show();
                    break;
                case 'iSwitch':
                    $("#i_mode").show();
                    $("#pic").show();
                    $("#alt").show();
                    break;
            }
        }

        $(document).ready(function(){
            @if(!isset($record))
                clear();
            @endif
            hide();
            reset();
            $("#mode").change(function(){
                clear();
                hide();
                reset();
            });
        });
    </script>
@stop
