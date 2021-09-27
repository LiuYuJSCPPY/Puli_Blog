<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_categroy extends Model
{
    use HasFactory;

    public function post(){
        return $this->hasMany(post::class,'post_categroy_id','id');
    }
}
