<?php

namespace App\Http\Controllers;


use App\Movies;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movies::all();

        return view(" movies/index ", compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'type' => 'required|min:10',
                'title' => 'required|min:10',
                'description' => 'required|min:10',
                'languages' => 'required',
                'image' => 'required'
            ],
            [
                'type.required' => 'Le type est obligatoire',
                'title.required' => 'Le titre est obligatoire',
                'description.required' => 'La description est obligatoire',
                'languages.required' => 'Le languages est obligatoire',
                'image.required' => 'L\'images est obligatoire',

                'type.min' => 'Le type doit avoire au mois 10 caracteres',
                'title.min' => 'Le titre doit avoire au mois 10 caracteres',
                'description.min' => 'La description doit avoire au mois 10 caracteres'
            ]);

        $movies = Movies::create($request->all());

        Session::flash('create', 'Movies successfully added!');

        return redirect(route('movies_index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $movies = Movies::findOrFail($id);

        return view(" movies/show ", compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $movies = Movies::findOrFail($id);

        return view(" movies/edit ", compact('movies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $movies = Movies::findOrFail($id);

        $movies->update($request->all());

        Session::flash('update', 'Movies successfully updated!');

        return redirect(route('movies_edit', $id));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $movies = Movies::findOrFail($id);

        $movies->delete();

        Session::flash('delete', 'Movies successfully deleted!');

        return redirect(route(('movies_index')));
    }
}