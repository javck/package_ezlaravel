<?php namespace App\Http\Model;


use DB;
use Route;
use Input;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Item;
use App\Cgy;
use App\Order;
use App\Consolidation;

/*
	商業智能運算類別
*/

class BI{

	//商店相關==========================================

	//計算運費
	public static function calculShipCost($consolidations)
	{
		return setting('constant.basic_shipCost');
	}

	//計算訂單商品總數，目前沒用
	// public static function calculOrdersProductQty($orders)
	// {
	// 	$ordersProductQty = 0;
	// 	for ($i=0; $i < count($orders) ; $i++) { 
	// 		$ordersProductQty += $orders[$i]['qty'];
	// 	}
	// 	return $ordersProductQty;
	// }

	//計算訂單小計金額
	public static function calculOrderSubTotal($consolidations)
	{
		$orderSubTotal = 0;

		foreach ($consolidations as $consolidation) {
			if($consolidation->status != 'canceled'){
				$orderSubTotal += $consolidation->cost_package;
				$orderSubTotal += $consolidation->cost_validate;
				$orderSubTotal += $consolidation->cost_service;
				$orderSubTotal += $consolidation->cost_trans;
				$orderSubTotal += $consolidation->cost_others;
			}	
		}

		return $orderSubTotal;
	}


	public static function calculOrderTotal($order)
	{
		return $order->subtotal + $order->shipCost;
	}

	//計算訂單平均折數，目前沒用
	// public static function calculOrdersCallPriceTotal($orders)
	// {
	// 	$ordersSubTotal = BI::calculOrdersSubTotal($orders);
	// 	$ordersPriceTotal = 0;
	// 	for ($i=0; $i < count($orders) ; $i++) { 
	// 		$ordersPriceTotal += $orders[$i]['qty'] * $orders[$i]['product']->price;
	// 	}
	// 	if ($ordersPriceTotal != 0) {
	// 		$ordersCallPriceTotal = round($ordersSubTotal / $ordersPriceTotal * 100 , 2) . '%';
	// 	}else{
	// 		$ordersCallPriceTotal = '0%';
	// 	}
		
	// 	return $ordersCallPriceTotal;
	// }


	//建立一個新的訂單序號，規則為YYYYMMDDNo
	public static function createOrderSerial()
	{
		$qty = Order::whereDate('created_at', '=', Carbon::today()->toDateString())->count();
		$date = Carbon::today();
		return $date->year . $date->month . $date->day . ($qty + 1);
	}

	


}