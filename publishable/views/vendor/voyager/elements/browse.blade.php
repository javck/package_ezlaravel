@extends('voyager::bread.browse')

@php
    $pages = ['none'=>'不限'] + json_decode(setting('constant.pages'),true);
    $modes = ['none'=>'不限'] + json_decode(setting('constant.element_modes'),true);
    $positions = ['none'=>'不限'] + \App\Models\Element::distinct()->orderBy('position','asc')->pluck('position','position')->all();
    $fields = [['key'=>'query_page','label'=>'查詢頁面：','options'=>$pages],
                ['key'=>'query_mode','label'=>'查詢元素類型：','options'=>$modes],
                ['key'=>'query_position','label'=>'查詢元素位置：','options'=>$positions]];
@endphp

@section('search_filter')
    @include('Ezlaravel::includes._filterField', ['fields' => $fields])
@stop

@section('javascript')
    @parent
    <script>
        function refreshQueryPositions(){
            $.ajax({
                type: 'POST',
                @if (env('IS_SSL') == 'true')
                     url: '{{ secure_url('/api/elements/queryPositions') }}',
                @else
                    url: '{{ url('/api/elements/queryPositions') }}',
                @endif
                data: { page : $('#query_page').val()},   //所傳送的資料
                dataType: 'json',
                headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                success: function(data){   //成功時執行區域
                    var positions = data.positions;
                    //console.log(positions);
                    $('#query_position').find('option').remove().end();
                    for(var key in positions){
                        $("#query_position").append("<option value='" + key + "'>" + positions[key] + "</option>");
                    }
                    @if(Session::get('query_position',null) != null)
                        $('#query_position').val('{{Session::get('query_position')}}');
                    @endif()

                },
                error: function(xhr,textStatus,err)
                {
                    console.log("readyState: " + xhr.readyState);
                    console.log("responseText: "+ xhr.responseText);
                    console.log("status: " + xhr.status);
                    console.log("text status: " + textStatus);
                    console.log("error: " + err);
                }
            });
        }

        function refreshQueryModes(){
            $.ajax({
                type: 'POST',
                @if (env('IS_SSL') == 'true')
                    url: '{{ secure_url('/api/elements/queryElementModes') }}',
                @else
                    url: '{{ url('/api/elements/queryElementModes') }}',
                @endif

                data: { page : $('#query_page').val()},   //所傳送的資料
                dataType: 'json',
                headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                success: function(data){   //成功時執行區域
                    var modes = data.modes;
                    console.log(modes);
                    $('#query_mode').find('option').remove().end();
                    for(var key in modes){
                        if(modes.hasOwnProperty(key)){
                            $("#query_mode").append("<option value='" + key + "'>" + modes[key] + "</option>");
                        }
                    }
                    @if(Session::get('query_mode',null) != null)
                        $('#query_mode').mval('{{Session::get('query_mode')}}');
                    @endif

                },
                error: function(xhr,textStatus,err)
                {
                    console.log("readyState: " + xhr.readyState);
                    console.log("responseText: "+ xhr.responseText);
                    console.log("status: " + xhr.status);
                    console.log("text status: " + textStatus);
                    console.log("error: " + err);
                }
            });
        }
        $(document).ready(function()
        {
            $("#query_page").select2();
            $("#query_mode").select2();
            $("#query_position").select2();

            $("#query_page").change(function(){
                refreshQueryModes();
                refreshQueryPositions();
            });
        });
    </script>
@stop
