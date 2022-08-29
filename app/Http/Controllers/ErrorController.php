<?php

namespace App\Http\Controllers;

use App\Models\Error;
use App\Models\Feature;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public static function latestErrors(Feature $feature){
        $errors = $feature->errors()->where('occurred_at','>=',Carbon::now()->subDays(5));
//        ddd('errors', $errors);
        return $errors;
    }
}
