<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LienheController extends Model
{
    use HasFactory;

    protected $table = 'contact';

    protected $fillable = [
        'title_post',
    ];
}
