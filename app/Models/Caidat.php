<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaidatController extends Model
{
    use HasFactory;

    protected $table = 'setting';

    protected $fillable = [
        'title_post',
    ];
}
