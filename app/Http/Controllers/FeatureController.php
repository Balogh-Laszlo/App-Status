<?php

namespace App\Http\Controllers;

use App\Models\Feature;

class FeatureController extends Controller {

    public function show(Feature $feature) {
        return view('feature.show', [
            'feature' => $feature,
            'errors' => $feature->errors()->latest()->paginate(10)
        ]);
    }
}
