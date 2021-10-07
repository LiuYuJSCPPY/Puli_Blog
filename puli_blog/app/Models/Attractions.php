<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attractions extends Model
{
    use HasFactory;

    protected $fillable = ['name','business_time_start','business_time_end','public_holiday','add','offical','artice','display'];

    public function Attraction_img(){
        return $this->hasMany(Attractions_img::class);
    }

    public function Attraction_price(){
        return $this->hasMany(Attractions_price::class,'attractions_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
