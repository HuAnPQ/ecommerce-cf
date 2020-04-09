<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public static function findOrCreateById($shopping_card_id)
    {
        if($shopping_card_id){
            return ShoppingCart::find($shopping_card_id);
        }else{
            return ShoppingCart::create();
        }
    }
}
