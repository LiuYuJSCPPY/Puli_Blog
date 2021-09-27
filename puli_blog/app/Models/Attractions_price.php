<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attractions_price extends Model
{
    use HasFactory;

    protected $fillable = ['attractions_id' ,'name' ,'price'];

    public function Attractions(){
        return $this->belongsTo(Attractions::class,'attractions_id','id');
    }
}
