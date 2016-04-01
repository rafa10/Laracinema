<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\File;

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

        $image = Input::file('image');

        if(Input::hasFile('image')){

            $fileName = $image->getClientOriginalName();

            $extension = $image->getClientOriginalExtension();

            $fileName = rand(11111,99999).'.'.$extension;

            $destinationPath = public_path().'/uploads/categories';

            $image->move($destinationPath, $fileName);

        }


        $categories = Categories::create($request->all());
        $categories->image = asset('uploads/categories/'.$fileName);
        $categories->save();

//        Mail::send('notification.email', ['categories' => $categories], function($message) use ($categories){
//                $message->form('hello@app.com', 'Laracinema');
//                $message->to('rafa.10@live.fr', $categories->title)->subject('Your reminder');
//        });

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

        $categories->update($request->only('title', 'description', 'slug'));


        //  upload image
        if(!empty(Input::file('image'))){

            $filename = basename($categories->image);
            $filename = public_path().'/uploads/categories/'.$filename;

            \Illuminate\Support\Facades\File::delete($filename);

            $image = Input::file('image');

            if(Input::hasFile('image')){

                //          Récupere le non d'origine de fichier
                $fileName = $image->getClientOriginalName();

                //          récupere l'extension de l'image ex: (png|jpg|jpeg)
                $extension = $image->getClientOriginalExtension();

                //          renameing image
                $fileName = rand(11111,99999).'.'.$extension;

                //          Indique ou stocke le fichier
                $destinationPath = public_path().'/uploads/categories';

                //          Déplacer le fichier
                $image->move($destinationPath, $fileName);

            }

            $categories->image = asset('/uploads/categories/'.$fileName);
            $categories->save();
        }


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