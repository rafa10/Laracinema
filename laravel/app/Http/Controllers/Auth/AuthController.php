<?php

namespace App\Http\Controllers\Auth;

use App\Administrators;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:administrators',// test if the administrator is unique
            'description' => 'required|min:15',
            'password' => 'required|confirmed|min:6',
        ],[
            'lastname.required' => 'votre nom est requis',
            'lastname.max' => 'votre prennom est trop long',
            'firstname.required' => 'votre prénom est requis',
            'firstname.max' => 'votre prénom est trop long',
            'description.required' => 'votre description est requis',
            'description.min' => 'votre description est court',
            'email.required' => 'votre email est requis',
            'email.unique' => 'votre email est déja existe',
            'password.required' => 'votre mdp est requis',
            'password.min' => 'Votre mdp est trop court',
            'password.confirmed' => 'votre mdp doit etre identique',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $photo = Input::file('photo');

        if(Input::hasFile('photo')){

//          Récupere le non d'origine de fichier
            $fileName = $photo->getClientOriginalName();

//          récupere l'extension de l'image ex: (png|jpg|jpeg)
            $extension = $photo->getClientOriginalExtension();

//          renameing image
            $fileName = rand(11111,99999).'.'.$extension;

//          Indique ou stocke le fichier
            $destinationPath = public_path().'/uploads/administrators';

//          Déplacer le fichier
            $photo->move($destinationPath, $fileName);

        }


        return Administrators::create([
            'lastname' => $data['lastname'],
            'firstname' => $data['firstname'],
            'photo'=> asset('/uploads/administrators/'.$fileName),
            'description' => $data['description'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }





}
