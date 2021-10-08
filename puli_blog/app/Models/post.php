<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','post_categroy_id','artice_id'];


    // 分類關聯
    public function PostCategroy(){
        return $this->belongsTo(post_categroy::class,'post_categroy_id','id');
    }

    // 景點關聯
    public function AttractionsArtice(){
        return $this->belongsTo(Attractions::class,'artice_id','id');
    }

    public function comment(){
        return $this->hasMany(comment::class,'post_id','id');
    }
}
