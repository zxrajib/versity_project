<?php


namespace App\Libraries;


use App\Models\AttributeValue;
use App\Models\Product;

class GetCookieData
{

    public static function getCookieData()
    {
        if (array_key_exists('cartItems', $_COOKIE)) {
            $cartDatas = $_COOKIE['cartItems'];
            $productData = array();
            $attrValue = AttributeValue::all();
            foreach (json_decode($cartDatas) as $cartData) {
//                dd($cartData->price);
                $attrs = array();
                $item = Product::find($cartData->id);
                $qty = (int)$cartData->qty;
                $price = (double)$cartData->price;
                $options = json_decode($cartData->options);
                for ($i = 0; $i < count($options); $i++) {
                    $value = $attrValue->where('id', (int)$options[$i][1])->first();
                    $attr = [
                        "attr" => $options[$i][0],
                        "value" => $value->value,
                    ];
                    array_push($attrs, $attr);
                }

                $data = [
                    "item" => $item,
                    "qty" => $qty,
                    "attrs" => $attrs,
                    "price" => $price
                ];
                array_push($productData, $data);
            }
            return $productData;
        }else{
//            toastr('Cart Is Empty', 'error');
            return back();
        }
    }
}
