<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Products;
use App\Http\Requests\RequestProducts;
use Exception;
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
        return view('index');
    }

    public function addproducts(RequestProducts $request)
    {
        try {
        $result = $this->items->create([
            'title'=> $request->input('title'),
            'seo_title' => $request->input('seo_title'),
            'description' => $request->input('description')
            ]); 
            return redirect()->route('index');
        }catch(Exception $e){
            return redirect()->route('index');
        }
       
    }

    public function search(Request $request )
    {
        try{
            dd($result = $this->items->search($request->input('query')));
            
            
        }
        catch(Exception $e){
           echo '1';
        }
     
    }

    public function find($id)
    {
       try{
         return  $result = Products::findOrFail($id);
        
       }catch(Exception $e){
            
        return redirect()->route('index')->with('message', 'Нету такого в базе данных!');
       };
    }
}
