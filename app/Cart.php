<?php

namespace App;



class Cart 
{
    public $items=null;
    public $totalQty=0;
    public $totalPrice=0;

    public function __construct($oldCart)
    {
        if($oldCart)
        {
            $this->items=$oldCart->items;
            $this->totalQty=$oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;

        }
      
    }
    public function add($item,$id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->product_price, 'item'=>$item];
        if($this->items)
        {
            if(array_key_exists($id,$this->items))
            {
                $storedItem=$this->items[$id]; //overwrite exitstwin item

            }
        }
        $storedItem['qty']++;
        $storedItem['price']=$item->product_price * $storedItem['qty'];
      
        $this->items[$id]=$storedItem; // if no item then create a new item in items
        $this->totalQty++;
        $this->totalPrice += $item->product_price;
    }
}
