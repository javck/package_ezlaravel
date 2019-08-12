<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Javck\Ecpay\Collections\CheckoutResponseCollection;
use Javck\Ecpay\Services\StringService;
use Javck\Ecpay\Checkout;
use App\Order;
use Log;
use Carbon\Carbon;

class EcPayController extends Controller
{
    protected $checkoutResponse;
    protected $checkout;
    public function __construct(CheckoutResponseCollection $checkoutResponse, Checkout $checkout)
    {
        $this->checkoutResponse = $checkoutResponse;
        $this->checkout = $checkout;
    }

    /*建立綠界訂單
    itemDesc 訂單描述
    itemName 訂單名稱
    totalAmt 訂單金額
    payMethod 付款方式，支援ALL, Credit, ATM, WebATM
    orderId  訂單編號
    userId  用戶流水號
    */
    public function createOrder($itemDesc, $itemName, $totalAmt, $payMethod = 'ALL', $orderId, $userId = null)
    {
        $formData = [
            'ItemDescription' => $itemDesc,
            'ItemName' => $itemName,
            'TotalAmount' => $totalAmt,
            'PaymentMethod' => $payMethod,
            'CustomField1'  => $orderId
        ];
        if(isset($userId)){
            $formData['UserId'] = $userId;
            $formData['CustomField2'] = $userId;
        }
        return $this->checkout->setPostData($formData)->send();
    }

    //當付款完成，EcPay會回呼這個網址
    public function notifyUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            Log::debug($serverPost);
            if(isset($serverPost['CustomField1'])){
                $order_id = (int)$serverPost['CustomField1'];
                $order = Order::findOrFail($order_id);
                $order->status = 'payed';
                $order->pay_from = $serverPost['PaymentType'];     
                $order->pay_at = Carbon::createFromFormat('Y/m/d H:i:s', $serverPost['PaymentDate']);
                $order->save();
            }
            return '1|OK';
        } else {
            return '0|FAIL';
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \TsaiYiHua\ECPay\Exceptions\ECPayException
     */
    //預設付款完之後，前台轉址函式
    public function returnUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            if (!empty($request->input('redirect'))) {
                return redirect($request->input('redirect'));
            } else {
                dd($this->checkoutResponse->collectResponse($serverPost));
            }
        }
    }
}