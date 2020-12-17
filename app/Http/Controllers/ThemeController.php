<?php

namespace App\Http\Controllers;

use App\Models\Theme;

class ThemeController extends Controller
{
    public function show($id)
    {
        $theme = Theme::find($id);
        return view('themes.show')->with('theme', $theme);
    }

    public function create() {
        return view('themes.create');
    }
}
