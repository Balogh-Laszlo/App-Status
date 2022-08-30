<?php

namespace App\Http\Controllers;

use App\Models\App;

class AppController extends Controller {
    public function index() {
        return view('app.index', [
            'apps' => App::latest()->paginate(10)
        ]);
    }

    public function show(App $app) {
        return view('app.show', [
            'app' => $app,
            'features' => $app->features(),
        ]);
    }
}
