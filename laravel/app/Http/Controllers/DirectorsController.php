<?php

namespace App\Http\Controllers;

use App\Directors;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class DirectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directors = Directors::all();
        
        return view(" directors/index ", array(

            'directors' => $directors
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('directors/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $directors = Directors::create($request->all());

        Session::flash('create', 'Actors successfully added!');

        return redirect(route('directors_index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $directors = Directors::findOrFail($id);

        return view(" directors/show ", compact('directors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $directors = Directors::findOrFail($id);

        return view(" directors/edit ", compact('directors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $directors = Directors::findOrFail($id);

        $directors->update($request->all());

        Session::flash('update', 'Directors successfully updated!');

        return redirect(route('directors_edit', $id));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $directors = Directors::findOrFail($id);

        $directors->delete();

        Session::flash('delete', 'Directors successfully deleted!');

        return redirect(route(('directors_index')));
    }
}