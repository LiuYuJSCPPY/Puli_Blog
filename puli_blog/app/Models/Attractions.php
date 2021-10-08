<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attractions extends Model
{
    use HasFactory;

    protected $fillable = ['name','business_time_start','business_time_end','public_holiday','add','offical','artice','display'];

    // 圖片
    public function Attraction_img(){
        return $this->hasMany(Attractions_img::class);
    }

    // 價錢
    public function Attraction_price(){
        return $this->hasMany(Attractions_price::class,'attractions_id','id');
    }

    // 文章作者
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    // 這篇文章POST ID

    public function post(){
        return $this->hasMany(post::class,'artice_id','id');
    }
}
