<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\Factory\Basket;
use App\Http\Controllers\Controller;

class testController extends Controller
{
    
    protected $adaptee;
    public function __construct()
    {
        $this->adaptee = new Basket();
    }
    
    public function index()
    {
        return $this->adaptee->show();       
    }
}
