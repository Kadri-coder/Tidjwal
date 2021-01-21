<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
class MonloginController extends Controller
{
public function index(){

	return view('log');
}
   
  public function inscription(Request $request){

$this->Validate($request,[

'email'=> 'required',
'password'=>'required'

]);
  	
  $utilisateurs  = array(

	
	'email'=>$request->get('email'),
	'password'=>$request->get('password')
);

  if(Auth::attempt($utilisateurs)){

  	echo "connexion reussit";
  }

  else {

echo "conexion erroner";
  }

}
}