<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Taikhoan;
use App\Models\Danhmuc;
use App\Models\Baiviet_image;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Baiviet extends Model
{
    use HasFactory;

    protected $table = 'post';

    protected $fillable = [
        'title_post',
        'description',
        'content_post',
        'slug_post',
        'post_date',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
        'account_id',
        'type_id',
    ];
    public $timestamps = true;
    
    public function account(){
        return $this->belongsTo(Taikhoan::class, 'account_id', 'id');
    }
    public function type(){
        return $this->belongsTo(Danhmuc::class, 'type_id', 'id');
    }

    public function post_image(): HasOne{
        return $this->hasOne(Baiviet_image::class, 'post_id', 'id');
    }
}
