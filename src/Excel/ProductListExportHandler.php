<?php namespace App\Http\Model\Excel;

use App\Http\Model\Excel\ProductListExport;
use App\Product;

class ProductListExportHandler implements \Maatwebsite\Excel\Files\ExportHandler {
	
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
                $products = Product::findMany($ary_id);
            }else{
                $products = Product::all();
            }
            for ($i=0; $i < count($products) ; $i++) { 
                $product = $products[$i];
                $product['isHot'] = $product->isHot;
                $product['cgy_id'] = $product->getCgy_name();
                $product['company_id'] = $product->company->name;
                $product['enabled'] = $product->getEnabledName();
                $product['isHot'] = $product->getIsHotName();
            }
            //設定Header文字
            $sheet->row(1, array('id', '序號' , '條碼' , '名稱' , '英文名稱' , '語言' , '精選' , '庫存數量' , '價格' , '圖檔名稱' , '分類' , '出版商' , 'A群價格','B群價格','C群價格','D群價格','E群價格','F群價格','G群價格','商品介紹頁連結' , '櫃號' , '啟用','排序','創立時間','更新更新'));
            $sheet->fromModel($products , null , "A2" , true , false);
            $sheet->setWidth(array(
                'B' =>  20,
                'C' =>  20,
                'D' =>  10,
                'E' =>  30,
                'F' =>  10,
                'G' =>  10,
                'J' =>  30,
                'K' =>  20,
                'L' =>  20,
                'T' =>  60,
                'X' =>  20,
                'Y' =>  20,

            ));
        })->export('xls');
    }

}