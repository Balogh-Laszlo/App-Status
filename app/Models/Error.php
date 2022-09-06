<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Error extends Model {
    use HasFactory;

    public function feature() {
        return $this->belongsTo(Feature::class, 'feature_id');
    }

    public function scopeRelevant($query) {
        $query->where->where('occurred_at', '>=', Carbon::now()->subDays(5));
    }
}
