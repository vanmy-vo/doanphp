<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Taikhoan extends Model
{
    use HasFactory;

    protected $table = 'account';
    protected $fillable = [
        'username',
        'password',
        'fullname',
        'created_at',
        'updated_at',
        'deleted_at',
        'role_id',
        'timeblock',
    ];
}
