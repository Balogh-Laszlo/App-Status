<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function features(){
        return $this->hasMany(Feature::class);
    }
}
