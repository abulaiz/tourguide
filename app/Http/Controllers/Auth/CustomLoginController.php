<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Tourist;
use Validator;

class CustomLoginController extends Controller
{
    public function custom_signup(Request $req){ 
        $rule = ['email'=>'required|unique:users,email'];
        $v = Validator::make($req->all(), $rule);

        if($v->passes()){
	        $user = new User();
	        $user->name = $req->name;
	        $user->email = $req->email;
	        $user->password = bcrypt( $req->password );
	        $user->save();
	        $user->assignRole('tourist');

	        Tourist::create([
	            'user_id' => $user->id ,'country' =>  $req->country, 'phone' => $req->phone
	        ]);      

	        return redirect('/')->with(['_e'=>'success']);     	
        } else {
        	return redirect()->back()->with(['_f' => $v->messages()]);
        }       
    }

    public function custom_propose(Request $req){
    	return redirect('/')->with(['_e2'=>'success']);
    }
}
