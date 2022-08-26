<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    use HasFactory;

    public function feature(){
        return $this->belongsTo(Feature::class,'feature_id');
    }
}
