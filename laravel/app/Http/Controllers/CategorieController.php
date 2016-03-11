<?php

namespace App\Http\Controllers;

use App\Categorie;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie = Categorie::all();

        return view(" categorie/index ", array(

            'categorie' => $categorie
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorie/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie = Categorie::create($request->all());

        Session::flash('create', 'Catégorie successfully added!');

        return redirect(route('categorie_index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categorie = Categorie::findOrFail($id);

        return view(" categorie/show ", compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);

        return view(" categorie/edit ", compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);

        $categorie->update($request->all());

        Session::flash('update', 'Catégorie successfully updated!');

        return redirect(route('categorie_edit', $id));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);

        $categorie->delete();

        Session::flash('delete', 'Catégorie successfully deleted!');

        return redirect(route(('categorie_index')));
    }
}