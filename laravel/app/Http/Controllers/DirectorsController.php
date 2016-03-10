<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Directors;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DirectorsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lister()
    {
        $directors = Directors::all();
        /*dump($categories);*/
        return view(" directors/lister ", array(
            'directors' => $directors
        ));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function display($id)
    {
        $directors = Directors::find($id);
        /*dump($directors);*/
        return view(" directors/display ", array(
            'directors' => $directors
        ));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view(" directors/create ");
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        return view(" directors/edit ", array(
            'id' => $id
        ));
    }
}