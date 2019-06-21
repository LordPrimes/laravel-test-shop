<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Products;
use App\Modules\Reposetory\ProductsReposetory;

class ShopController extends Controller
{
    
    protected $items;

    public function __construct(Products $products)
    {
        $this->items = new ProductsReposetory($products);
    }
    
    public function index()
    {
        return $this->items->show();
    }
}
