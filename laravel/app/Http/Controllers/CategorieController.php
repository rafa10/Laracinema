<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CategorieController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lister()
    {
        $categories = Categorie::all();
        /*dump($categories);*/
        return view(" categorie/lister ", array(
            'categories' => $categories
        ));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function display($id)
    {
        $categories = Categorie::find($id);
        /*dump($categories);*/
        return view(" categorie/display ", array(
            'categories' => $categories
        ));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View*
     */
    public function create()
    {
        return view(" categorie/create ");
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        return view(" categorie/edit ", array(
            'id' => $id
        ));
    }
}