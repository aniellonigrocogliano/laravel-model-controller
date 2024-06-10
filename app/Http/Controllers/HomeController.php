<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index() {
        $Movies = Movie::all();
        return view('index', compact('Movies'));
        }
        
}
