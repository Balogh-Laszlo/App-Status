<?php

namespace App\Http\Controllers;


use App\Models\App;
use App\Models\Favourite;
use App\Models\User;

class FavouriteController extends Controller {
    public function index() {
        if (auth()->check()) {
            return view('favourite.index', [
                'apps' => auth()->user()->favourites()->latest()->filter(request(['search']))->paginate(11)->withQueryString()
            ]);
        }

        return redirect('/login');
    }

    public function store(App $app) {
        $fav = Favourite::where('user_id', '=', auth()->id())->where('app_id', '=', $app->id)->get();
        if ($fav->count() > 0) {
            foreach ($fav as $f) {
                $f->delete();
            }
        } else {
            $attributes['user_id'] = auth()->id();
            $attributes['app_id'] = $app->id;

            Favourite::create($attributes);
        }

        return redirect(url()->previous());
    }

    public static function isFavourite(App $app, User $user) {
        return $user->favourites->contains($app);
    }
}
