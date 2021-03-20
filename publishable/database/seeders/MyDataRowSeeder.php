<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataRow;

class MyDataRowSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DataRow::truncate();

        DataRow::create([
            'id' => 1,
            'data_type_id' => 1,
            'field' => 'id',
            'type' => 'number',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 1
        ]);



        DataRow::create([
            'id' => 2,
            'data_type_id' => 1,
            'field' => 'name',
            'type' => 'text',
            'display_name' => '名稱',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"required|max:45","messages":{"required":"名稱欄位為必填","max":"名稱欄位最大為 :max."}},"display":{"width":6}}',
            'order' => 2
        ]);



        DataRow::create([
            'id' => 3,
            'data_type_id' => 1,
            'field' => 'email',
            'type' => 'text',
            'display_name' => '電子郵件',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"required|max:45|email","messages":{"required":"電子郵件欄位為必填","max":"電子郵件欄位最大為 :max.","email":"請輸入電子郵件格式"}},"display":{"width":6}}',
            'order' => 6
        ]);



        DataRow::create([
            'id' => 4,
            'data_type_id' => 1,
            'field' => 'password',
            'type' => 'password',
            'display_name' => '密碼',
            'required' => 1,
            'browse' => 0,
            'read' => 0,
            'edit' => 1,
            'add' => 1,
            'delete' => 0,
            'details' => '{"validation":{"rule":"max:15","messages":{"max":"密碼欄位最大為 :max."}},"display":{"width":6}}',
            'order' => 4
        ]);



        DataRow::create([
            'id' => 5,
            'data_type_id' => 1,
            'field' => 'remember_token',
            'type' => 'hidden',
            'display_name' => 'Remember Token',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 11
        ]);



        DataRow::create([
            'id' => 6,
            'data_type_id' => 1,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 12
        ]);



        DataRow::create([
            'id' => 7,
            'data_type_id' => 1,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '變更於',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 13
        ]);



        DataRow::create([
            'id' => 8,
            'data_type_id' => 1,
            'field' => 'avatar',
            'type' => 'image',
            'display_name' => '頭像',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{}',
            'order' => 15
        ]);



        DataRow::create([
            'id' => 9,
            'data_type_id' => 1,
            'field' => 'user_belongsto_role_relationship',
            'type' => 'relationship',
            'display_name' => '角色',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 0,
            'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":"0","taggable":"0"}',
            'order' => 19
        ]);



        DataRow::create([
            'id' => 10,
            'data_type_id' => 1,
            'field' => 'user_belongstomany_role_relationship',
            'type' => 'relationship',
            'display_name' => '附屬角色',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 0,
            'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}',
            'order' => 20
        ]);



        DataRow::create([
            'id' => 12,
            'data_type_id' => 1,
            'field' => 'settings',
            'type' => 'hidden',
            'display_name' => 'Settings',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 21
        ]);



        DataRow::create([
            'id' => 13,
            'data_type_id' => 2,
            'field' => 'id',
            'type' => 'number',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => NULL,
            'order' => 1
        ]);



        DataRow::create([
            'id' => 14,
            'data_type_id' => 2,
            'field' => 'name',
            'type' => 'text',
            'display_name' => '名稱',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => NULL,
            'order' => 2
        ]);



        DataRow::create([
            'id' => 15,
            'data_type_id' => 2,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => NULL,
            'order' => 3
        ]);



        DataRow::create([
            'id' => 16,
            'data_type_id' => 2,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => NULL,
            'order' => 4
        ]);



        DataRow::create([
            'id' => 17,
            'data_type_id' => 3,
            'field' => 'id',
            'type' => 'number',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => NULL,
            'order' => 1
        ]);



        DataRow::create([
            'id' => 18,
            'data_type_id' => 3,
            'field' => 'name',
            'type' => 'text',
            'display_name' => '名稱',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => NULL,
            'order' => 2
        ]);



        DataRow::create([
            'id' => 19,
            'data_type_id' => 3,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => NULL,
            'order' => 3
        ]);



        DataRow::create([
            'id' => 20,
            'data_type_id' => 3,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => NULL,
            'order' => 4
        ]);



        DataRow::create([
            'id' => 21,
            'data_type_id' => 3,
            'field' => 'display_name',
            'type' => 'text',
            'display_name' => '顯示名稱',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => NULL,
            'order' => 5
        ]);



        DataRow::create([
            'id' => 22,
            'data_type_id' => 1,
            'field' => 'role_id',
            'type' => 'text',
            'display_name' => '角色',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 0,
            'delete' => 0,
            'details' => '{"display":{"width":4}}',
            'order' => 18
        ]);



        DataRow::create([
            'id' => 23,
            'data_type_id' => 4,
            'field' => 'id',
            'type' => 'text',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 1
        ]);



        DataRow::create([
            'id' => 26,
            'data_type_id' => 4,
            'field' => 'title',
            'type' => 'text',
            'display_name' => '標題',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"required|max:40","messages":{"required":"標題欄位為必填","max":"標題欄位最大為 :max."}}}',
            'order' => 9
        ]);



        DataRow::create([
            'id' => 30,
            'data_type_id' => 4,
            'field' => 'content_small',
            'type' => 'text_area',
            'display_name' => '短文',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"required|max:80","messages":{"required":"請輸入短文","max":"短文欄位最大為 :max."}}}',
            'order' => 15
        ]);



        DataRow::create([
            'id' => 31,
            'data_type_id' => 4,
            'field' => 'content',
            'type' => 'rich_text_box',
            'display_name' => '全文',
            'required' => 1,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{}',
            'order' => 14
        ]);



        DataRow::create([
            'id' => 32,
            'data_type_id' => 4,
            'field' => 'attachment_names',
            'type' => 'hidden',
            'display_name' => '附件名稱',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"validation":{"rule":"max:200","messages":{"max":"附件名稱欄位最大為 :max."}}}',
            'order' => 16
        ]);



        DataRow::create([
            'id' => 33,
            'data_type_id' => 4,
            'field' => 'attachment_paths',
            'type' => 'file',
            'display_name' => '附件路徑',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:500","messages":{"max":"附件路徑欄位最大為 :max."}}}',
            'order' => 17
        ]);



        DataRow::create([
            'id' => 34,
            'data_type_id' => 4,
            'field' => 'sort',
            'type' => 'number',
            'display_name' => '排序',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"description":"由小到大排序","validation":{"rule":"required"},"default":0}',
            'order' => 19
        ]);



        DataRow::create([
            'id' => 36,
            'data_type_id' => 4,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 20
        ]);



        DataRow::create([
            'id' => 37,
            'data_type_id' => 4,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '變更於',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 21
        ]);



        DataRow::create([
            'id' => 38,
            'data_type_id' => 5,
            'field' => 'id',
            'type' => 'text',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 1
        ]);



        DataRow::create([
            'id' => 39,
            'data_type_id' => 5,
            'field' => 'parent_id',
            'type' => 'text',
            'display_name' => '父分類ID',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 2
        ]);



        DataRow::create([
            'id' => 40,
            'data_type_id' => 5,
            'field' => 'title',
            'type' => 'text',
            'display_name' => '標題',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"required|max:100","messages":{"required":"標題欄位為必填","max":"標題欄位最大為 :max."}},"display":{"width":8}}',
            'order' => 4
        ]);



        DataRow::create([
            'id' => 41,
            'data_type_id' => 5,
            'field' => 'pic',
            'type' => 'media_picker',
            'display_name' => '圖片',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{
 "inVisibleRoles":
 "admin",
 "max":1,
 "min":0,
 "show_as_images":true,
 "show_folders":true,
 "show_toolbar":true,
 "allow_upload":true,
 "allow_move":true,
 "allow_delete":true,
 "allow_create_folder":true,
 "allow_rename":true,
 "allow_crop":true,
 "allowed":[],
 "base_path":"cgys"
}',
            'order' => 5
        ]);



        DataRow::create([
            'id' => 42,
            'data_type_id' => 5,
            'field' => 'desc',
            'type' => 'text_area',
            'display_name' => '描述',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{
 "validation":{
     "rule":"max:500",
     "messages":{
         "max":"描述欄位最大為 :max."
     }
 }
}',
            'order' => 6
        ]);



        DataRow::create([
            'id' => 43,
            'data_type_id' => 5,
            'field' => 'enabled',
            'type' => 'checkbox',
            'display_name' => '啟用',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{
 "on":"打開",
 "off":"關閉",
 "default":"on",
 "display":{
     "width":4
 }
}',
            'order' => 7
        ]);



        DataRow::create([
            'id' => 44,
            'data_type_id' => 5,
            'field' => 'sort',
            'type' => 'number',
            'display_name' => '排序',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{
 "description":"從小排到大",
 "default":0,
 "display":{
     "width":4
 }
}',
            'order' => 8
        ]);



        DataRow::create([
            'id' => 45,
            'data_type_id' => 5,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 9
        ]);



        DataRow::create([
            'id' => 46,
            'data_type_id' => 5,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '更新於',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 10
        ]);



        DataRow::create([
            'id' => 47,
            'data_type_id' => 6,
            'field' => 'id',
            'type' => 'text',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 1
        ]);



        DataRow::create([
            'id' => 48,
            'data_type_id' => 6,
            'field' => 'article_id',
            'type' => 'text',
            'display_name' => '文章ID',
            'required' => 1,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 4
        ]);



        DataRow::create([
            'id' => 49,
            'data_type_id' => 6,
            'field' => 'name',
            'type' => 'text',
            'display_name' => '留言者姓名',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 6
        ]);



        DataRow::create([
            'id' => 50,
            'data_type_id' => 6,
            'field' => 'email',
            'type' => 'text',
            'display_name' => '留言者Email',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 7
        ]);



        DataRow::create([
            'id' => 51,
            'data_type_id' => 6,
            'field' => 'website',
            'type' => 'text',
            'display_name' => '留言者網站',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 8
        ]);



        DataRow::create([
            'id' => 52,
            'data_type_id' => 6,
            'field' => 'user_id',
            'type' => 'text',
            'display_name' => '留言者ID',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 2
        ]);



        DataRow::create([
            'id' => 53,
            'data_type_id' => 6,
            'field' => 'content',
            'type' => 'text_area',
            'display_name' => '內容',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 9
        ]);



        DataRow::create([
            'id' => 54,
            'data_type_id' => 6,
            'field' => 'reply_to',
            'type' => 'text',
            'display_name' => '回應文章ID',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 5
        ]);



        DataRow::create([
            'id' => 55,
            'data_type_id' => 6,
            'field' => 'sort',
            'type' => 'number',
            'display_name' => '排序',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"description":"從小排到大"}',
            'order' => 10
        ]);



        DataRow::create([
            'id' => 56,
            'data_type_id' => 6,
            'field' => 'enabled',
            'type' => 'checkbox',
            'display_name' => '啟用',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"on":"打開","off":"關閉","default":"on"}',
            'order' => 11
        ]);



        DataRow::create([
            'id' => 57,
            'data_type_id' => 6,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 12
        ]);



        DataRow::create([
            'id' => 58,
            'data_type_id' => 6,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '更新於',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 13
        ]);



        DataRow::create([
            'id' => 59,
            'data_type_id' => 7,
            'field' => 'id',
            'type' => 'text',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 1
        ]);



        DataRow::create([
            'id' => 60,
            'data_type_id' => 7,
            'field' => 'name',
            'type' => 'text',
            'display_name' => '姓名',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"required|max:20","messages":{"required":"姓名欄位為必填","max":"姓名欄位最大為 :max."}},"display":{"width":4}}',
            'order' => 4
        ]);



        DataRow::create([
            'id' => 61,
            'data_type_id' => 7,
            'field' => 'mobile',
            'type' => 'text',
            'display_name' => '手機號碼',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"required|max:20","messages":{"required":"手機號碼欄位為必填","max":"手機號碼欄位最大為 :max."}},"display":{"width":4}}',
            'order' => 5
        ]);



        DataRow::create([
            'id' => 62,
            'data_type_id' => 7,
            'field' => 'subject',
            'type' => 'text',
            'display_name' => '主旨',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 1,
            'delete' => 0,
            'details' => '{"validation":{"rule":"required|max:100","messages":{"required":"主旨欄位為必填","max":"主旨欄位最大為 :max."}}}',
            'order' => 7
        ]);



        DataRow::create([
            'id' => 63,
            'data_type_id' => 7,
            'field' => 'mode',
            'type' => 'hidden',
            'display_name' => '模式',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 8
        ]);



        DataRow::create([
            'id' => 64,
            'data_type_id' => 7,
            'field' => 'message',
            'type' => 'text_area',
            'display_name' => '訊息',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:500","messages":{"max":"訊息欄位最大為 :max."}}}',
            'order' => 9
        ]);



        DataRow::create([
            'id' => 65,
            'data_type_id' => 7,
            'field' => 'service',
            'type' => 'constant dropdown',
            'display_name' => '所需服務',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"key":"services"}',
            'order' => 10
        ]);



        DataRow::create([
            'id' => 66,
            'data_type_id' => 7,
            'field' => 'email',
            'type' => 'text',
            'display_name' => '電子郵箱',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:100","messages":{"max":"電子郵箱欄位最大為 :max."}},"display":{"width":4}}',
            'order' => 6
        ]);



        DataRow::create([
            'id' => 74,
            'data_type_id' => 7,
            'field' => 'source',
            'type' => 'constant dropdown',
            'display_name' => '流量來源',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"key":"sources"}',
            'order' => 14
        ]);



        DataRow::create([
            'id' => 84,
            'data_type_id' => 7,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 28
        ]);



        DataRow::create([
            'id' => 85,
            'data_type_id' => 7,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '變更於',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 30
        ]);



        DataRow::create([
            'id' => 86,
            'data_type_id' => 7,
            'field' => 'partner_id',
            'type' => 'text',
            'display_name' => '合作廠商ID',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 2
        ]);



        DataRow::create([
            'id' => 87,
            'data_type_id' => 8,
            'field' => 'id',
            'type' => 'text',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 1
        ]);



        DataRow::create([
            'id' => 88,
            'data_type_id' => 8,
            'field' => 'page',
            'type' => 'constant dropdown',
            'display_name' => '頁面',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"key":"pages","display":{"id":"page","width":4}}',
            'order' => 7
        ]);



        DataRow::create([
            'id' => 89,
            'data_type_id' => 8,
            'field' => 'mode',
            'type' => 'constant dropdown',
            'display_name' => '模式',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"key":"element_modes","display":{"width":4,"id":"mode"}}',
            'order' => 6
        ]);



        DataRow::create([
            'id' => 90,
            'data_type_id' => 8,
            'field' => 'title',
            'type' => 'text',
            'display_name' => '標題',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"required|max:80","messages":{"required":"標題欄位為必填","max":"標題欄位最大為 :max."}}}',
            'order' => 4
        ]);



        DataRow::create([
            'id' => 91,
            'data_type_id' => 8,
            'field' => 'position',
            'type' => 'text',
            'display_name' => '位置',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"width":4,"id":"position"},"validation":{"rule":"required|max:20","messages":{"required":"位置欄位為必填","max":"位置欄位最大為 :max."}}}',
            'order' => 8
        ]);

        DataRow::create([
            'id' => 93,
            'data_type_id' => 8,
            'field' => 'icon',
            'type' => 'text',
            'display_name' => '圖示',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"width":6,"id":"icon"},"validation":{"rule":"max:40","messages":{"max":"ICON欄位最大為 :max."}}}',
            'order' => 10
        ]);



        DataRow::create([
            'id' => 94,
            'data_type_id' => 8,
            'field' => 'subtitle',
            'type' => 'text',
            'display_name' => '副標題',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:80","messages":{"max":"副標題欄位最大為 :max."}}}',
            'order' => 5
        ]);



        DataRow::create([
            'id' => 95,
            'data_type_id' => 8,
            'field' => 'content',
            'type' => 'text_area',
            'display_name' => '內容',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"id":"content"},"validation":{"rule":"max:2000","messages":{"max":"內容欄位最大為 :max."}}}',
            'order' => 20
        ]);



        DataRow::create([
            'id' => 96,
            'data_type_id' => 8,
            'field' => 'url',
            'type' => 'text',
            'display_name' => '網址',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"id":"url"},"validation":{"rule":"max:255","messages":{"max":"網址欄位最大為 :max."}}}',
            'order' => 11
        ]);



        DataRow::create([
            'id' => 97,
            'data_type_id' => 8,
            'field' => 'url_txt',
            'type' => 'text',
            'display_name' => '網址文字',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"id":"url_txt"},"validation":{"rule":"max:100","messages":{"max":"網址文字欄位最大為 :max."}}}',
            'order' => 12
        ]);



        DataRow::create([
            'id' => 98,
            'data_type_id' => 8,
            'field' => 'pic',
            'type' => 'media_picker',
            'display_name' => '圖片',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"max":1,"min":0,"show_as_images":true,"show_folders":true,"show_toolbar":true,"allow_upload":true,"allow_move":true,"allow_delete":true,"allow_create_folder":true,"allow_rename":true,"allow_crop":true,"allowed":[],"base_path":"/","display":{"id":"pic"}}',
            'order' => 13
        ]);



        DataRow::create([
            'id' => 99,
            'data_type_id' => 8,
            'field' => 'video',
            'type' => 'text',
            'display_name' => '影片網址',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"id":"video"},"validation":{"rule":"max:255","messages":{"max":"影片欄位最大為 :max."}}}',
            'order' => 14
        ]);



        DataRow::create([
            'id' => 100,
            'data_type_id' => 8,
            'field' => 'alt',
            'type' => 'text',
            'display_name' => '替代文字',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"id":"alt"},"validation":{"rule":"max:100","messages":{"max":"替代文字欄位最大為 :max."}}}',
            'order' => 15
        ]);



        DataRow::create([
            'id' => 101,
            'data_type_id' => 8,
            'field' => 'title_pos',
            'type' => 'constant dropdown',
            'display_name' => '標題位置',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"key":"titlePoses","display":{"width":4,"id":"title_pos"}}',
            'order' => 16
        ]);



        DataRow::create([
            'id' => 102,
            'data_type_id' => 8,
            'field' => 'q_mode',
            'type' => 'tag dropdown',
            'display_name' => 'Q&A標籤',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"type":"qna","display":{"width":6,"id":"q_mode"}}',
            'order' => 17
        ]);



        DataRow::create([
            'id' => 103,
            'data_type_id' => 8,
            'field' => 'i_mode',
            'type' => 'hidden',
            'display_name' => '資訊標籤',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"type":"i_mode","display":{"width":6,"id":"i_mode"}}',
            'order' => 19
        ]);



        DataRow::create([
            'id' => 104,
            'data_type_id' => 8,
            'field' => 'updater_id',
            'type' => 'text',
            'display_name' => '更新者ID',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 2
        ]);



        DataRow::create([
            'id' => 105,
            'data_type_id' => 8,
            'field' => 'sort',
            'type' => 'number',
            'display_name' => '排序',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"description":"由小到大排序","display":{"width":6,"id":"sort"},"validation":{"rule":"required"},"default":0}',
            'order' => 21
        ]);



        DataRow::create([
            'id' => 106,
            'data_type_id' => 8,
            'field' => 'enabled',
            'type' => 'checkbox',
            'display_name' => '啟用',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"on":"開啟","off":"關閉","default":"on","display":{"width":6,"id":"enabled"}}',
            'order' => 22
        ]);



        DataRow::create([
            'id' => 107,
            'data_type_id' => 8,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 24
        ]);



        DataRow::create([
            'id' => 108,
            'data_type_id' => 8,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '更新於',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 25
        ]);



        DataRow::create([
            'id' => 109,
            'data_type_id' => 8,
            'field' => 'price',
            'type' => 'number',
            'display_name' => '價格',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"width":6,"id":"price"}}',
            'order' => 26
        ]);



        DataRow::create([
            'id' => 110,
            'data_type_id' => 8,
            'field' => 'isBestPrice',
            'type' => 'checkbox',
            'display_name' => '最優價格',
            'required' => 1,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"on":"是","off":"否","default":"off","display":{"width":6,"id":"isBestPrice"}}',
            'order' => 28
        ]);



        DataRow::create([
            'id' => 111,
            'data_type_id' => 8,
            'field' => 'priceUnit',
            'type' => 'text',
            'display_name' => '價格單位',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"width":6,"id":"priceUnit"},"validation":{"rule":"max:5","messages":{"max":"價格單位欄位最大為 :max."}}}',
            'order' => 27
        ]);



        DataRow::create([
            'id' => 114,
            'data_type_id' => 8,
            'field' => 'currency',
            'type' => 'text',
            'display_name' => '貨幣',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"width":4,"id":"currency"},"validation":{"rule":"max:5","messages":{"max":"貨幣欄位最大為 :max."}}}',
            'order' => 29
        ]);



        DataRow::create([
            'id' => 115,
            'data_type_id' => 8,
            'field' => 'animation',
            'type' => 'constant dropdown',
            'display_name' => '動畫',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"key":"animStyles","display":{"width":6,"id":"animation"}}',
            'order' => 32
        ]);



        DataRow::create([
            'id' => 116,
            'data_type_id' => 8,
            'field' => 'animationDelay',
            'type' => 'number',
            'display_name' => '動畫延遲',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"description":"單位是微秒","display":{"width":6,"id":"animationDelay"}}',
            'order' => 33
        ]);



        DataRow::create([
            'id' => 117,
            'data_type_id' => 9,
            'field' => 'id',
            'type' => 'hidden',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 1
        ]);



        DataRow::create([
            'id' => 118,
            'data_type_id' => 9,
            'field' => 'title',
            'type' => 'text',
            'display_name' => '標題',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"required|max:40","messages":{"required":"標題欄位為必填","max":"標題欄位最大為 :max."}}}',
            'order' => 8
        ]);



        DataRow::create([
            'id' => 129,
            'data_type_id' => 9,
            'field' => 'sort',
            'type' => 'number',
            'display_name' => '排序',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"description":"由小排到大"}',
            'order' => 12
        ]);



        DataRow::create([
            'id' => 130,
            'data_type_id' => 9,
            'field' => 'enabled',
            'type' => 'checkbox',
            'display_name' => '啟用',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"on":"開啟","off":"關閉","default":"on"}',
            'order' => 13
        ]);



        DataRow::create([
            'id' => 132,
            'data_type_id' => 9,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 0,
            'delete' => 1,
            'details' => '{}',
            'order' => 14
        ]);



        DataRow::create([
            'id' => 133,
            'data_type_id' => 9,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '更新於',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 15
        ]);



        DataRow::create([
            'id' => 134,
            'data_type_id' => 10,
            'field' => 'id',
            'type' => 'text',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 1
        ]);



        DataRow::create([
            'id' => 135,
            'data_type_id' => 10,
            'field' => 'name',
            'type' => 'text',
            'display_name' => '姓名',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 0,
            'details' => '{"validation":{"rule":"required|max:40","messages":{"required":"姓名欄位為必填","max":"姓名欄位最大為 :max."}}}',
            'order' => 2
        ]);



        DataRow::create([
            'id' => 136,
            'data_type_id' => 10,
            'field' => 'tel',
            'type' => 'text',
            'display_name' => '電話',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 0,
            'details' => '{"validation":{"rule":"max:40","messages":{"max":"電話欄位最大為 :max."}}}',
            'order' => 3
        ]);



        DataRow::create([
            'id' => 137,
            'data_type_id' => 10,
            'field' => 'secret',
            'type' => 'text',
            'display_name' => '口令',
            'required' => 1,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 0,
            'details' => '{"validation":{"rule":"required|max:40","messages":{"required":"口令欄位為必填","max":"口令欄位最大為 :max."}}}',
            'order' => 4
        ]);



        DataRow::create([
            'id' => 138,
            'data_type_id' => 10,
            'field' => 'email',
            'type' => 'text',
            'display_name' => 'Email',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 0,
            'details' => '{"validation":{"rule":"max:100|email","messages":{"max":"Email欄位最大為 :max.","email":"請輸入Email格式"}}}',
            'order' => 5
        ]);



        DataRow::create([
            'id' => 139,
            'data_type_id' => 10,
            'field' => 'website',
            'type' => 'text',
            'display_name' => '網址',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 0,
            'details' => '{"validation":{"rule":"max:100","messages":{"max":"網址欄位最大為 :max."}}}',
            'order' => 6
        ]);



        DataRow::create([
            'id' => 140,
            'data_type_id' => 10,
            'field' => 'address',
            'type' => 'text',
            'display_name' => '地址',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 0,
            'details' => '{"validation":{"rule":"max:100","messages":{"max":"地址欄位最大為 :max."}}}',
            'order' => 7
        ]);



        DataRow::create([
            'id' => 141,
            'data_type_id' => 10,
            'field' => 'discount',
            'type' => 'number',
            'display_name' => '折價',
            'required' => 1,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 0,
            'details' => '{"min":0}',
            'order' => 8
        ]);



        DataRow::create([
            'id' => 142,
            'data_type_id' => 10,
            'field' => 'sort',
            'type' => 'number',
            'display_name' => '排序',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 0,
            'details' => '{}',
            'order' => 9
        ]);



        DataRow::create([
            'id' => 143,
            'data_type_id' => 10,
            'field' => 'enabled',
            'type' => 'checkbox',
            'display_name' => '啟用',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"on":"啟用","off":"關閉","default":"on"}',
            'order' => 10
        ]);



        DataRow::create([
            'id' => 144,
            'data_type_id' => 10,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 11
        ]);



        DataRow::create([
            'id' => 145,
            'data_type_id' => 10,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '更新於',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 12
        ]);



        DataRow::create([
            'id' => 146,
            'data_type_id' => 11,
            'field' => 'id',
            'type' => 'text',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 1
        ]);



        DataRow::create([
            'id' => 147,
            'data_type_id' => 11,
            'field' => 'user_id',
            'type' => 'text',
            'display_name' => '使用者',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{}',
            'order' => 2
        ]);



        DataRow::create([
            'id' => 148,
            'data_type_id' => 11,
            'field' => 'serial',
            'type' => 'text',
            'display_name' => '序號',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"required|max:10","messages":{"required":"序號欄位為必填","max":"序號欄位最大為 :max."}}}',
            'order' => 5
        ]);



        DataRow::create([
            'id' => 149,
            'data_type_id' => 11,
            'field' => 'mode',
            'type' => 'number',
            'display_name' => '優惠模式',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"description":"大於100為折價，小於100為折數，如90為打九折"}',
            'order' => 6
        ]);



        DataRow::create([
            'id' => 150,
            'data_type_id' => 11,
            'field' => 'isSent',
            'type' => 'checkbox',
            'display_name' => '寄出否',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"on":"已寄出","off":"尚未","default":"off"}',
            'order' => 7
        ]);



        DataRow::create([
            'id' => 151,
            'data_type_id' => 11,
            'field' => 'isUsed',
            'type' => 'checkbox',
            'display_name' => '使用否',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"on":"已使用","off":"尚未","default":"off"}',
            'order' => 8
        ]);



        DataRow::create([
            'id' => 152,
            'data_type_id' => 11,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 0,
            'delete' => 1,
            'details' => '{}',
            'order' => 9
        ]);



        DataRow::create([
            'id' => 153,
            'data_type_id' => 11,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '更新於',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 10
        ]);



        DataRow::create([
            'id' => 154,
            'data_type_id' => 12,
            'field' => 'id',
            'type' => 'text',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 1
        ]);



        DataRow::create([
            'id' => 155,
            'data_type_id' => 12,
            'field' => 'title',
            'type' => 'text',
            'display_name' => '標題',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"required|max:40","messages":{"required":"標題欄位為必填","max":"標題欄位最大為 :max."}}}',
            'order' => 2
        ]);



        DataRow::create([
            'id' => 156,
            'data_type_id' => 12,
            'field' => 'type',
            'type' => 'text',
            'display_name' => '類型',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"default":"def","validation":{"rule":"max:30","messages":{"max":"類型欄位最大為 :max."}}}',
            'order' => 3
        ]);



        DataRow::create([
            'id' => 157,
            'data_type_id' => 12,
            'field' => 'mode',
            'type' => 'hidden',
            'display_name' => 'Mode',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 4
        ]);



        DataRow::create([
            'id' => 158,
            'data_type_id' => 12,
            'field' => 'link',
            'type' => 'text',
            'display_name' => '連結',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"default":"#","validation":{"rule":"required|max:255","messages":{"required":"連結欄位為必填","max":"連結欄位最大為 :max."}}}',
            'order' => 5
        ]);



        DataRow::create([
            'id' => 159,
            'data_type_id' => 12,
            'field' => 'sort',
            'type' => 'number',
            'display_name' => '排序',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"description":"從小排到大","default":0}',
            'order' => 6
        ]);



        DataRow::create([
            'id' => 160,
            'data_type_id' => 12,
            'field' => 'enabled',
            'type' => 'checkbox',
            'display_name' => '啟用',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"on":"打開","off":"關閉","default":"on"}',
            'order' => 7
        ]);



        DataRow::create([
            'id' => 161,
            'data_type_id' => 12,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 8
        ]);



        DataRow::create([
            'id' => 162,
            'data_type_id' => 12,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '更新於',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 9
        ]);



        DataRow::create([
            'id' => 163,
            'data_type_id' => 1,
            'field' => 'username',
            'type' => 'text',
            'display_name' => '帳號',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"unique:users|required|max:45","messages":{"unique":"帳號欄位的內容已經用過了","required":"帳號欄位為必填","max":"帳號欄位最大為 :max."}},"display":{"width":6}}',
            'order' => 3
        ]);



        DataRow::create([
            'id' => 164,
            'data_type_id' => 1,
            'field' => 'nickname',
            'type' => 'text',
            'display_name' => '暱稱',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:45","messages":{"max":"暱稱欄位最大為 :max."}},"display":{"width":4}}',
            'order' => 14
        ]);



        DataRow::create([
            'id' => 165,
            'data_type_id' => 1,
            'field' => 'title',
            'type' => 'text',
            'display_name' => '頭銜',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:45","messages":{"max":"頭銜欄位最大為 :max."}},"display":{"width":4}}',
            'order' => 25
        ]);



        DataRow::create([
            'id' => 166,
            'data_type_id' => 1,
            'field' => 'birthday',
            'type' => 'date',
            'display_name' => '生日',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"width":4}}',
            'order' => 16
        ]);



        DataRow::create([
            'id' => 167,
            'data_type_id' => 1,
            'field' => 'organization',
            'type' => 'text',
            'display_name' => '組織',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:40","messages":{"max":"組織欄位最大為 :max."}},"display":{"width":4}}',
            'order' => 24
        ]);



        DataRow::create([
            'id' => 169,
            'data_type_id' => 1,
            'field' => 'tel',
            'type' => 'text',
            'display_name' => '電話',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:20","messages":{"max":"電話欄位最大為 :max."}},"display":{"width":4}}',
            'order' => 22
        ]);



        DataRow::create([
            'id' => 170,
            'data_type_id' => 1,
            'field' => 'mobile',
            'type' => 'text',
            'display_name' => '手機號碼',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:20","messages":{"max":"手機號碼欄位最大為 :max."}},"display":{"width":4}}',
            'order' => 23
        ]);



        DataRow::create([
            'id' => 171,
            'data_type_id' => 1,
            'field' => 'fb_id',
            'type' => 'text',
            'display_name' => '臉書ID',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:60","messages":{"max":"臉書ID欄位最大為 :max."}},"display":{"width":4}}',
            'order' => 26
        ]);



        DataRow::create([
            'id' => 172,
            'data_type_id' => 1,
            'field' => 'first_name',
            'type' => 'hidden',
            'display_name' => '姓',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"validation":{"rule":"max:45","messages":{"max":"姓欄位最大為 :max."}},"display":{"width":4}}',
            'order' => 27
        ]);



        DataRow::create([
            'id' => 173,
            'data_type_id' => 1,
            'field' => 'last_name',
            'type' => 'hidden',
            'display_name' => '名',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"validation":{"rule":"max:45","messages":{"max":"名欄位最大為 :max."}},"display":{"width":4}}',
            'order' => 28
        ]);



        DataRow::create([
            'id' => 174,
            'data_type_id' => 1,
            'field' => 'pic',
            'type' => 'hidden',
            'display_name' => 'Pic',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 29
        ]);



        DataRow::create([
            'id' => 175,
            'data_type_id' => 1,
            'field' => 'post_id',
            'type' => 'text',
            'display_name' => '郵遞區號',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:5","messages":{"max":"郵遞區號欄位最大為 :max."}},"display":{"width":4}}',
            'order' => 30
        ]);



        DataRow::create([
            'id' => 176,
            'data_type_id' => 1,
            'field' => 'address',
            'type' => 'text',
            'display_name' => '地址',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:100","messages":{"max":"地址欄位最大為 :max."}},"display":{"width":8}}',
            'order' => 31
        ]);



        DataRow::create([
            'id' => 177,
            'data_type_id' => 1,
            'field' => 'desc',
            'type' => 'text_area',
            'display_name' => '說明',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:1000","messages":{"max":"說明欄位最大為 :max."}}}',
            'order' => 32
        ]);



        DataRow::create([
            'id' => 178,
            'data_type_id' => 1,
            'field' => 'enabled',
            'type' => 'checkbox',
            'display_name' => '啟用',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"on":"開啟","off":"關閉","checked":"on","display":{"width":12}}',
            'order' => 33
        ]);



        DataRow::create([
            'id' => 179,
            'data_type_id' => 1,
            'field' => 'socialLinks',
            'type' => 'hidden',
            'display_name' => '社群連結',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"display":{"width":4}}',
            'order' => 34
        ]);



        DataRow::create([
            'id' => 182,
            'data_type_id' => 1,
            'field' => 'provider',
            'type' => 'hidden',
            'display_name' => '登入平台',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 1,
            'details' => '{"display":{"width":4}}',
            'order' => 35
        ]);



        DataRow::create([
            'id' => 183,
            'data_type_id' => 1,
            'field' => 'provider_id',
            'type' => 'hidden',
            'display_name' => '登入平台ID',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 1,
            'details' => '{"display":{"width":4}}',
            'order' => 36
        ]);



        DataRow::create([
            'id' => 184,
            'data_type_id' => 1,
            'field' => 'partner_id',
            'type' => 'text',
            'display_name' => '合作夥伴ID',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 0,
            'delete' => 0,
            'details' => '{"display":{"width":4}}',
            'order' => 9
        ]);



        DataRow::create([
            'id' => 185,
            'data_type_id' => 1,
            'field' => 'user_belongsto_user_relationship',
            'type' => 'relationship',
            'display_name' => '親屬',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"width":4},"model":"App\\\\Models\\\\User","table":"users","type":"belongsTo","column":"id","key":"id","label":"name","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 5
        ]);



        DataRow::create([
            'id' => 186,
            'data_type_id' => 1,
            'field' => 'user_belongsto_partner_relationship',
            'type' => 'relationship',
            'display_name' => '合作夥伴',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"width":4},"model":"App\\\\Models\\\\Partner","table":"partners","type":"belongsTo","column":"partner_id","key":"id","label":"name","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 10
        ]);



        DataRow::create([
            'id' => 187,
            'data_type_id' => 4,
            'field' => 'cgy_id',
            'type' => 'text',
            'display_name' => '文章分類',
            'required' => 1,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 0,
            'details' => '{}',
            'order' => 6
        ]);



        DataRow::create([
            'id' => 189,
            'data_type_id' => 4,
            'field' => 'author_id',
            'type' => 'text',
            'display_name' => '作者',
            'required' => 1,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 3
        ]);



        DataRow::create([
            'id' => 190,
            'data_type_id' => 7,
            'field' => 'contact_belongsto_user_relationship',
            'type' => 'relationship',
            'display_name' => '合作廠商',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"model":"App\\\\Models\\\\Partner","table":"partners","type":"belongsTo","column":"partner_id","key":"id","label":"name","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 3
        ]);



        DataRow::create([
            'id' => 191,
            'data_type_id' => 8,
            'field' => 'element_belongsto_user_relationship',
            'type' => 'relationship',
            'display_name' => '更新者ID',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"model":"App\\\\User","table":"users","type":"belongsTo","column":"updater_id","key":"id","label":"name","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 3
        ]);



        DataRow::create([
            'id' => 192,
            'data_type_id' => 9,
            'field' => 'portfolio_belongsto_cgy_relationship',
            'type' => 'relationship',
            'display_name' => '分類ID',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"model":"App\\\\Models\\\\Cgy","table":"cgys","type":"belongsTo","column":"cgy_id","key":"id","label":"title","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 3
        ]);



        DataRow::create([
            'id' => 193,
            'data_type_id' => 9,
            'field' => 'cgy_id',
            'type' => 'text',
            'display_name' => '分類ID',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{}',
            'order' => 2
        ]);



        DataRow::create([
            'id' => 194,
            'data_type_id' => 5,
            'field' => 'cgy_belongsto_cgy_relationship',
            'type' => 'relationship',
            'display_name' => '父分類',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{
 "display":{
     "width":4
 },
 "model":"App\\\\Models\\\\Cgy",
 "table":"cgys",
 "type":"belongsTo",
 "column":"parent_id",
 "key":"id",
 "label":"title",
 "pivot_table":"article_tag",
 "pivot":"0",
 "taggable":"0"
}',
            'order' => 3
        ]);



        DataRow::create([
            'id' => 195,
            'data_type_id' => 6,
            'field' => 'comment_belongsto_user_relationship',
            'type' => 'relationship',
            'display_name' => '留言者',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"model":"App\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 3
        ]);



        DataRow::create([
            'id' => 196,
            'data_type_id' => 6,
            'field' => 'comment_belongsto_article_relationship',
            'type' => 'relationship',
            'display_name' => '文章ID',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"model":"App\\\\Article","table":"articles","type":"belongsTo","column":"article_id","key":"id","label":"title","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 14
        ]);



        DataRow::create([
            'id' => 197,
            'data_type_id' => 6,
            'field' => 'comment_belongsto_article_relationship_1',
            'type' => 'relationship',
            'display_name' => '回應文章ID',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"model":"App\\\\Article","table":"articles","type":"belongsTo","column":"reply_to","key":"id","label":"title","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 15
        ]);



        DataRow::create([
            'id' => 198,
            'data_type_id' => 13,
            'field' => 'id',
            'type' => 'text',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 1
        ]);



        DataRow::create([
            'id' => 199,
            'data_type_id' => 13,
            'field' => 'owner_id',
            'type' => 'text',
            'display_name' => '擁有者',
            'required' => 1,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 2
        ]);



        DataRow::create([
            'id' => 200,
            'data_type_id' => 13,
            'field' => 'receiver',
            'type' => 'text',
            'display_name' => '收件人',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:10","messages":{"max":"收件人欄位最大為 :max."}}}',
            'order' => 4
        ]);



        DataRow::create([
            'id' => 201,
            'data_type_id' => 13,
            'field' => 'receiverTitle',
            'type' => 'text',
            'display_name' => '收件人抬頭',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:10","messages":{"max":"收件人抬頭欄位最大為 :max."}}}',
            'order' => 5
        ]);



        DataRow::create([
            'id' => 202,
            'data_type_id' => 13,
            'field' => 'receiverMobile',
            'type' => 'text',
            'display_name' => '收件人手機',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:20","messages":{"max":"收件人手機欄位最大為 :max."}}}',
            'order' => 6
        ]);



        DataRow::create([
            'id' => 203,
            'data_type_id' => 13,
            'field' => 'receiverEmail',
            'type' => 'text',
            'display_name' => '收件人Email',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:100","messages":{"max":"收件人Email欄位最大為 :max."}}}',
            'order' => 7
        ]);



        DataRow::create([
            'id' => 204,
            'data_type_id' => 13,
            'field' => 'receiverAddress',
            'type' => 'text',
            'display_name' => '收件地址',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:100","messages":{"max":"收件人地址欄位最大為 :max."}}}',
            'order' => 8
        ]);



        DataRow::create([
            'id' => 205,
            'data_type_id' => 13,
            'field' => 'message',
            'type' => 'text_area',
            'display_name' => '訊息',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:500","messages":{"max":"訊息欄位最大為 :max."}}}',
            'order' => 9
        ]);



        DataRow::create([
            'id' => 206,
            'data_type_id' => 13,
            'field' => 'couponCode',
            'type' => 'text',
            'display_name' => '優惠序號',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:100","messages":{"max":"優惠序號欄位最大為 :max."}}}',
            'order' => 10
        ]);



        DataRow::create([
            'id' => 207,
            'data_type_id' => 13,
            'field' => 'subtotal',
            'type' => 'number',
            'display_name' => '小計',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"min":0}',
            'order' => 11
        ]);



        DataRow::create([
            'id' => 208,
            'data_type_id' => 13,
            'field' => 'shipCost',
            'type' => 'number',
            'display_name' => '運費',
            'required' => 1,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"min":0}',
            'order' => 12
        ]);



        DataRow::create([
            'id' => 209,
            'data_type_id' => 13,
            'field' => 'status',
            'type' => 'constant dropdown',
            'display_name' => '狀態',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"key":"order_statuses"}',
            'order' => 13
        ]);



        DataRow::create([
            'id' => 210,
            'data_type_id' => 13,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 0,
            'delete' => 1,
            'details' => '{}',
            'order' => 14
        ]);



        DataRow::create([
            'id' => 211,
            'data_type_id' => 13,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '更新於',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 20
        ]);



        DataRow::create([
            'id' => 212,
            'data_type_id' => 11,
            'field' => 'serial_belongsto_user_relationship',
            'type' => 'relationship',
            'display_name' => '使用者',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"model":"App\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 3
        ]);



        DataRow::create([
            'id' => 213,
            'data_type_id' => 11,
            'field' => 'type',
            'type' => 'constant dropdown',
            'display_name' => '類型',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"key":"serials_type"}',
            'order' => 4
        ]);



        DataRow::create([
            'id' => 214,
            'data_type_id' => 13,
            'field' => 'order_belongsto_user_relationship',
            'type' => 'relationship',
            'display_name' => '擁有者',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"model":"App\\\\User","table":"users","type":"belongsTo","column":"owner_id","key":"id","label":"name","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 3
        ]);



        DataRow::create([
            'id' => 247,
            'data_type_id' => 13,
            'field' => 'pay_at',
            'type' => 'timestamp',
            'display_name' => '付款於',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{}',
            'order' => 15
        ]);



        DataRow::create([
            'id' => 248,
            'data_type_id' => 13,
            'field' => 'pay_from',
            'type' => 'constant dropdown',
            'display_name' => '付款源頭',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"key":"pay_sources"}',
            'order' => 16
        ]);



        DataRow::create([
            'id' => 249,
            'data_type_id' => 13,
            'field' => 'pay_pre',
            'type' => 'number',
            'display_name' => '預付金額',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"min":0}',
            'order' => 17
        ]);



        DataRow::create([
            'id' => 250,
            'data_type_id' => 13,
            'field' => 'pay_after',
            'type' => 'number',
            'display_name' => '需補費用',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"min":0}',
            'order' => 18
        ]);



        DataRow::create([
            'id' => 251,
            'data_type_id' => 13,
            'field' => 'reply_desc',
            'type' => 'text_area',
            'display_name' => '說明回覆',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:255","messages":{"max":"說明回覆欄位最大為 :max."}}}',
            'order' => 19
        ]);



        DataRow::create([
            'id' => 252,
            'data_type_id' => 4,
            'field' => 'featured',
            'type' => 'checkbox',
            'display_name' => '設為精華',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"on":"是","off":"否","default":"off"}',
            'order' => 2
        ]);



        DataRow::create([
            'id' => 253,
            'data_type_id' => 4,
            'field' => 'meta_description',
            'type' => 'text_area',
            'display_name' => 'Meta 描述',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:255","messages":{"max":"Meta描述欄位最大為 :max."}}}',
            'order' => 23
        ]);



        DataRow::create([
            'id' => 254,
            'data_type_id' => 4,
            'field' => 'meta_keywords',
            'type' => 'text',
            'display_name' => 'Meta 關鍵字',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:255","messages":{"max":"Meta關鍵字欄位最大為 :max."}}}',
            'order' => 24
        ]);



        DataRow::create([
            'id' => 255,
            'data_type_id' => 4,
            'field' => 'seo_title',
            'type' => 'text',
            'display_name' => 'SEO 標題',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:255","messages":{"max":"SEO標題欄位最大為 :max."}}}',
            'order' => 22
        ]);



        DataRow::create([
            'id' => 257,
            'data_type_id' => 4,
            'field' => 'status',
            'type' => 'constant dropdown',
            'display_name' => '上架狀態',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"key":"article_statuses","default":"draft"}',
            'order' => 18
        ]);



        DataRow::create([
            'id' => 258,
            'data_type_id' => 4,
            'field' => 'slug',
            'type' => 'text',
            'display_name' => 'URL別名',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 0,
            'details' => '{"validation":{"rule":"max:255","messages":{"max":"URL別名欄位最大為 :max."}}}',
            'order' => 10
        ]);



        DataRow::create([
            'id' => 259,
            'data_type_id' => 7,
            'field' => 'handler_id',
            'type' => 'text',
            'display_name' => '處理者',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 29
        ]);



        DataRow::create([
            'id' => 260,
            'data_type_id' => 7,
            'field' => 'creator_id',
            'type' => 'text',
            'display_name' => '建立者ID',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 31
        ]);



        DataRow::create([
            'id' => 262,
            'data_type_id' => 7,
            'field' => 'status',
            'type' => 'constant dropdown',
            'display_name' => '聯絡單狀態',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"key":"contact_statuses","default":"unHandled"}',
            'order' => 35
        ]);



        DataRow::create([
            'id' => 264,
            'data_type_id' => 7,
            'field' => 'contact_belongsto_user_relationship_1',
            'type' => 'relationship',
            'display_name' => '建立者',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"model":"App\\\\Models\\\\User","table":"users","type":"belongsTo","column":"creator_id","key":"id","label":"name","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 32
        ]);



        DataRow::create([
            'id' => 265,
            'data_type_id' => 7,
            'field' => 'contact_belongsto_user_relationship_2',
            'type' => 'relationship',
            'display_name' => '處理者',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"model":"App\\\\Models\\\\User","table":"users","type":"belongsTo","column":"handler_id","key":"id","label":"name","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 33
        ]);



        DataRow::create([
            'id' => 266,
            'data_type_id' => 4,
            'field' => 'article_belongsto_user_relationship',
            'type' => 'relationship',
            'display_name' => '作者',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{"model":"App\\\\Models\\\\User","table":"users","type":"belongsTo","column":"author_id","key":"id","label":"name","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 4
        ]);



        DataRow::create([
            'id' => 267,
            'data_type_id' => 4,
            'field' => 'article_belongsto_cgy_relationship',
            'type' => 'relationship',
            'display_name' => '文章分類',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"model":"App\\\\Models\\\\Cgy","table":"cgys","type":"belongsTo","column":"cgy_id","key":"id","label":"title","pivot_table":"article_tag","pivot":"0","taggable":"0"}',
            'order' => 7
        ]);



        DataRow::create([
            'id' => 269,
            'data_type_id' => 4,
            'field' => 'article_belongstomany_tag_relationship',
            'type' => 'relationship',
            'display_name' => '標籤',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"model":"App\\\\Models\\\\Tag","table":"tags","type":"belongsToMany","column":"id","key":"id","label":"title","pivot_table":"article_tag","pivot":"1","taggable":"0"}',
            'order' => 25
        ]);



        DataRow::create([
            'id' => 270,
            'data_type_id' => 8,
            'field' => 'price2',
            'type' => 'text',
            'display_name' => '價格2',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"width":6,"id":"price2"}}',
            'order' => 30
        ]);



        DataRow::create([
            'id' => 271,
            'data_type_id' => 8,
            'field' => 'price2Unit',
            'type' => 'text',
            'display_name' => '價格2單位',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"display":{"width":6,"id":"price2Unit"},"validation":{"rule":"max:5","messages":{"max":"價格2單位欄位最大為 :max."}}}',
            'order' => 31
        ]);



        DataRow::create([
            'id' => 272,
            'data_type_id' => 13,
            'field' => 'type',
            'type' => 'select_dropdown',
            'display_name' => '訂單類型',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"options":{"consolidation":"物流訂單","item":"銷售訂單"}}',
            'order' => 20
        ]);



        DataRow::create([
            'id' => 273,
            'data_type_id' => 13,
            'field' => 'pay_type',
            'type' => 'constant dropdown',
            'display_name' => '付款方式',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 0,
            'delete' => 1,
            'details' => '{"key":"pay_types"}',
            'order' => 21
        ]);



        DataRow::create([
            'id' => 274,
            'data_type_id' => 13,
            'field' => 'trade_no',
            'type' => 'text',
            'display_name' => '交易序號',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 0,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:100","messages":{"max":"交易序號欄位最大為 :max."}}}',
            'order' => 22
        ]);



        DataRow::create([
            'id' => 276,
            'data_type_id' => 15,
            'field' => 'id',
            'type' => 'text',
            'display_name' => 'ID',
            'required' => 1,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 1
        ]);



        DataRow::create([
            'id' => 277,
            'data_type_id' => 15,
            'field' => 'cgy_id',
            'type' => 'text',
            'display_name' => '分類ID',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{}',
            'order' => 2
        ]);



        DataRow::create([
            'id' => 278,
            'data_type_id' => 15,
            'field' => 'title',
            'type' => 'text',
            'display_name' => '標題',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"required|max:50","messages":{"required":"標題欄位為必填","max":"標題欄位最大為 :max."}}}',
            'order' => 3
        ]);



        DataRow::create([
            'id' => 279,
            'data_type_id' => 15,
            'field' => 'pics',
            'type' => 'media_picker',
            'display_name' => '圖片',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"max":3,"min":1,"expanded":false,"show_folders":true,"show_toolbar":true,"allow_upload":true,"allow_move":true,"allow_delete":true,"allow_create_folder":true,"allow_rename":true,"allow_crop":true,"allowed":[],"hide_thumbnails":false,"quality":90,"watermark":{"source":"...","position":"top-left","x":0,"y":0},"base_path":"items"}',
            'order' => 4
        ]);



        DataRow::create([
            'id' => 280,
            'data_type_id' => 15,
            'field' => 'price_og',
            'type' => 'number',
            'display_name' => '原價',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"min":0,"validation":{"rule":"required","messages":{"required":"原價欄位為必填"}}}',
            'order' => 5
        ]);



        DataRow::create([
            'id' => 281,
            'data_type_id' => 15,
            'field' => 'price_new',
            'type' => 'number',
            'display_name' => '現價',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"min":0}',
            'order' => 6
        ]);



        DataRow::create([
            'id' => 282,
            'data_type_id' => 15,
            'field' => 'badge',
            'type' => 'text',
            'display_name' => '標牌文字',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:30","messages":{"max":"標牌文字欄位最大為 :max."}}}',
            'order' => 7
        ]);



        DataRow::create([
            'id' => 283,
            'data_type_id' => 15,
            'field' => 'star',
            'type' => 'number',
            'display_name' => '評價星等',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"min":0,"max":10,"description":"商品評價星等","validation":{"rule":"required","messages":{"required":"評價星等欄位為必填"}}}',
            'order' => 8
        ]);



        DataRow::create([
            'id' => 284,
            'data_type_id' => 15,
            'field' => 'stock',
            'type' => 'number',
            'display_name' => '存貨數量',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"min":0,"validation":{"rule":"required","messages":{"required":"存貨數量欄位為必填"}}}',
            'order' => 9
        ]);



        DataRow::create([
            'id' => 285,
            'data_type_id' => 15,
            'field' => 'desc',
            'type' => 'text',
            'display_name' => '描述',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:400","messages":{"max":"描述欄位最大為 :max."}}}',
            'order' => 10
        ]);



        DataRow::create([
            'id' => 286,
            'data_type_id' => 15,
            'field' => 'chars',
            'type' => 'text',
            'display_name' => '規格',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:300","messages":{"max":"規格欄位最大為 :max."}}}',
            'order' => 11
        ]);



        DataRow::create([
            'id' => 287,
            'data_type_id' => 15,
            'field' => 'sku',
            'type' => 'text',
            'display_name' => 'SKU序號',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:100","messages":{"max":"SKU序號欄位最大為 :max."}}}',
            'order' => 12
        ]);



        DataRow::create([
            'id' => 288,
            'data_type_id' => 15,
            'field' => 'options',
            'type' => 'text',
            'display_name' => '可選項',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"max:500","messages":{"max":"可選項欄位最大為 :max."}}}',
            'order' => 13
        ]);



        DataRow::create([
            'id' => 289,
            'data_type_id' => 15,
            'field' => 'sort',
            'type' => 'text',
            'display_name' => '排序',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"description":"由小到大排序","validation":{"rule":"required"},"default":0}',
            'order' => 14
        ]);



        DataRow::create([
            'id' => 290,
            'data_type_id' => 15,
            'field' => 'enabled',
            'type' => 'checkbox',
            'display_name' => '是否啟用',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"on":"開啟","off":"關閉","default":"on"}',
            'order' => 15
        ]);



        DataRow::create([
            'id' => 291,
            'data_type_id' => 15,
            'field' => 'created_at',
            'type' => 'timestamp',
            'display_name' => '創建於',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 0,
            'delete' => 1,
            'details' => '{}',
            'order' => 16
        ]);



        DataRow::create([
            'id' => 292,
            'data_type_id' => 15,
            'field' => 'updated_at',
            'type' => 'timestamp',
            'display_name' => '更新於',
            'required' => 0,
            'browse' => 0,
            'read' => 0,
            'edit' => 0,
            'add' => 0,
            'delete' => 0,
            'details' => '{}',
            'order' => 17
        ]);



        DataRow::create([
            'id' => 293,
            'data_type_id' => 7,
            'field' => 'tag',
            'type' => 'text',
            'display_name' => 'Tag',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{}',
            'order' => 13
        ]);



        DataRow::create([
            'id' => 294,
            'data_type_id' => 1,
            'field' => 'email_verified_at',
            'type' => 'timestamp',
            'display_name' => '電子郵件驗證',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{}',
            'order' => 7
        ]);



        DataRow::create([
            'id' => 295,
            'data_type_id' => 1,
            'field' => 'gender',
            'type' => 'select_dropdown',
            'display_name' => '性別',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"options":{"male":"男性","female":"女性","neutral":"中性"},"default":"male","display":{"width":4}}',
            'order' => 17
        ]);



        DataRow::create([
            'id' => 296,
            'data_type_id' => 1,
            'field' => 'identify',
            'type' => 'text',
            'display_name' => '身分證字號',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"validation":{"rule":"unique:users|max:15|nullable","messages":{"unique":"此身分證字號已存在","max":"身分證字號欄位最大為 :max."}},"null":"","display":{"width":4}}',
            'order' => 8
        ]);



        DataRow::create([
            'id' => 297,
            'data_type_id' => 5,
            'field' => 'type',
            'type' => 'text',
            'display_name' => 'Type',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{
 "display":{
     "width":4
 }
}',
            'order' => 8
        ]);



        DataRow::create([
            'id' => 299,
            'data_type_id' => 8,
            'field' => 'title_color',
            'type' => 'constant dropdown',
            'display_name' => '標題顏色',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"key":"colors","display":{"width":4,"id":"colors"}}',
            'order' => 18
        ]);



        DataRow::create([
            'id' => 300,
            'data_type_id' => 8,
            'field' => 'isShowTitle',
            'type' => 'checkbox',
            'display_name' => '是否顯示標題',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"on":"開啟","off":"關閉","default":"on","display":{"width":6,"id":"enabled"}}',
            'order' => 23
        ]);



        DataRow::create([
            'id' => 301,
            'data_type_id' => 15,
            'field' => 'item_belongsto_cgy_relationship',
            'type' => 'relationship',
            'display_name' => 'cgys',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"model":"App\\\\Models\\\\Cgy","table":"cgys","type":"belongsTo","column":"cgy_id","key":"id","label":"title","pivot_table":"article_tag","pivot":"0","taggable":null}',
            'order' => 18
        ]);



        DataRow::create([
            'id' => 303,
            'data_type_id' => 9,
            'field' => 'client',
            'type' => 'text',
            'display_name' => '客戶名',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{}',
            'order' => 5
        ]);



        DataRow::create([
            'id' => 304,
            'data_type_id' => 9,
            'field' => 'project_date',
            'type' => 'date',
            'display_name' => '案子日期',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{}',
            'order' => 7
        ]);



        DataRow::create([
            'id' => 305,
            'data_type_id' => 9,
            'field' => 'url',
            'type' => 'text',
            'display_name' => '案子網址',
            'required' => 0,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{}',
            'order' => 9
        ]);



        DataRow::create([
            'id' => 306,
            'data_type_id' => 9,
            'field' => 'detail_title',
            'type' => 'text',
            'display_name' => '細節標題',
            'required' => 1,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{}',
            'order' => 10
        ]);



        DataRow::create([
            'id' => 307,
            'data_type_id' => 9,
            'field' => 'content',
            'type' => 'text_area',
            'display_name' => '細節內容',
            'required' => 1,
            'browse' => 0,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{}',
            'order' => 11
        ]);



        DataRow::create([
            'id' => 308,
            'data_type_id' => 9,
            'field' => 'portfolio_belongstomany_tag_relationship',
            'type' => 'relationship',
            'display_name' => '標籤',
            'required' => 0,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"model":"App\\\\Models\\\\Tag","table":"tags","type":"belongsToMany","column":"id","key":"id","label":"title","pivot_table":"portfolio_tag","pivot":"1","taggable":"on"}',
            'order' => 4
        ]);



        DataRow::create([
            'id' => 309,
            'data_type_id' => 9,
            'field' => 'pics',
            'type' => 'media_picker',
            'display_name' => '圖片',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"max":5,"min":1,"expanded":true,"show_folders":true,"show_toolbar":true,"allow_upload":true,"allow_move":true,"allow_delete":true,"allow_create_folder":true,"allow_rename":true,"allow_crop":true,"allowed":[],"hide_thumbnails":false,"quality":90,"base_path":"/","show_as_images":true}',
            'order' => 4
        ]);



        DataRow::create([
            'id' => 310,
            'data_type_id' => 4,
            'field' => 'pic',
            'type' => 'media_picker',
            'display_name' => '圖片',
            'required' => 1,
            'browse' => 1,
            'read' => 1,
            'edit' => 1,
            'add' => 1,
            'delete' => 1,
            'details' => '{"max":1,"min":1,"expanded":true,"show_folders":true,"show_toolbar":true,"allow_upload":true,"allow_move":true,"allow_delete":true,"allow_create_folder":true,"allow_rename":true,"allow_crop":true,"allowed":[],"hide_thumbnails":false,"quality":90,"base_path":"/","show_as_images":true}',
            'order' => 5
        ]);
    }
}
