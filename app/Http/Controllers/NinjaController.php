<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
use Illuminate\Http\Request;
use App\Models\Ninja;



class NinjaController extends Controller
{
    public function index()
    {
        // route --> /ninjas/
        // fetch all records & pass into the index view

        // $ninjas = Ninja::all();
        $ninjas = Ninja::with("dojo")->orderBy('created_at', 'desc')->paginate(10);

        return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    public function show(Ninja $ninja)
    {
        // $ninja = Ninja::with('dojo')->findOrFail($id);
        $ninja->load('dojo');
        return view('ninjas.show', ["ninja" => $ninja]);

        // route --> /ninjas/{id}
        // fetch a single record & pass into show view
    }

    public function create()
    {
        $dojos = Dojo::all();

        return view('ninjas.create', ["dojos" => $dojos]);

        // route --> /ninjas/create
        // render a create view (with web form) to users
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:1|max:100',
            'bio' => 'required|string|min:5|max:1000',
            'dojo_id' => 'required|exists:dojos,id',
        ]);

        Ninja::create($validated);

        return redirect()->route('ninjas.index')->with('success', 'Ninja Created');

    }

    public function destroy(Ninja $ninja)
    {
        // $ninja = Ninja::findOrFail($id);
        $ninja->delete();

        return redirect()->route("ninjas.index")->with('success', 'Ninja Deleted');
        // --> /ninjas/{id} (DELETE)
        // handle delete request to delete a ninja record from table
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}