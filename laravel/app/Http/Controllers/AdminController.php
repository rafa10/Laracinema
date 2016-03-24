<?php

namespace App\Http\Controllers;

use App\Administrators;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Mockery\Generator\StringManipulation\Pass\Pass;

class AdminController extends Controller

{
    protected function profile()
    {
        $admin = Auth::user();

        return view('administrator/profile', compact('admin'));
    }

    protected function settings()
    {
        $admin = Auth::user();

        return view('administrator/settings', compact('admin'));
    }

    protected function update(Requests\AdminRequest $request)
    {
        $admin = Auth::user();

        $admin->update($request->only('lastname', 'firstname', 'description', 'email'));


        //  upload image
        if(!empty(Input::file('photo'))){

            $filename = basename($admin->photo);

            $filename = public_path().'/uploads/administrators/'.$filename;

            File::delete($filename);

            $photo = Input::file('photo');

            if(Input::hasFile('photo')){

                $fileName = $photo->getClientOriginalName();

                $extension = $photo->getClientOriginalExtension();

                $fileName = rand(11111,99999).'.'.$extension;


                $destinationPath = public_path().'/uploads/administrators';

                $photo->move($destinationPath, $fileName);

            }

            $admin->photo = asset('/uploads/administrators/'.$fileName);
            $admin->save();
        }


        Session::flash('update', 'Admin successfully updated!');

        return redirect(route('dashboard'));
    }


    protected function changePassword()
    {
        $admin = Auth::user();

        return view('administrator/change_password', compact('admin'));
    }


    protected function updatePassword(Requests\PasswordRequest $request)
    {
        $admin = Auth::user();

        if($request->has('password')) {

            $admin->password = bcrypt($request->password);
        }

        $admin->save();

        Session::flash('update', 'Admin password successfully updated!');

        return redirect(route('dashboard'));
    }
}
