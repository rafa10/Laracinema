<?php

namespace App\Http\Controllers;

use App\Actors;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class ActorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actors = Actors::all();

        return view(" actors/index ", array(

            'actors' => $actors
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actors/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $actors = Actors::create($request->all());

        Session::flash('create', 'Actors successfully added!');

        return redirect(route('actors_index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $actors = Actors::findOrFail($id);

        return view(" actors/show ", compact('actors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $actors = Actors::findOrFail($id);

        return view(" actors/edit ", compact('actors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $actors = Actors::findOrFail($id);

        $actors->update($request->all());

        Session::flash('update', 'Actors successfully updated!');

        return redirect(route('actors_edit', $id));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $actors = Actors::findOrFail($id);

        $actors->delete();

        Session::flash('delete', 'Actors successfully deleted!');

        return redirect(route(('actors_index')));
    }
}
