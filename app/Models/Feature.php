<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model {
    use HasFactory;

    public function app() {
        return $this->belongsTo(App::class, 'app_id');
    }

    public function errors() {
        return $this->hasMany(Error::class);
    }

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where(fn($query) => $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%'));
        });
    }
}
