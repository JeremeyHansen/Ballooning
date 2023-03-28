<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index() 
    {
        return view('questions.index', ['user' => session('user')]);
    }


    public function updateUserAge(Request $request)
    {
        $user = session('user');
        $user->age = $request->input('age');
        $user->save();
        return redirect('/user-profile');
    }

    public function updateUserHeight(Request $request){
        $user = session('user');
        $user->height = $request->input('height');
        $user->save();
        return redirect('/user-profile');
    }

    public function updateUserAddress(Request $request){
        $user = session('user');
        $user->address = $request->input('address');
        $user->save();
        return redirect('/user-profile');
    }
}