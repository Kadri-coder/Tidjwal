<?php

namespace App\Http\Controllers;
use App\Persistence;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){

     return view('monlogin');
    }

    public function store(Request $request){

    $validation =$request->validate([
       
       'nom'=>'required|min:4|max:10',
       'prenom'=>'required|min:4|max:10',
       'cni'=>'required',
       'email'=>'required',
       'password'=>'required'

        ]);

    $user = new  Persistence();
    $user->nom = $request->input('nom');
    $user->prenom = $request->input('prenom');
    $user->identite =$request->input('cni');
    $user->email = $request->input('email');
    $user->password =$request->input('password');

         
    $user->save();

    return redirect('home');   //CIC

    }
}
