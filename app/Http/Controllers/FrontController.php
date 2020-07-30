<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Cart;
// use Session;
use App\Services\CartService;

use App\Services\PayseraService;

class FrontController extends Controller
{
    public function home(CartService $cart)
    {
        // print_r(Session::get('cart'));
        // echo $cart->hell();
        // $cart = Session::get('cart');
        // $count = 0;
        // $total = 0;
        // $cartProducts = [];
        // if(!empty($cart)){
        // foreach ($cart as $key => $value) {
        //     $count += $value['count'];
        //     $total += $value['price'];
        //     $cartProducts[$key] = Product::where('id', $value['id'])->first();
        // }}
        // print_r($cart->getCart());
        $products = Product::all();
        return view('front.home', array_merge(compact('products'),$cart->getCart()));//perduodam i bleidus
        // return view('front.home',['products'=>$products]);
    }
    public function add(CartService $cart)
    {
        // $count = (int) $request->count;
        // $product = Product::where('id', $request->product_id)->first();
        // $cart = Session::get('cart', []);
        // if (isset($cart[$product->id])) {
        //     $cart[$product->id] = 
        //     [
        //         'count' => $cart[$product->id]['count'] + $count,
        //         'id' => $product->id,
        //         'price'=> $cart[$product->id]['price'] + $product->price * $count
        //     ];
        // }
        // else {
        //     $cart[$product->id] = ['count' => $count, 'id' => $product->id, 'price' => $product->price * $count];
        // }
        // if($cart[$product->id]['count']>0){
        //     Session::put('cart', $cart);
        $cart->add();
            return redirect()->back();
        // }else{
        //     return redirect()->back();
        // }
    }
    public function addJs(CartService $cart)
    {
        $cart->add();
        $miniCartHtml = view('front.mini-cart', $cart->getCart())->render();
        return response()->json([
            'html'=>$miniCartHtml,
            'cart'=>'OK'
        ]);
        
    }
    public function buy(CartService $cart, Request $request, PayseraService $paysera)
    {
        $buyCart = $cart->getCart();
        $order = Order::makeOrder($request, $buyCart['total']);
        $cart->empty();
        Cart::makeCart($buyCart['cartProducts'], $order);
        return $paysera->buy($order);

    }

    public function payseraAccept(PayseraService $paysera){
       
        $paysera->allGood();
        return redirect()->route('all.good');
    }

    public function remove(CartService $cart)
    {
        // $cart = Session::get('cart', []);
        // if (isset($cart[$request->product_id])) {
        //     unset($cart[$request->product_id]);
        // }
        // Session::put('cart', $cart);
        $cart->remove();
        return redirect()->back();
    }
    
    public function allGood(CartService $cart){
        return view('front.all-good', $cart->getCart());
    }

    public function cart(CartService $cart, Request $request){
        // @include('front.cart');
        // $shopCart = new Product;
        
        $product = New Product;
        $product->image = $request->product_image;
        $product->save();

        $products = Product::all();

        return view('front.cart', array_merge(compact('products'),$cart->getCart()));
        // return redirect()->back();
        // print_r('aaaaaaaaaa');
    }
   
      
}


