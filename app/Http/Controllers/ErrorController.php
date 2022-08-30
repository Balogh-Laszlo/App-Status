<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Carbon\Carbon;

class ErrorController extends Controller {
    public static function latestErrors(Feature $feature) {
        $errors = $feature->errors()->where('occurred_at', '>=', Carbon::now()->subDays(5))->get();

//        ddd($errors);

        return $errors;
    }
}
