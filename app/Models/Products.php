<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    protected $collection = 'products';

    // // defines the schema for top-level properties (optional).
    protected  $fillable = ['name', 'unit', 'price', 'description'];
}
