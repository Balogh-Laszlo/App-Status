<?php

namespace App\Http\Controllers;

use App\Models\App;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('index',[
           'apps' => App::latest()->paginate(10)
        ]);
    }
}
