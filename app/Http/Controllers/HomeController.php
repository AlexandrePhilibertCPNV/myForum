<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $themes = Theme::all();
        return view('index')->with('themes', $themes);
    }
}
