<?php

namespace Javck\Easyweb2\Controllers;

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

class ShopController extends Controller
{

    public function __construct()
    {

    }

    //加入購物車
    public function addCart(Request $request){
        $inputs = $request->all();
        $item = Item::findOrFail($inputs['id']);
        $cart = Cart::add($item , $inputs['qty']);
        //dd($inputs['lastPage']);
        return Response::json($cart,201);
    }

    //顯示購物車
    public function showCart(Request $request){
        return view('pages.cart');
    }

    //更新購物車
    public function updateCart(Request $request){
        $inputs = $request->all();
        $cart = explode(';',$inputs['cart']);
        $newCart = array();
        foreach ($cart as $el){
            $cartItem = explode('=',$el);
            Cart::update($cartItem[0],['qty'=>$cartItem[1]]);
            $newCart[] = ['rowId' =>$cartItem[0] , 'qty' => $cartItem[1]];
        }
        return Response::json($newCart);
    }

    //移除某購物車商品
    public function removeCart(Request $request){
        $inputs = $request->all();
        $newCart = Cart::remove($inputs['rowId']);
        return Response::json($newCart,204);
    }

    //清空購物車
    public function clearCart(Request $request){
        Cart::destroy();
        return Response::json(null,204);
    }

    //準備提交訂單頁面
    public function createCheckout(Request $request){
        $items = "";
        $i = 0;
        $len = count(Cart::content());
        foreach (Cart::content() as $cartItem){
            $items = $items . $cartItem->model->id . '=' . $cartItem->qty;
            if ($i != $len-1){
                $items = $items . ',';
            }
            $i = $i + 1;
        }
        $subtotal = Cart::total(0,'','');
        $shipCost = BI::calculShipFee(Cart::content());

        return view('pages.checkout',compact('items','subtotal','shipCost'));
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
            $ary_item = explode('=',$value);
            Order_Item::create(['order_id' => $order->id , 'item_id' => $ary_item[0] , 'qty' => $ary_item[1]]);
            if (BI::IS_MINUS_STOCK){
                $item = Item::findOrFail($ary_item[0]);
                $item->stock -= $ary_item[1];
                if($item->stock < 0){
                    $item->stock = 0;
                }
            }
        }
        Cart::destroy();
        return view('pages.thankyou');
    }
}
