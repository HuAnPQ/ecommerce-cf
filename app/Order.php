<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    public $fillable = [ 'recipient_name',  'state', 'country_code', 'postal_code', 'city', 'line2', 'line1', 'email', 'guide_number', 'total', 'shopping_cart_id' ];

    public static function createFromPayPalResponse($paypalResponse, $shopping_cart)
    {
        $payer = $paypalResponse->payer;
        $orderData = (array) $payer->payer_info->shipping_address;

        $orderData['email'] = $payer->payer_info->email;
        $orderData['total'] = $shopping_cart->amountInCents();
        $orderData['shopping_cart_id'] = $shopping_cart->id;

        return Order::create($orderData);
    }
}
