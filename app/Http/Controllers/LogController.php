<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LogController extends Controller
{
    //
    public function store(LoginRequest $request){
        
        if(Auth::attempt(['email'=>$request->user,'password'=>$request->password])){
            return response()->json(['mensaje'=>'success']);
        }

        if(Auth::attempt(['user'=>$request->user,'password'=>$request->password])){
            return response()->json(['mensaje'=>'success']);
        }
        return response()->json(['mensaje' => 'not success']);
        
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }

    


}
