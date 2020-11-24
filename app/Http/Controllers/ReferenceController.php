<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reference;

class ReferenceController extends Controller
{
    public function index()
    {
        $references = Reference::all();
        return view('references.index')->with('references', $references);
    }

    public function show($id)
    {
        $reference = Reference::find($id);
        return view('references.show')->with('reference', $reference);
    }

    public function destroy($id)
    {
        Reference::destroy($id);

        return redirect('/references');
    }
}
