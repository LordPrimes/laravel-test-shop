<?php 

namespace App\Contract;

interface BasketInterface
{
   public function add(array $data);

   public function show();
}

?>