<?php namespace App\Http\Model\Excel;

class OrderListExport extends \Maatwebsite\Excel\Files\NewExcelFile {

	//設定檔案名稱
    public function getFilename()
    {
        return 'Orders';
    }

}