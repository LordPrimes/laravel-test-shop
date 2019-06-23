<?php 

namespace App\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Exceptions\Handler as ExceptionHandler;

class ProductsException extends ExceptionHandler
{
    public function render()
    {
        $warn = 'В базе нету товаров';
        return response()->view('index', compact('warn'));
    }
}
?>