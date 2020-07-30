<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public static function makeOrder($request, $price){
        $order = new self;
        
        return $order->fillOrder($request, $price);

    }
    
    private function fillOrder($request, $price){
        $this->customer_name = $request->name;
        $this->customer_email = $request->email;
        $this->customer_phone = $request->phone;
        $this->price = $price;
        $this->status = 1;
        $this->save();
        return $this;
    }
}
