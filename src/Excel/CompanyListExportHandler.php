<?php namespace Javck\Easyweb2\Excel;

use App\Http\Model\Excel\CompanyListExport;
use App\Company;

class CompanyListExportHandler implements \Maatwebsite\Excel\Files\ExportHandler {
	
    //處理Excel檔案下載與生成
    public function handle($export)
    {
        
        // work on the export
        return $export->sheet('all', function($sheet)
        {
        	// 設定密碼保護
			//$sheet->protect('admin123');
            $str_ids = session('ids');
            if (isset($str_ids) && strlen($str_ids) > 0) {
                $ary_id = explode(',',$str_ids);
                $companies = Company::findMany($ary_id);
            }else{
                $companies = Company::all();
            }
            for ($i=0; $i < count($companies) ; $i++) { 
                $company = $companies[$i];
                $company->type = $companies[$i]->getTypeName();
                $company->enabled = $companies[$i]->getEnabledName();
            }
            //設定Header文字
            $sheet->row(1, array('id', '名稱' , '序號' , '收件地址' , '電話' , '傳真' , '公司類型' , '排序' , '是否啟動','創立時間','更新時間'));
            $sheet->fromModel($companies , null , "A2" , true , false);
            $sheet->setWidth(array(
                 'B' =>  20,
                 'C' =>  20,
                 'D' =>  30,
                 'E' =>  20,
                 'F' =>  20,
                 'J' =>  30,
                 'K' =>  30,
            ));
            

        })->export('xls');
    }

}