<?php

namespace App\Modules\Reposetory;

use App\Contract\ProductsInterface;
use App\Exceptions\ProductsException;
use Illuminate\Support\Facades\DB;
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
    

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function search(string $items)
    {
        $result = DB::table("products")->where('title', 'LIKE', "%$items%");
        return $result;
    }
}
?>