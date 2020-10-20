<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{


    public function store (Request $request){
        $rules=$this->getRules();
        $messages=$this->getMessages();
        $validator= Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){


            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }

            \App\Models\User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
           return 'saved';

    }
    protected function getRules(){
        return $rules=[

            'name'=>'required|max:255',
            'email' => 'required|max:255|unique:users,email',
            'password' => 'required| min:8| confirmed',

        ];
    }
    protected function getMessages(){
        return $messages=[

            'name.required'=>'enter your name',
            'email.required'=>'enter your email',
            'email.unique' => 'this email has been taken',
            'password.required' => 'enter password',
            'password.min' => 'the password must be at least 8 character',
            'password.confirmed' => 'the password not match'
        ];
    }
    public function check(Request $request)
    {
        $email=$request->input('email');
        $password=$request->input('password');
        $checklogin= DB::table('users')->where(['email'=>$email,'password'=>$password])->get();
if(count($checklogin)>0){

    return view('layout/logout');
}
else{
    echo "login failed";
}
    }
}
