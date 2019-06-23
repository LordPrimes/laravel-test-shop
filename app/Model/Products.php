<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = ['title', 'seo_title', 'description'];
}
