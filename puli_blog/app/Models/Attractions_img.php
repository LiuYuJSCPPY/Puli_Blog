<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attractions_img extends Model
{

    use HasFactory;

    protected $fillable = ["name","path_img","attractions_id"];

    public function Attractions(){
        return $this->belongsTo(Attractions::class);
    }
}
