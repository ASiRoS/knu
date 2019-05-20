<?php

namespace App\Http\Controllers;

use App\Models\Blank;

class HomeController extends Controller
{
    public function index()
    {
        $blanks = Blank::published()->paginate(12);

        return view('home.index', compact('blanks'));
    }
}
