<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public static function makeCart($cartProducts, $order){
        foreach($cartProducts as $product){
            $orderCart = new self;
            $orderCart->product_id = $product->id;
            $orderCart->order_id = $order->id;
            $orderCart->save();
        }
    }
}
