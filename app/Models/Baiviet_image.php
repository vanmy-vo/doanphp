<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Baiviet;

class Baiviet_image extends Model
{
    use HasFactory;
    protected $table = 'post_image';
    protected $fillable = [
        'img',
        'created_at',
        'updated_at',
        'deleted_at',
        'post_id',
    ];
    public $timestamps = true;

    public function post(){
        return $this->belongsTo(Baiviet::class, 'post_id', 'id');
    }
}
