<?php

namespace App\Modules\Observers;


use App\Model\Products;

class ProductObserver
{
    public function created(Products $products)
    {
       return Session::flash('messages', 'товар добавлен'); 
    }
}
