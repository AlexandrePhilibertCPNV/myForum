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

    public function store(Request $request)
    {
        $reference = new Reference();
        $reference->description = $request->input('description');
        $reference->url = $request->input('url');
        $reference->save();
        return redirect(route('references.index'));
    }


    public function show(int $id)
    {
        $reference = Reference::find($id);
        return view('references.show')->with('reference', $reference);
    }

    public function create()
    {
        $reference = new Reference();
        return view ('references.create')->with('reference', $reference);
    }

    public function edit(int $id)
    {
        $reference = Reference::find($id);
        return view('references.edit')->with('reference', $reference);
    }

    public function update(Request $request, int $id)
    {
        $reference = Reference::find($id);
        $reference->description = $request->input('description');
        $reference->url = $request->input('url');
        $reference->save();
        return view('references.show')->with('reference', $reference);
    }

    public function destroy(int $id)
    {
        Reference::destroy($id);

        return redirect(route('references.index'));
    }
}
