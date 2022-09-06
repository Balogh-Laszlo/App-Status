<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Feature;

class FeatureController extends Controller {

    public function show(Feature $feature) {
        return view('feature.show', [
            'feature' => $feature,
            'errors' => $feature->errors()->latest()->paginate(10)
        ]);
    }

    public function create(App $app) {
        return view('feature.create', [
            'app' => $app
        ]);
    }
}
