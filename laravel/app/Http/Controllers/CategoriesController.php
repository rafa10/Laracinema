<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();

        return view(" categories/index ", compact('categories') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categories = Categories::create($request->all());

        Session::flash('create', 'Catégorie successfully added!');

        return redirect(route('categories_index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categories = Categories::findOrFail($id);

        return view(" categories/show ", compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Categories::findOrFail($id);

        return view(" categories/edit ", compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categories = Categories::findOrFail($id);

        $categories->update($request->all());

        Session::flash('update', 'Categorie successfully updated!');

        return redirect(route('categories_edit', $id));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categories = Categories::findOrFail($id);

        $categories->delete();

        Session::flash('delete', 'Categorie successfully deleted!');

        return redirect(route(('categories_index')));
    }
}