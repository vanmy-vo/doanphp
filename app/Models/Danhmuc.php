<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = [
<<<<<<< HEAD
        'category_name',
        'created_at',
        'updated_at',
        'deleted_at',
        'slug_category',
=======
        'category_name','created_at'
>>>>>>> dd7d10cfba369922e87c61c97dc2c751ed0006cc
    ];
    public $timestamps = true;
}
