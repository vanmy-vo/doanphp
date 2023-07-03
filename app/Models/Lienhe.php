<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lienhe extends Model
{
    protected $table = 'contact';
    protected $fillable = [
        'fullname',
        'email',
        'title_contact',
        'content_contact',
    ];
    public $timestamps = true; 
}
