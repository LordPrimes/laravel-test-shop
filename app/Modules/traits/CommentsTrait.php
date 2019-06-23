<?php

namespace App\Modules\traits;

use App\Model\Comments;

trait CommentsTrait
{

    private $items;

    public function __construct(Comments $items)
    {
        $this->items = $items;
    }

    public function show()
    {
        return $this->items->all();
    }
    
    public function create(array $data)
    {
        
    }
}