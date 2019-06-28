<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyDataRowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("data_rows")->truncate();
        DB::table("data_rows")->insert( [
			'id'=>1,
			'data_type_id'=>1,
			'field'=>'id',
			'type'=>'number',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>1
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>2,
			'data_type_id'=>1,
			'field'=>'name',
			'type'=>'text',
			'display_name'=>'名稱',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>3,
			'data_type_id'=>1,
			'field'=>'email',
			'type'=>'text',
			'display_name'=>'電子郵件',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>5
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>4,
			'data_type_id'=>1,
			'field'=>'password',
			'type'=>'password',
			'display_name'=>'密碼',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>1,
			'add'=>1,
			'delete'=>0,
			'details'=>'{}',
			'order'=>8
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>5,
			'data_type_id'=>1,
			'field'=>'remember_token',
			'type'=>'hidden',
			'display_name'=>'Remember Token',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>9
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>6,
			'data_type_id'=>1,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>11
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>7,
			'data_type_id'=>1,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'變更於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>12
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>8,
			'data_type_id'=>1,
			'field'=>'avatar',
			'type'=>'image',
			'display_name'=>'頭像',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>14
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>9,
			'data_type_id'=>1,
			'field'=>'user_belongsto_role_relationship',
			'type'=>'relationship',
			'display_name'=>'角色',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>0,
			'details'=>'{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":"0","taggable":"0"}',
			'order'=>17
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>10,
			'data_type_id'=>1,
			'field'=>'user_belongstomany_role_relationship',
			'type'=>'relationship',
			'display_name'=>'附屬角色',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>0,
			'details'=>'{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}',
			'order'=>18
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>12,
			'data_type_id'=>1,
			'field'=>'settings',
			'type'=>'hidden',
			'display_name'=>'Settings',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>19
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>13,
			'data_type_id'=>2,
			'field'=>'id',
			'type'=>'number',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>NULL,
			'order'=>1
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>14,
			'data_type_id'=>2,
			'field'=>'name',
			'type'=>'text',
			'display_name'=>'名稱',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>NULL,
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>15,
			'data_type_id'=>2,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>NULL,
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>16,
			'data_type_id'=>2,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>NULL,
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>17,
			'data_type_id'=>3,
			'field'=>'id',
			'type'=>'number',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>NULL,
			'order'=>1
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>18,
			'data_type_id'=>3,
			'field'=>'name',
			'type'=>'text',
			'display_name'=>'名稱',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>NULL,
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>19,
			'data_type_id'=>3,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>NULL,
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>20,
			'data_type_id'=>3,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>NULL,
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>21,
			'data_type_id'=>3,
			'field'=>'display_name',
			'type'=>'text',
			'display_name'=>'顯示名稱',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>NULL,
			'order'=>5
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>22,
			'data_type_id'=>1,
			'field'=>'role_id',
			'type'=>'text',
			'display_name'=>'角色',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>16
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>23,
			'data_type_id'=>4,
			'field'=>'id',
			'type'=>'text',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>1
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>26,
			'data_type_id'=>4,
			'field'=>'title',
			'type'=>'text',
			'display_name'=>'標題',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"disabledEdit":true}',
			'order'=>9
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>27,
			'data_type_id'=>4,
			'field'=>'mediums',
			'type'=>'text',
			'display_name'=>'媒體資料',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>11
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>28,
			'data_type_id'=>4,
			'field'=>'mode',
			'type'=>'constant dropdown',
			'display_name'=>'模式',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"key":"article_modes"}',
			'order'=>12
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>29,
			'data_type_id'=>4,
			'field'=>'author',
			'type'=>'hidden',
			'display_name'=>'作者',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>5
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>30,
			'data_type_id'=>4,
			'field'=>'content_small',
			'type'=>'text_area',
			'display_name'=>'短文',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"validation":{"rule":"required","messages":{"required":"請輸入短文"}}}',
			'order'=>15
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>31,
			'data_type_id'=>4,
			'field'=>'content',
			'type'=>'rich_text_box',
			'display_name'=>'全文',
			'required'=>1,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>14
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>32,
			'data_type_id'=>4,
			'field'=>'attachment_names',
			'type'=>'text',
			'display_name'=>'附件名稱',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>16
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>33,
			'data_type_id'=>4,
			'field'=>'attachment_paths',
			'type'=>'file',
			'display_name'=>'附件路徑',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>17
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>34,
			'data_type_id'=>4,
			'field'=>'sort',
			'type'=>'number',
			'display_name'=>'排序',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"description":"由小至大排序"}',
			'order'=>19
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>36,
			'data_type_id'=>4,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>1,
			'details'=>'{}',
			'order'=>20
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>37,
			'data_type_id'=>4,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'變更於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>21
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>38,
			'data_type_id'=>5,
			'field'=>'id',
			'type'=>'text',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>1
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>39,
			'data_type_id'=>5,
			'field'=>'parent_id',
			'type'=>'text',
			'display_name'=>'父分類ID',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>40,
			'data_type_id'=>5,
			'field'=>'title',
			'type'=>'text',
			'display_name'=>'標題',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>41,
			'data_type_id'=>5,
			'field'=>'pic',
			'type'=>'image',
			'display_name'=>'圖片',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"inVisibleRoles":"admin"}',
			'order'=>5
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>42,
			'data_type_id'=>5,
			'field'=>'desc',
			'type'=>'text_area',
			'display_name'=>'描述',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>6
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>43,
			'data_type_id'=>5,
			'field'=>'enabled',
			'type'=>'checkbox',
			'display_name'=>'啟用',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"on":"打開","off":"關閉","default":"on"}',
			'order'=>7
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>44,
			'data_type_id'=>5,
			'field'=>'sort',
			'type'=>'number',
			'display_name'=>'排序',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"description":"從小排到大","legend":"測試legend"}',
			'order'=>8
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>45,
			'data_type_id'=>5,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>9
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>46,
			'data_type_id'=>5,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'更新於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>10
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>47,
			'data_type_id'=>6,
			'field'=>'id',
			'type'=>'text',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>1
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>48,
			'data_type_id'=>6,
			'field'=>'article_id',
			'type'=>'text',
			'display_name'=>'文章ID',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>49,
			'data_type_id'=>6,
			'field'=>'name',
			'type'=>'text',
			'display_name'=>'留言者姓名',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>6
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>50,
			'data_type_id'=>6,
			'field'=>'email',
			'type'=>'text',
			'display_name'=>'留言者Email',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>7
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>51,
			'data_type_id'=>6,
			'field'=>'website',
			'type'=>'text',
			'display_name'=>'留言者網站',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>8
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>52,
			'data_type_id'=>6,
			'field'=>'user_id',
			'type'=>'text',
			'display_name'=>'留言者ID',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>53,
			'data_type_id'=>6,
			'field'=>'content',
			'type'=>'text_area',
			'display_name'=>'內容',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>9
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>54,
			'data_type_id'=>6,
			'field'=>'reply_to',
			'type'=>'text',
			'display_name'=>'回應文章ID',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>5
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>55,
			'data_type_id'=>6,
			'field'=>'sort',
			'type'=>'number',
			'display_name'=>'排序',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{"description":"從小排到大"}',
			'order'=>10
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>56,
			'data_type_id'=>6,
			'field'=>'enabled',
			'type'=>'checkbox',
			'display_name'=>'啟用',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"on":"打開","off":"關閉","default":"on"}',
			'order'=>11
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>57,
			'data_type_id'=>6,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>12
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>58,
			'data_type_id'=>6,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'更新於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>13
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>59,
			'data_type_id'=>7,
			'field'=>'id',
			'type'=>'text',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>1
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>60,
			'data_type_id'=>7,
			'field'=>'name',
			'type'=>'text',
			'display_name'=>'姓名',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>61,
			'data_type_id'=>7,
			'field'=>'mobile',
			'type'=>'text',
			'display_name'=>'手機號碼',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>5
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>62,
			'data_type_id'=>7,
			'field'=>'subject',
			'type'=>'text',
			'display_name'=>'主旨',
			'required'=>1,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>7
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>63,
			'data_type_id'=>7,
			'field'=>'mode',
			'type'=>'hidden',
			'display_name'=>'模式',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>8
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>64,
			'data_type_id'=>7,
			'field'=>'message',
			'type'=>'text_area',
			'display_name'=>'訊息',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>9
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>65,
			'data_type_id'=>7,
			'field'=>'service',
			'type'=>'constant dropdown',
			'display_name'=>'所需服務',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"key":"services"}',
			'order'=>10
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>66,
			'data_type_id'=>7,
			'field'=>'email',
			'type'=>'text',
			'display_name'=>'電子郵箱',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>6
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>67,
			'data_type_id'=>7,
			'field'=>'std_name',
			'type'=>'hidden',
			'display_name'=>'學員姓名',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>11
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>68,
			'data_type_id'=>7,
			'field'=>'std_grade',
			'type'=>'hidden',
			'display_name'=>'Std Grade',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>12
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>69,
			'data_type_id'=>7,
			'field'=>'applyCourse',
			'type'=>'hidden',
			'display_name'=>'ApplyCourse',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>13
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>70,
			'data_type_id'=>7,
			'field'=>'codeExp',
			'type'=>'hidden',
			'display_name'=>'CodeExp',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>15
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>71,
			'data_type_id'=>7,
			'field'=>'isHandled',
			'type'=>'hidden',
			'display_name'=>'是否處理',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{"on":"已處理","off":"未處理","checked":"false"}',
			'order'=>16
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>72,
			'data_type_id'=>7,
			'field'=>'preferPlace',
			'type'=>'hidden',
			'display_name'=>'PreferPlace',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>17
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>73,
			'data_type_id'=>7,
			'field'=>'preferTime',
			'type'=>'hidden',
			'display_name'=>'PreferTime',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>18
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>74,
			'data_type_id'=>7,
			'field'=>'source',
			'type'=>'constant dropdown',
			'display_name'=>'流量來源',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"key":"sources"}',
			'order'=>14
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>75,
			'data_type_id'=>7,
			'field'=>'destination',
			'type'=>'hidden',
			'display_name'=>'Destination',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>19
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>76,
			'data_type_id'=>7,
			'field'=>'warehouse',
			'type'=>'hidden',
			'display_name'=>'Warehouse',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>20
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>77,
			'data_type_id'=>7,
			'field'=>'cargoType',
			'type'=>'hidden',
			'display_name'=>'CargoType',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>21
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>78,
			'data_type_id'=>7,
			'field'=>'deliver',
			'type'=>'hidden',
			'display_name'=>'Deliver',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>22
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>79,
			'data_type_id'=>7,
			'field'=>'weight',
			'type'=>'hidden',
			'display_name'=>'Weight',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>23
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>80,
			'data_type_id'=>7,
			'field'=>'width',
			'type'=>'hidden',
			'display_name'=>'Width',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>24
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>81,
			'data_type_id'=>7,
			'field'=>'length',
			'type'=>'hidden',
			'display_name'=>'Length',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>25
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>82,
			'data_type_id'=>7,
			'field'=>'height',
			'type'=>'hidden',
			'display_name'=>'Height',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>26
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>83,
			'data_type_id'=>7,
			'field'=>'enabled',
			'type'=>'hidden',
			'display_name'=>'Enabled',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>27
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>84,
			'data_type_id'=>7,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>28
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>85,
			'data_type_id'=>7,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'變更於',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>30
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>86,
			'data_type_id'=>7,
			'field'=>'partner_id',
			'type'=>'text',
			'display_name'=>'合作廠商ID',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>87,
			'data_type_id'=>8,
			'field'=>'id',
			'type'=>'text',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>1
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>88,
			'data_type_id'=>8,
			'field'=>'page',
			'type'=>'constant dropdown',
			'display_name'=>'頁面',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"key":"pages"}',
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>89,
			'data_type_id'=>8,
			'field'=>'mode',
			'type'=>'constant dropdown',
			'display_name'=>'模式',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"key":"element_modes"}',
			'order'=>5
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>90,
			'data_type_id'=>8,
			'field'=>'title',
			'type'=>'text',
			'display_name'=>'標題',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>6
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>91,
			'data_type_id'=>8,
			'field'=>'position',
			'type'=>'text',
			'display_name'=>'位置',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>8
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>92,
			'data_type_id'=>8,
			'field'=>'lang',
			'type'=>'constant dropdown',
			'display_name'=>'語系',
			'required'=>1,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"key":"lang"}',
			'order'=>9
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>93,
			'data_type_id'=>8,
			'field'=>'icon',
			'type'=>'text',
			'display_name'=>'ICON',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>10
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>94,
			'data_type_id'=>8,
			'field'=>'subtitle',
			'type'=>'text',
			'display_name'=>'副標題',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>7
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>95,
			'data_type_id'=>8,
			'field'=>'content',
			'type'=>'rich_text_box',
			'display_name'=>'內容',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>11
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>96,
			'data_type_id'=>8,
			'field'=>'url',
			'type'=>'text',
			'display_name'=>'網址',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>12
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>97,
			'data_type_id'=>8,
			'field'=>'url_txt',
			'type'=>'text',
			'display_name'=>'網址文字',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>13
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>98,
			'data_type_id'=>8,
			'field'=>'pic',
			'type'=>'image',
			'display_name'=>'圖片',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>14
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>99,
			'data_type_id'=>8,
			'field'=>'video',
			'type'=>'text',
			'display_name'=>'影片',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>15
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>100,
			'data_type_id'=>8,
			'field'=>'alt',
			'type'=>'text',
			'display_name'=>'替代文字',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>16
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>101,
			'data_type_id'=>8,
			'field'=>'title_pos',
			'type'=>'text',
			'display_name'=>'Title Pos',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>17
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>102,
			'data_type_id'=>8,
			'field'=>'q_mode',
			'type'=>'tag dropdown',
			'display_name'=>'Q&A標籤',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"type":"qna"}',
			'order'=>18
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>103,
			'data_type_id'=>8,
			'field'=>'i_mode',
			'type'=>'hidden',
			'display_name'=>'I Mode',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>19
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>104,
			'data_type_id'=>8,
			'field'=>'updater_id',
			'type'=>'text',
			'display_name'=>'更新者ID',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>105,
			'data_type_id'=>8,
			'field'=>'sort',
			'type'=>'number',
			'display_name'=>'排序',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"description":"由小到大排序"}',
			'order'=>20
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>106,
			'data_type_id'=>8,
			'field'=>'enabled',
			'type'=>'checkbox',
			'display_name'=>'啟用',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"on":"開啟","off":"關閉","default":"on"}',
			'order'=>21
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>107,
			'data_type_id'=>8,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>1,
			'details'=>'{}',
			'order'=>22
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>108,
			'data_type_id'=>8,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'更新於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>23
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>109,
			'data_type_id'=>8,
			'field'=>'price',
			'type'=>'number',
			'display_name'=>'價格',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>24
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>110,
			'data_type_id'=>8,
			'field'=>'isBestPrice',
			'type'=>'checkbox',
			'display_name'=>'最優價格',
			'required'=>1,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"on":"是","off":"否","default":"off"}',
			'order'=>25
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>111,
			'data_type_id'=>8,
			'field'=>'priceUnit',
			'type'=>'text',
			'display_name'=>'價格單位',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>26
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>114,
			'data_type_id'=>8,
			'field'=>'currency',
			'type'=>'text',
			'display_name'=>'貨幣',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>29
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>115,
			'data_type_id'=>8,
			'field'=>'animation',
			'type'=>'constant dropdown',
			'display_name'=>'動畫',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"key":"animStyles"}',
			'order'=>30
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>116,
			'data_type_id'=>8,
			'field'=>'animationDelay',
			'type'=>'number',
			'display_name'=>'動畫延遲',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"description":"單位是微秒"}',
			'order'=>31
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>117,
			'data_type_id'=>9,
			'field'=>'id',
			'type'=>'hidden',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>0,
			'details'=>'{}',
			'order'=>1
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>118,
			'data_type_id'=>9,
			'field'=>'title',
			'type'=>'text',
			'display_name'=>'標題',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>6
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>120,
			'data_type_id'=>9,
			'field'=>'lang',
			'type'=>'hidden',
			'display_name'=>'語系',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{"key":"lang"}',
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>121,
			'data_type_id'=>9,
			'field'=>'pics',
			'type'=>'multiple_images',
			'display_name'=>'圖片集',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"validation":{"rule":"required","messages":{"required":"請選擇圖片"}}}',
			'order'=>5
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>122,
			'data_type_id'=>9,
			'field'=>'title_link',
			'type'=>'text',
			'display_name'=>'標題連結',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>7
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>123,
			'data_type_id'=>9,
			'field'=>'l_link',
			'type'=>'text',
			'display_name'=>'左邊連結',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>9
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>124,
			'data_type_id'=>9,
			'field'=>'l_icon',
			'type'=>'text',
			'display_name'=>'左邊ICON',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>10
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>125,
			'data_type_id'=>9,
			'field'=>'l_type',
			'type'=>'constant dropdown',
			'display_name'=>'左邊類型',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"key":"media_types"}',
			'order'=>11
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>126,
			'data_type_id'=>9,
			'field'=>'r_link',
			'type'=>'text',
			'display_name'=>'右邊連結',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>12
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>127,
			'data_type_id'=>9,
			'field'=>'r_icon',
			'type'=>'text',
			'display_name'=>'右邊ICON',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>13
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>128,
			'data_type_id'=>9,
			'field'=>'r_type',
			'type'=>'constant dropdown',
			'display_name'=>'右邊類型',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"key":"media_types"}',
			'order'=>14
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>129,
			'data_type_id'=>9,
			'field'=>'sort',
			'type'=>'number',
			'display_name'=>'排序',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"description":"由小排到大"}',
			'order'=>15
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>130,
			'data_type_id'=>9,
			'field'=>'enabled',
			'type'=>'checkbox',
			'display_name'=>'啟用',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"on":"開啟","off":"關閉","default":"on"}',
			'order'=>16
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>131,
			'data_type_id'=>9,
			'field'=>'subtitle',
			'type'=>'text',
			'display_name'=>'副標題',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>8
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>132,
			'data_type_id'=>9,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>1,
			'details'=>'{}',
			'order'=>17
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>133,
			'data_type_id'=>9,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'更新於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>18
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>134,
			'data_type_id'=>10,
			'field'=>'id',
			'type'=>'text',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>1
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>135,
			'data_type_id'=>10,
			'field'=>'name',
			'type'=>'text',
			'display_name'=>'姓名',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>136,
			'data_type_id'=>10,
			'field'=>'tel',
			'type'=>'text',
			'display_name'=>'電話',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>137,
			'data_type_id'=>10,
			'field'=>'secret',
			'type'=>'text',
			'display_name'=>'口令',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>138,
			'data_type_id'=>10,
			'field'=>'email',
			'type'=>'text',
			'display_name'=>'Email',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>5
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>139,
			'data_type_id'=>10,
			'field'=>'website',
			'type'=>'text',
			'display_name'=>'網址',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>6
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>140,
			'data_type_id'=>10,
			'field'=>'address',
			'type'=>'text',
			'display_name'=>'地址',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>7
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>141,
			'data_type_id'=>10,
			'field'=>'discount',
			'type'=>'text',
			'display_name'=>'折價',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>8
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>142,
			'data_type_id'=>10,
			'field'=>'sort',
			'type'=>'text',
			'display_name'=>'排序',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>9
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>143,
			'data_type_id'=>10,
			'field'=>'enabled',
			'type'=>'checkbox',
			'display_name'=>'啟用',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"on":"啟用","off":"關閉","default":"on"}',
			'order'=>10
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>144,
			'data_type_id'=>10,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>1,
			'details'=>'{}',
			'order'=>11
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>145,
			'data_type_id'=>10,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'更新於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>12
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>146,
			'data_type_id'=>11,
			'field'=>'id',
			'type'=>'text',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>1
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>147,
			'data_type_id'=>11,
			'field'=>'user_id',
			'type'=>'text',
			'display_name'=>'使用者',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>148,
			'data_type_id'=>11,
			'field'=>'serial',
			'type'=>'text',
			'display_name'=>'序號',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>5
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>149,
			'data_type_id'=>11,
			'field'=>'mode',
			'type'=>'number',
			'display_name'=>'優惠模式',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"description":"大於100為折價，小於100為折數，如90為打九折"}',
			'order'=>6
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>150,
			'data_type_id'=>11,
			'field'=>'isSent',
			'type'=>'checkbox',
			'display_name'=>'寄出否',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"on":"已寄出","off":"尚未","default":"off"}',
			'order'=>7
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>151,
			'data_type_id'=>11,
			'field'=>'isUsed',
			'type'=>'checkbox',
			'display_name'=>'使用否',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"on":"已使用","off":"尚未","default":"off"}',
			'order'=>8
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>152,
			'data_type_id'=>11,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>1,
			'details'=>'{}',
			'order'=>9
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>153,
			'data_type_id'=>11,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'更新於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>10
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>154,
			'data_type_id'=>12,
			'field'=>'id',
			'type'=>'text',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>1
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>155,
			'data_type_id'=>12,
			'field'=>'title',
			'type'=>'text',
			'display_name'=>'標題',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>156,
			'data_type_id'=>12,
			'field'=>'type',
			'type'=>'text',
			'display_name'=>'類型',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>157,
			'data_type_id'=>12,
			'field'=>'mode',
			'type'=>'hidden',
			'display_name'=>'Mode',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>158,
			'data_type_id'=>12,
			'field'=>'link',
			'type'=>'text',
			'display_name'=>'連結',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>5
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>159,
			'data_type_id'=>12,
			'field'=>'sort',
			'type'=>'number',
			'display_name'=>'排序',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"description":"從小排到大"}',
			'order'=>6
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>160,
			'data_type_id'=>12,
			'field'=>'enabled',
			'type'=>'checkbox',
			'display_name'=>'啟用',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"on":"打開","off":"關閉","default":"on"}',
			'order'=>7
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>161,
			'data_type_id'=>12,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>8
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>162,
			'data_type_id'=>12,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'Updated At',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>9
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>163,
			'data_type_id'=>1,
			'field'=>'username',
			'type'=>'text',
			'display_name'=>'帳號',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>10
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>164,
			'data_type_id'=>1,
			'field'=>'nickname',
			'type'=>'text',
			'display_name'=>'暱稱',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>13
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>165,
			'data_type_id'=>1,
			'field'=>'title',
			'type'=>'text',
			'display_name'=>'頭銜',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>24
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>166,
			'data_type_id'=>1,
			'field'=>'birthday',
			'type'=>'date',
			'display_name'=>'生日',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>15
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>167,
			'data_type_id'=>1,
			'field'=>'organization',
			'type'=>'text',
			'display_name'=>'組織',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>23
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>168,
			'data_type_id'=>1,
			'field'=>'groups',
			'type'=>'hidden',
			'display_name'=>'Groups',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>20
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>169,
			'data_type_id'=>1,
			'field'=>'tel',
			'type'=>'text',
			'display_name'=>'電話',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>21
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>170,
			'data_type_id'=>1,
			'field'=>'mobile',
			'type'=>'text',
			'display_name'=>'手機號碼',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>22
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>171,
			'data_type_id'=>1,
			'field'=>'fb_id',
			'type'=>'text',
			'display_name'=>'臉書ID',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>25
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>172,
			'data_type_id'=>1,
			'field'=>'first_name',
			'type'=>'hidden',
			'display_name'=>'First Name',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>26
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>173,
			'data_type_id'=>1,
			'field'=>'last_name',
			'type'=>'hidden',
			'display_name'=>'Last Name',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>27
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>174,
			'data_type_id'=>1,
			'field'=>'pic',
			'type'=>'hidden',
			'display_name'=>'Pic',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>28
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>175,
			'data_type_id'=>1,
			'field'=>'post_id',
			'type'=>'text',
			'display_name'=>'郵遞區號',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>29
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>176,
			'data_type_id'=>1,
			'field'=>'address',
			'type'=>'text',
			'display_name'=>'地址',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>30
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>177,
			'data_type_id'=>1,
			'field'=>'desc',
			'type'=>'text_area',
			'display_name'=>'說明',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>31
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>178,
			'data_type_id'=>1,
			'field'=>'enabled',
			'type'=>'checkbox',
			'display_name'=>'啟用',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"on":"開啟","off":"關閉","checked":"on"}',
			'order'=>32
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>179,
			'data_type_id'=>1,
			'field'=>'socialLinks',
			'type'=>'hidden',
			'display_name'=>'社群連結',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>33
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>180,
			'data_type_id'=>1,
			'field'=>'points',
			'type'=>'hidden',
			'display_name'=>'Points',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>34
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>181,
			'data_type_id'=>1,
			'field'=>'parent_id',
			'type'=>'text',
			'display_name'=>'親屬ID',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>182,
			'data_type_id'=>1,
			'field'=>'provider',
			'type'=>'hidden',
			'display_name'=>'登入平台',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>1,
			'details'=>'{}',
			'order'=>35
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>183,
			'data_type_id'=>1,
			'field'=>'provider_id',
			'type'=>'hidden',
			'display_name'=>'登入平台ID',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>1,
			'details'=>'{}',
			'order'=>36
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>184,
			'data_type_id'=>1,
			'field'=>'partner_id',
			'type'=>'text',
			'display_name'=>'合作夥伴ID',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>6
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>185,
			'data_type_id'=>1,
			'field'=>'user_belongsto_user_relationship',
			'type'=>'relationship',
			'display_name'=>'親屬',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"model":"App\\\\User","table":"users","type":"belongsTo","column":"parent_id","key":"id","label":"name","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>186,
			'data_type_id'=>1,
			'field'=>'user_belongsto_partner_relationship',
			'type'=>'relationship',
			'display_name'=>'合作夥伴',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"model":"App\\\\Partner","table":"partners","type":"belongsTo","column":"partner_id","key":"id","label":"name","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>7
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>187,
			'data_type_id'=>4,
			'field'=>'cgy_id',
			'type'=>'text',
			'display_name'=>'分類',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>6
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>188,
			'data_type_id'=>4,
			'field'=>'locale',
			'type'=>'hidden',
			'display_name'=>'語系',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{"default":"zh_TW","options":{"zh_TW":"繁體中文","zh_CN":"簡體中文"}}',
			'order'=>8
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>189,
			'data_type_id'=>4,
			'field'=>'author_id',
			'type'=>'text',
			'display_name'=>'作者',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>190,
			'data_type_id'=>7,
			'field'=>'contact_belongsto_user_relationship',
			'type'=>'relationship',
			'display_name'=>'合作廠商',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"model":"App\\\\Partner","table":"partners","type":"belongsTo","column":"partner_id","key":"id","label":"name","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>191,
			'data_type_id'=>8,
			'field'=>'element_belongsto_user_relationship',
			'type'=>'relationship',
			'display_name'=>'更新者ID',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"model":"App\\\\User","table":"users","type":"belongsTo","column":"updater_id","key":"id","label":"name","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>192,
			'data_type_id'=>9,
			'field'=>'media_belongsto_cgy_relationship',
			'type'=>'relationship',
			'display_name'=>'分類ID',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"model":"App\\\\Cgy","table":"cgys","type":"belongsTo","column":"cgy_id","key":"id","label":"title","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>193,
			'data_type_id'=>9,
			'field'=>'cgy_id',
			'type'=>'text',
			'display_name'=>'分類ID',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>194,
			'data_type_id'=>5,
			'field'=>'cgy_belongsto_cgy_relationship',
			'type'=>'relationship',
			'display_name'=>'父分類ID',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"model":"App\\\\Cgy","table":"cgys","type":"belongsTo","column":"parent_id","key":"id","label":"title","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>195,
			'data_type_id'=>6,
			'field'=>'comment_belongsto_user_relationship',
			'type'=>'relationship',
			'display_name'=>'留言者',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{"model":"App\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>196,
			'data_type_id'=>6,
			'field'=>'comment_belongsto_article_relationship',
			'type'=>'relationship',
			'display_name'=>'文章ID',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{"model":"App\\\\Article","table":"articles","type":"belongsTo","column":"article_id","key":"id","label":"title","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>14
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>197,
			'data_type_id'=>6,
			'field'=>'comment_belongsto_article_relationship_1',
			'type'=>'relationship',
			'display_name'=>'回應文章ID',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{"model":"App\\\\Article","table":"articles","type":"belongsTo","column":"reply_to","key":"id","label":"title","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>15
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>198,
			'data_type_id'=>13,
			'field'=>'id',
			'type'=>'text',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>1
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>199,
			'data_type_id'=>13,
			'field'=>'owner_id',
			'type'=>'text',
			'display_name'=>'擁有者',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>200,
			'data_type_id'=>13,
			'field'=>'receiver',
			'type'=>'text',
			'display_name'=>'收件人',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>201,
			'data_type_id'=>13,
			'field'=>'receiverTitle',
			'type'=>'text',
			'display_name'=>'收件人抬頭',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>5
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>202,
			'data_type_id'=>13,
			'field'=>'receiverMobile',
			'type'=>'text',
			'display_name'=>'收件人手機',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>6
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>203,
			'data_type_id'=>13,
			'field'=>'receiverEmail',
			'type'=>'text',
			'display_name'=>'收件人Email',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>7
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>204,
			'data_type_id'=>13,
			'field'=>'receiverAddress',
			'type'=>'text',
			'display_name'=>'收件地址',
			'required'=>1,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>8
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>205,
			'data_type_id'=>13,
			'field'=>'message',
			'type'=>'text_area',
			'display_name'=>'訊息',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>9
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>206,
			'data_type_id'=>13,
			'field'=>'couponCode',
			'type'=>'text',
			'display_name'=>'優惠序號',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>10
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>207,
			'data_type_id'=>13,
			'field'=>'subtotal',
			'type'=>'number',
			'display_name'=>'小計',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>11
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>208,
			'data_type_id'=>13,
			'field'=>'shipCost',
			'type'=>'number',
			'display_name'=>'運費',
			'required'=>1,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>12
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>209,
			'data_type_id'=>13,
			'field'=>'status',
			'type'=>'constant dropdown',
			'display_name'=>'狀態',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"key":"order_statuses"}',
			'order'=>13
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>210,
			'data_type_id'=>13,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'創建於',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>1,
			'details'=>'{}',
			'order'=>14
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>211,
			'data_type_id'=>13,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'更新於',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>20
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>212,
			'data_type_id'=>11,
			'field'=>'serial_belongsto_user_relationship',
			'type'=>'relationship',
			'display_name'=>'使用者',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"model":"App\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>213,
			'data_type_id'=>11,
			'field'=>'type',
			'type'=>'constant dropdown',
			'display_name'=>'類型',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"key":"serials_type"}',
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>214,
			'data_type_id'=>13,
			'field'=>'order_belongsto_user_relationship',
			'type'=>'relationship',
			'display_name'=>'users',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"model":"App\\\\User","table":"users","type":"belongsTo","column":"owner_id","key":"id","label":"name","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>215,
			'data_type_id'=>14,
			'field'=>'id',
			'type'=>'text',
			'display_name'=>'ID',
			'required'=>1,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>0
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>216,
			'data_type_id'=>14,
			'field'=>'user_id',
			'type'=>'select_dropdown',
			'display_name'=>'所屬使用者',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>217,
			'data_type_id'=>14,
			'field'=>'order_id',
			'type'=>'select_dropdown',
			'display_name'=>'所屬訂單',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>218,
			'data_type_id'=>14,
			'field'=>'website',
			'type'=>'text',
			'display_name'=>'商品網址',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>6
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>219,
			'data_type_id'=>14,
			'field'=>'name',
			'type'=>'text',
			'display_name'=>'商品名稱',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>7
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>220,
			'data_type_id'=>14,
			'field'=>'pic',
			'type'=>'image',
			'display_name'=>'商品圖片',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>8
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>221,
			'data_type_id'=>14,
			'field'=>'code',
			'type'=>'text',
			'display_name'=>'商品型號',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>9
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>222,
			'data_type_id'=>14,
			'field'=>'boxSize',
			'type'=>'text',
			'display_name'=>'外箱尺寸',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>10
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>223,
			'data_type_id'=>14,
			'field'=>'boxWeight',
			'type'=>'number',
			'display_name'=>'外箱重量',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"min":0}',
			'order'=>11
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>224,
			'data_type_id'=>14,
			'field'=>'storage',
			'type'=>'select_dropdown',
			'display_name'=>'倉庫',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"default":"tigerDoor","options":{"tigerDoor":"虎門倉","shangHai":"上海倉","hongKong":"香港倉","taiwan":"台灣倉"}}',
			'order'=>12
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>225,
			'data_type_id'=>14,
			'field'=>'air_serial',
			'type'=>'text',
			'display_name'=>'航空主號',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>26
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>226,
			'data_type_id'=>14,
			'field'=>'created_at',
			'type'=>'timestamp',
			'display_name'=>'建單時間',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>28
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>227,
			'data_type_id'=>14,
			'field'=>'updated_at',
			'type'=>'timestamp',
			'display_name'=>'更單時間',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>29
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>228,
			'data_type_id'=>14,
			'field'=>'pack_at',
			'type'=>'date',
			'display_name'=>'打包於',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"format":"%Y-%m-%d"}',
			'order'=>30
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>229,
			'data_type_id'=>14,
			'field'=>'send_at',
			'type'=>'date',
			'display_name'=>'出倉於',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"format":"%Y-%m-%d"}',
			'order'=>31
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>230,
			'data_type_id'=>14,
			'field'=>'customs_serial',
			'type'=>'text',
			'display_name'=>'清關序號',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>27
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>231,
			'data_type_id'=>14,
			'field'=>'weighing',
			'type'=>'number',
			'display_name'=>'秤重',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"min":0,"description":"單位是公斤"}',
			'order'=>13
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>232,
			'data_type_id'=>14,
			'field'=>'weighing_cal',
			'type'=>'number',
			'display_name'=>'計重',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"min":0,"description":"單位是公斤"}',
			'order'=>14
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>233,
			'data_type_id'=>14,
			'field'=>'size',
			'type'=>'text',
			'display_name'=>'尺寸',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"description":"填寫格式為長(cm)x寬(cm)x高(cm)"}',
			'order'=>15
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>234,
			'data_type_id'=>14,
			'field'=>'comment',
			'type'=>'text_area',
			'display_name'=>'注意事項',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>16
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>235,
			'data_type_id'=>14,
			'field'=>'require',
			'type'=>'text_area',
			'display_name'=>'驗貨要求',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>17
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>236,
			'data_type_id'=>14,
			'field'=>'qty',
			'type'=>'number',
			'display_name'=>'採購數量',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"min":0}',
			'order'=>18
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>237,
			'data_type_id'=>14,
			'field'=>'price',
			'type'=>'number',
			'display_name'=>'單價',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"validation":{"rules":["min:0"]}}',
			'order'=>19
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>238,
			'data_type_id'=>14,
			'field'=>'subtotal',
			'type'=>'number',
			'display_name'=>'採購金額',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{"min":0}',
			'order'=>20
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>239,
			'data_type_id'=>14,
			'field'=>'cost_package',
			'type'=>'number',
			'display_name'=>'包裝包材費用',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"min":0}',
			'order'=>21
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>240,
			'data_type_id'=>14,
			'field'=>'cost_validate',
			'type'=>'number',
			'display_name'=>'驗貨費用',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"min":0}',
			'order'=>22
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>241,
			'data_type_id'=>14,
			'field'=>'cost_service',
			'type'=>'number',
			'display_name'=>'服務費用',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"min":0}',
			'order'=>23
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>242,
			'data_type_id'=>14,
			'field'=>'cost_trans',
			'type'=>'number',
			'display_name'=>'車資費用',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"min":0}',
			'order'=>24
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>243,
			'data_type_id'=>14,
			'field'=>'cost_others',
			'type'=>'number',
			'display_name'=>'其他費用',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"min":0}',
			'order'=>25
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>244,
			'data_type_id'=>14,
			'field'=>'deleted_at',
			'type'=>'timestamp',
			'display_name'=>'刪除於',
			'required'=>0,
			'browse'=>0,
			'read'=>0,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>32
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>245,
			'data_type_id'=>14,
			'field'=>'consolidation_belongsto_user_relationship',
			'type'=>'relationship',
			'display_name'=>'所屬使用者',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"model":"App\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"consolidations","pivot":"0","taggable":"0"}',
			'order'=>3
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>246,
			'data_type_id'=>14,
			'field'=>'consolidation_belongsto_order_relationship',
			'type'=>'relationship',
			'display_name'=>'所屬訂單',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{"model":"App\\\\Order","table":"orders","type":"belongsTo","column":"order_id","key":"id","label":"id","pivot_table":"consolidations","pivot":"0","taggable":"0"}',
			'order'=>5
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>247,
			'data_type_id'=>13,
			'field'=>'pay_at',
			'type'=>'timestamp',
			'display_name'=>'付款於',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>15
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>248,
			'data_type_id'=>13,
			'field'=>'pay_from',
			'type'=>'constant dropdown',
			'display_name'=>'付款源頭',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{"key":"pay_sources"}',
			'order'=>16
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>249,
			'data_type_id'=>13,
			'field'=>'pay_pre',
			'type'=>'number',
			'display_name'=>'預付金額',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>17
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>250,
			'data_type_id'=>13,
			'field'=>'pay_after',
			'type'=>'number',
			'display_name'=>'需補費用',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>18
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>251,
			'data_type_id'=>13,
			'field'=>'reply_desc',
			'type'=>'text_area',
			'display_name'=>'說明回覆',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>19
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>252,
			'data_type_id'=>4,
			'field'=>'featured',
			'type'=>'checkbox',
			'display_name'=>'設為精華',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"on":"是","off":"否","default":"off"}',
			'order'=>2
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>253,
			'data_type_id'=>4,
			'field'=>'meta_description',
			'type'=>'text_area',
			'display_name'=>'Meta 描述',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>23
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>254,
			'data_type_id'=>4,
			'field'=>'meta_keywords',
			'type'=>'text',
			'display_name'=>'Meta 關鍵字',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>24
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>255,
			'data_type_id'=>4,
			'field'=>'seo_title',
			'type'=>'text',
			'display_name'=>'SEO 標題',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{}',
			'order'=>22
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>257,
			'data_type_id'=>4,
			'field'=>'status',
			'type'=>'constant dropdown',
			'display_name'=>'上架狀態',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"key":"article_statuses"}',
			'order'=>18
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>258,
			'data_type_id'=>4,
			'field'=>'slug',
			'type'=>'text',
			'display_name'=>'URL別名',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"validation":{"rule":"required","messages":{"required":"請輸入slug"}}}',
			'order'=>10
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>259,
			'data_type_id'=>7,
			'field'=>'handler_id',
			'type'=>'text',
			'display_name'=>'處理者',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>29
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>260,
			'data_type_id'=>7,
			'field'=>'creator_id',
			'type'=>'text',
			'display_name'=>'建立者',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{}',
			'order'=>31
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>261,
			'data_type_id'=>7,
			'field'=>'handleRecord',
			'type'=>'text_area',
			'display_name'=>'處理紀錄',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>0,
			'delete'=>1,
			'details'=>'{}',
			'order'=>34
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>262,
			'data_type_id'=>7,
			'field'=>'status',
			'type'=>'constant dropdown',
			'display_name'=>'聯絡單狀態',
			'required'=>1,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"key":"contact_statuses","default":"unHandled"}',
			'order'=>35
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>264,
			'data_type_id'=>7,
			'field'=>'contact_belongsto_user_relationship_1',
			'type'=>'relationship',
			'display_name'=>'創建者',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{"model":"App\\\\User","table":"users","type":"belongsTo","column":"creator_id","key":"id","label":"name","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>32
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>265,
			'data_type_id'=>7,
			'field'=>'contact_belongsto_user_relationship_2',
			'type'=>'relationship',
			'display_name'=>'處理者',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"model":"App\\\\User","table":"users","type":"belongsTo","column":"handler_id","key":"id","label":"name","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>33
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>266,
			'data_type_id'=>4,
			'field'=>'article_belongsto_user_relationship',
			'type'=>'relationship',
			'display_name'=>'作者',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>0,
			'add'=>0,
			'delete'=>0,
			'details'=>'{"model":"App\\\\User","table":"users","type":"belongsTo","column":"author_id","key":"id","label":"name","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>4
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>267,
			'data_type_id'=>4,
			'field'=>'article_belongsto_cgy_relationship',
			'type'=>'relationship',
			'display_name'=>'文章分類',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"model":"App\\\\Cgy","table":"cgys","type":"belongsTo","column":"cgy_id","key":"id","label":"title","pivot_table":"apply_course","pivot":"0","taggable":"0"}',
			'order'=>7
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>268,
			'data_type_id'=>4,
			'field'=>'images',
			'type'=>'multiple_images',
			'display_name'=>'文章圖片',
			'required'=>0,
			'browse'=>1,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"resize":{"width":"1000","height":null},"quality":"70%","upsize":true,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}]}',
			'order'=>13
			] );


						
			DB::table("data_rows")->insert( [
			'id'=>269,
			'data_type_id'=>4,
			'field'=>'article_belongstomany_tag_relationship',
			'type'=>'relationship',
			'display_name'=>'標籤',
			'required'=>0,
			'browse'=>0,
			'read'=>1,
			'edit'=>1,
			'add'=>1,
			'delete'=>1,
			'details'=>'{"model":"App\\\\Tag","table":"tags","type":"belongsToMany","column":"id","key":"id","label":"title","pivot_table":"article_tag","pivot":"1","taggable":"on"}',
			'order'=>25
			] );
    }
}
