<?php

namespace App\Contract;

interface ProductsInterface 
{
    public function show();

    public function create(array $data);

    public function search(string $items);

}


?>