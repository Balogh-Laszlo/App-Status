<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function app(){
        return $this->belongsTo(App::class,'app_id');
    }
    public function errors(){
        return $this->hasMany(Error::class);
    }
}
