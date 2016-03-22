<?php

namespace App\Http\Controllers;


use App\Categories;
use App\Movies;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $movies = Movies::all();//paginate(5);

//      pour affichier les catigorires dans film
        $categories = Movies::find(3)->categories;

        $request->session()->get('key');

        return view(" movies/index ", compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Categories::all(['id','title']);

        $cat = $categories->toArray();
        //dd($cat);
        $tabCat = [];

        foreach ($cat as $value){
            $tabCat[$value['id']] = $value['title'];
        }

        return view('movies/create', compact('tabCat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'type' => 'required|min:5',
                'title' => 'required|min:4',
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

                'type.min' => 'Le type doit avoire au mois 5 caracteres',
                'title.min' => 'Le titre doit avoire au mois 5 caracteres',
                'description.min' => 'La description doit avoire au mois 10 caracteres'
            ]);
//      uploade image

        $image = Input::file('image');

        if(Input::hasFile('image')){

//          Récupere le non d'origine de fichier
            $fileName = $image->getClientOriginalName();

//          récupere l'extension de l'image ex: (png|jpg|jpeg)
            $extension = $image->getClientOriginalExtension();

//          renameing image
            $fileName = rand(11111,99999).'.'.$extension;

//          Indique ou stocke le fichier
            $destinationPath = public_path().'/uploads/movies';

//          Déplacer le fichier
            $image->move($destinationPath, $fileName);

        }

        $movies = Movies::create($request->all());
        $movies->image = asset('/uploads/movies/'.$fileName);
        $movies->save();

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

        $categories = Categories::all(['id','title']);

        $cat = $categories->toArray();

        $tabCat = [];

        foreach ($cat as $value){
            // combiner deux tableaux dans un autre est former un seul tableaux "array( [id] => [title])"
            $tabCat[$value['id']] = $value['title'];
        }

        return view(" movies/edit ", compact('movies','tabCat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $movies = Movies::findOrFail($id);

        $movies->update($request->only('type', 'title', 'description', 'languages', 'trailer', 'categories_id','distributeur', 'bo', 'annee', 'budget', 'duree', 'date_release', 'note_presse', 'visible', 'cover', 'shop', 'slug', 'views'));



    //  upload image
        if(!empty(Input::file('image'))){

            $filename = basename($movies->image);
            $filename = public_path().'/uploads/movies/'.$filename;

            File::delete($filename);

            $image = Input::file('image');

            if(Input::hasFile('image')){

    //          Récupere le non d'origine de fichier
                $fileName = $image->getClientOriginalName();

    //          récupere l'extension de l'image ex: (png|jpg|jpeg)
                $extension = $image->getClientOriginalExtension();

    //          renameing image
                $fileName = rand(11111,99999).'.'.$extension;

    //          Indique ou stocke le fichier
                $destinationPath = public_path().'/uploads/movies';

    //          Déplacer le fichier
                $image->move($destinationPath, $fileName);

            }

            $movies->image = asset('/uploads/movies/'.$fileName);
            $movies->update();
        }

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

    /**
     * Update the visibility to movies
     */
    public function visible(Request $request, $id)
    {
        $movies = Movies::findOrFail($id);

        $movies->visible = true;

        $movies->save();

        Session::flash('visible', 'visibility successfully updated!');

        return redirect(route('movies_index'));

    }

    /**
     * Update the visibility to movies
     */
    public function invisible(Request $request, $id)
    {
        $movies = Movies::findOrFail($id);

        $movies->visible = false;

        $movies->save();

        Session::flash('visible', 'invisibility successfully updated!');

        return redirect(route('movies_index'));

    }

    /**
     * Update the visibility to movies
     */
    public function cover(Request $request, $id)
    {
        $movies = Movies::findOrFail($id);

        $movies->cover = true;

        $movies->save();

        Session::flash('visible', 'cover successfully updated!');

        return redirect(route('movies_index'));

    }

    /**
     * Update the cover to movies
     */
    public function incover(Request $request, $id)
    {
        $movies = Movies::findOrFail($id);

        $movies->cover = false;

        $movies->save();

        Session::flash('visible', 'incover successfully updated!');

        return redirect(route('movies_index'));

    }

    /**
     * method panier
     * @param $id
     */
    public function cart(Request $request ,$id)
    {
        $movies = Movies::findOrFail($id);

        $sessionTabMovies = [];

        $sessionTabMovies = $request->session()->get('key', []);

        $sessionTabMovies[$id] = $movies->title;

        $request->session()->put('key', $sessionTabMovies);

        return Redirect::route('movies_index');
    }


    public function clearSession(Request $request, $id)
    {
        $idSearch = $request->session()->get('key', []);

        unset($idSearch[$id]);
        // aprés la suppersion de l'element dans la session il faut écraser l'ancien tableau
        $request->session()->put('key', $idSearch);


        return Redirect::route('movies_index');
    }

    public function clearAllSession(Request $request)
    {

        $request->session()->get('key', []);

        $request->session()->flush();


        return Redirect::route('movies_index');
    }



}