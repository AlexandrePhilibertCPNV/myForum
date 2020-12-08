<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReference;
use Illuminate\Http\Request;

use App\Models\Reference;

class ReferenceController extends Controller
{
    public function index()
    {
        $references = Reference::all();
        return view('references.index')->with('references', $references);
    }

    public function store(StoreReference $request)
    {
        $reference = new Reference();
        $reference->description = $request->input('description');
        $reference->url = $request->input('url');
        $reference->save();
        return redirect(route('references.index'))->with('message', 'Référence ajoutée');
    }


    public function show(int $id)
    {
        $reference = Reference::find($id);
        return view('references.show')->with('reference', $reference);
    }

    public function create()
    {
        $reference = new Reference();
        return view('references.create')->with('reference', $reference);
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

        return redirect(route('references.show', $id))->with([
            'reference' => $reference,
            'message' => 'Référence mise à jour'
        ]);
    }

    public function destroy(int $id)
    {
        Reference::destroy($id);

        return redirect(route('references.index'))->with('message', 'Référence supprimée');
    }
}
