<?php 

namespace App\Exceptions;

use Exception;

class ProductsException extends Exception
{
    public function render()
    {
        return 123;
    }
}
?>