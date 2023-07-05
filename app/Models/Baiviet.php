<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Taikhoan;
use App\Models\Danhmuc;
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
public function taiKhoan(){
    return $this->belongsTo(Taikhoan::class, 'account_id', 'id');
}
    public function danhMuc(){
        return $this->belongsTo(Danhmuc::class, 'type_id', 'id');
    }
}
