<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Danhmuc;
class Loaidanhmuc extends Model
{
    use HasFactory;
    protected $table = 'type';
    protected $fillable = [
        'type_name',
        'created_at',
        'updated_at',
        'deleted_at',
        'category_id',
        'slug_type',
    ];
    public $timestamps = true;

    public function category(){
        return $this->belongsTo(Danhmuc::class, 'category_id', 'id');
    }
}
