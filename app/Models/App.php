<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model {
    use HasFactory;

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function features() {
        return $this->hasMany(Feature::class);
    }

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where(fn($query) => $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%'));
        });
    }

    public function usersThatLiked() {
        return $this->belongsToMany(User::class, 'favourites');
    }
}
