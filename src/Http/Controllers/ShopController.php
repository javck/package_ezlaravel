<?php

namespace Javck\Easyweb2\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Cgy;
use App\Order;
use App\Order_Item;
use App\User;
use Cart;
use Response;
use Auth;
use App\Http\Model\BI;
use App\Http\Controllers\Controller;
use Mail;

class ShopController extends Controller
{

    public function __construct()
    {

    }

    //加入購物車
    public function addCart(Request $request){
        $inputs = $request->all();
        $item = Item::findOrFail($inputs['id']);
        $quantity = isset($inputs['qty']) ? $inputs['qty'] : 1;

        //$cart = Cart::add($item , $inputs['qty']);
        Cart::add([
            'id' => $item->id,
            'name' => $item->title,
            'price' => $item->price,
            'quantity' => $quantity,
            'attributes' => []
        ]);
        $carts = Cart::getContent();
        //dd($inputs['lastPage']);
        return Response::json($carts,201);
    }

    //顯示購物車
    public function showCart(Request $request){
        return view('easyweb2::pages.cart');
    }

    public function getCart(Request $request){
        return Cart::getContent();
    }

    //更新購物車
    public function updateCart(Request $request){
        $inputs = $request->all();
        $cart = explode(';',$inputs['cart']);
        $newCart = array();
        foreach ($cart as $el){
            $cartItem = explode('=',$el);
            Cart::update($cartItem[0],['quantity'=> ['value' => $cartItem[1], 'relative' => false]]);
            $newCart[] = ['rowId' =>$cartItem[0] , 'qty' => $cartItem[1]];
        }
        return Response::json($newCart);
    }

    //移除某購物車商品
    public function removeCart(Request $request){
        $inputs = $request->all();
        Cart::remove($inputs['rowId']);
        $newCart = Cart::getContent();
        return Response::json($newCart,204);
    }

    //清空購物車
    public function clearCart(Request $request){
        Cart::clear();
        return Response::json(null,204);
    }

    //準備提交訂單頁面
    public function createCheckout(Request $request){
        $items = "";
        $i = 0;
        $len = Cart::getTotalQuantity();
        foreach (Cart::getContent() as $cartItem){
            $items = $items . $cartItem->id . '=' . $cartItem->quantity;
            if ($i != $len-1){
                $items = $items . ',';
            }
            $i = $i + 1;
        }
        $subtotal = Cart::getSubTotal();
        $shipCost = BI::calculShipCost(Cart::getContent());
        return view('easyweb2::pages.checkout',compact('items','subtotal','shipCost'));
    }


    //提交訂單頁面
    public function submitCheckout(Request $request){
        $inputs = $request->all();
        if (!Auth::user()){
            $validatedData = $request->validate([
                'username' => 'required|unique:users|max:45',
                'name' => 'required|max:45',
                'address' => 'required|max:100',
                'email' => 'required|max:191',
                'mobile' => 'required|max:10',
                'password' => 'required|max:20',
                'password' => 'required|max:20',
                'password_confirm' => 'same:password',
            ]);
            $inputs['password'] = bcrypt($inputs['password']);
            $user = User::create($inputs);
            Auth::login($user);
            $inputs['owner_id'] = $user->id;
        }else{
            $user = User::findOrFail($inputs['owner_id']);
        }
        $validatedData = $request->validate([
                'receiver' => 'required|max:10',
                'receiverTitle' => 'max:10',
                'receiverMobile' => 'required|max:20',
                'receiverEmail' => 'required|max:100',
                'receiverAddress' => 'required|max:100',
                'message' => 'max:500',
            ]);
        $order = Order::create($inputs);
        $pre_ary_items = explode(',' ,$inputs['items']);
        foreach ($pre_ary_items as $value){
            if(strlen(trim($value)) > 0){
                $ary_item = explode('=',$value);
                Order_Item::create(['order_id' => $order->id , 'item_id' => $ary_item[0] , 'qty' => $ary_item[1]]);
                if ( setting('admin.isMinusStock') ){
                    $item = Item::findOrFail($ary_item[0]);
                    $item->stock -= $ary_item[1];
                    if($item->stock < 0){
                        $item->stock = 0;
                    }
                    $item->save();
                }
            }
        }

        //通知管理員
        if(setting('admin.isSendNotify') == 'true'){
            $subject = setting('site.title') . '訂單通知';
            $url = url('/admin/orders/' . $order->id);
            Mail::send('easyweb2::emails.upsell', ['title' => $subject , 'order' => $order , 'action' => ['title' => '確認訂單' , 'url' => $url]], function($message) use($user, $subject)
            {
                $message->to(setting('admin.admin_mail'), '管理員')->subject($subject);
            });
        }

        Cart::clear();
        $title = trans('page.thank_buy_title');
        $desc = trans('page.thank_buy_desc');
        return view('easyweb2::pages.thankyou',compact('title','desc'));
    }

    public function renderShopPage(Cgy $cgy)
    {
        //選擇所有預設的商品
        $cgies = Cgy::where('parent_id',$cgy->parent_id)->where('enabled',true)->orderBy('sort','asc')->get();
        $cgy_ids = Cgy::where('parent_id',$cgy->parent_id)->where('enabled',true)->orderBy('sort','asc')->pluck('id');
        $items = Item::whereIn('cgy_id',$cgy_ids)->get();
        $activeCgy_id = $cgy->id;
        return view('easyweb2::pages.filter_shop',compact('cgies','items','activeCgy_id'));
    }
}
