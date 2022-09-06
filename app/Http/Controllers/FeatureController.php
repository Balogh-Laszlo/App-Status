<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Error;
use App\Models\Feature;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;

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

    public function store() {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:12'],
            'app_id' => ['required']
        ]);
        $attributes['status'] = 1;
        Feature::create($attributes);

        return redirect('/app/' . $attributes['app_id']);
    }

    public function status_update(Feature $feature) {
        return view('feature.status_update', [
            'feature' => $feature
        ]);
    }

    public function status_store() {
        $attributes = request()->validate([
            'description' => ['required', 'min:12'],
            'feature_id' => ['required']
        ]);
        if (request('status') != null && request('status') > 0 && request('status') < 4) {
            $attributes['status'] = request('status');
            $feature = Feature::findOrFail($attributes['feature_id']);
            if ($feature->status != $attributes['status']) {
                $feature->update(['status' => $attributes['status']]);
                if ($attributes['status'] != 1) {
                    $attributes['occurred_at'] = Carbon::now();
                    Error::create($attributes);
                }

                return back();
            }


        }
        throw ValidationException::withMessages(['status' => 'Invalid status!']);
    }
}
