<?php

namespace App\Modules\Reposetory;

use App\Contract\ProductsInterface;
use App\Exceptions\ProductsException;
use Illuminate\Database\Eloquent\Model;

class ProductsReposetory implements ProductsInterface 
{


    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $items = $this->model->all();

        if ($items == true){
            throw new ProductsException();
        }
        else {
        return $items;
        }
    }
    
    public function items($id)
    {

    }

    public function create(array $data)
    {

    }

    public function search(string $items)
    {

    }
}
?>