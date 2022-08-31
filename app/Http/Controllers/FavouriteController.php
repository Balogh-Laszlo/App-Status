<?php

namespace App\Http\Controllers;

class FavouriteController extends Controller {
    public function index() {
        return view('favourite.index', [
            'apps' => auth()->user()->favourites()->latest()->filter(request(['search']))->paginate(11)->withQueryString()
        ]);
    }
}
