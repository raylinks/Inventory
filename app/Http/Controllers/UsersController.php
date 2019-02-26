<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;


class UsersController extends Controller
{
    public function ind()
    {
        return view('dashboard');
    }

    public function getUsers()
    {
        return view('credentials.log');
    }

    public function getProfile()
    {
        return view('credentials.profile');
    }

    public function getReg()
    {
        return view('credentials.register');
    }

    public function getStaffs()
    {
        return view('others.staff');
    }

    public function adminReset()
    {
        return view('admin.passwords.reset');
    }


    public function adminResetEmail()
    {
        return view('admin.passwords.email');
    }

    public function postUser(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'username'=> 'required',
            'email'=> 'required'
        ]);


        if(Auth::user()->id == $request->id){
            $requestData = $request->all();
            unset($requestData['_token']);

            $user = User::where('id', $request->id)->update($requestData);
            return response()->json($user, 200);
        }
        return response()->json([], 422);



    }
}
