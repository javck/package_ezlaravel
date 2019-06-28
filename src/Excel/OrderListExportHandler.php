<?php namespace Javck\Easyweb2\Excel;

use App\Http\Model\Excel\OrderListExport;
use App\Order;

class OrderListExportHandler implements \Maatwebsite\Excel\Files\ExportHandler {
	
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
                $orders = Order::findMany($ary_id);
            }else{
                $orders = Order::all();
            }
            for ($i=0; $i < count($orders) ; $i++) { 
                $order = $orders[$i];
                $order['user_id'] = $order->user->name;
                $productDetails = $order->productDetail();
                $str_detail = "";
                for ($j=0; $j < count($productDetails); $j++) { 
                    $productDetail = $productDetails[$j];
                    if (strlen($str_detail) > 0) {
                        $str_detail = $str_detail . " , ";
                    }
                    $name = $productDetail->product()->name;
                    $str_detail = $str_detail . ($name . ": " . $productDetail->qty . "個");
                }
                $order['detail'] = $str_detail;
                $order['type'] = $orders[$i]->getTypeName();
                $order['status'] = $orders[$i]->getStatusName();
            }
            //設定Header文字
            $sheet->row(1, array('id', '序號' , '訂購人' , '總金額' , '寄送地址' , '收件人' , '運費' , '類型' , '備註' , '狀態' , '物流編號' ,'創立時間','更新更新','訂單內容'));
            $sheet->fromModel($orders , null , "A2" , true , false);
            $sheet->setWidth(array(
                'B' =>  20,
                'C' =>  15,
                'D' =>  10,
                'E' =>  30,
                'F' =>  15,
                'G' =>  10,
                'H' =>  10,
                'I' =>  30,
                'J' =>  10,
                'K' =>  20,
                'L' =>  20,
                'M' =>  20,
                'N' =>  50,
            ));
            

        })->export('xls');
    }

}