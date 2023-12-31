<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = [

        'category_name',
        'created_at',
        'updated_at',
        'deleted_at',
        'slug_category',

        'category_name','created_at'

    ];
    public $timestamps = true;
}
