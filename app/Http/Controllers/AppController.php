<?php

namespace App\Http\Controllers;

use App\Models\App;

class AppController extends Controller {
    public function index() {
        return view('app.index', [
            'apps' => App::latest()->filter(request(['search']))->paginate(11)->withQueryString()
        ]);
    }

    public function show(App $app) {
        return view('app.show', [
            'app' => $app,
            'features' => $app->features()->filter(request(['search']))->paginate(10)->withQueryString(),
        ]);
    }

    public function create() {
        return view('app.create');
    }

    public function store() {
        $attributes = request()->validate([
            'title' => ['required', 'min:5'],
            'excerpt' => ['required', 'min:12'],
            'description' => ['required', 'min:12']
        ]);

        $attributes['user_id'] = auth()->id();

        $app = App::create($attributes);

        return redirect('/')->with('success', $app->title . ' created successfully!');
    }
}
