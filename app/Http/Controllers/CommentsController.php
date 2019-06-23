<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\traits\CommentsTrait;

class CommentsController extends Controller
{
    use CommentsTrait;
    
    public function index()
    {
       return $this->show();
    }
}
