<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function showLogin(){
        return response()->view('cms.auth.login' );
    }

    public function showLoginUser(){
        return response()->view('website.login' );
    }

    public function login(Request $request){

        $validator = Validator($request->all() ,[
            'username' => 'required|string' ,
            'password' => 'required|string',
        ] , [
            'username.exsit' => 'اسم المستخدم غير موجود'
        ]);

        $credintials =[
            'username' => $request->get('username'),
            'password' => $request->get('password'),
        ] ;
        if(! $validator->fails()){
            if(Auth::guard('admin')->attempt($credintials ,  $request->get('remember_me'))){

                 $request->session()->regenerate();

                return redirect()->intended('/cms/admin');
                // return response()->json(['icon' => 'success' , 'title' =>'تمت عملية تسجيل الدخول' ] , 200);
            }
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ]);
            // else {
            //     return response()->json(['icon' => 'error' , 'title' =>'فشلت عملية تسجيل الدخول' ] , 400);

            // }
        }
        else{
            return response()->json(['icon' => 'error' , 'title' =>$validator->getMessageBag()->first() ] , 400);
        }

    }

    public function loginUser(Request $request){

        $validator = Validator($request->all() ,[
            'email' => 'required' ,
            'password' => 'required|string',
        ] , [
            // 'username.exsit' => 'اسم المستخدم غير موجود'
        ]);

        $credintials =[
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ] ;
        if(! $validator->fails()){
            if(Auth::guard('user')->attempt($credintials)){
                $request->session()->regenerate();

                return redirect()->intended('/front/user');

                // return response()->json(['icon' => 'success' , 'title' =>'Succefully' ] , 200);
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
            // else {
            //     return response()->json(['icon' => 'error' , 'title' =>'فشلت عملية تسجيل الدخول' ] , 400);

            // }
        }
        else{
            return response()->json(['icon' => 'error' , 'title' =>$validator->getMessageBag()->first() ] , 400);
        }

    }


    public function logout(Request $request){
        // $guard = auth('user')->check() ? 'admin' : 'author';
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('view.login');
        // return redirect()->route('/button_users');


    }

    public function editProfile(){

    }

    public function UpdateProfile(){

    }

    public function editPassword(){


    }

    public function changePassword(){

    }
}
