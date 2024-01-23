<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth,Hash;

class AuthController extends Controller
{
    protected $viewPath = 'admin';
    public function index(Request $request){
        return view($this->viewPath.'.index');
    }
    public function login(Request $request){
        if($request->ajax()){
            try {
                $validator = Validator::make($request->all(), [
                        'email' => 'required|email',
                        'password' => 'required',
                    ],
                    [
                        'email.required'=>'The email is required.',
                        'password.required'=>'The password is required.',
                    ]
                );
                if ($validator->fails()) {
                    return response()->json(['success'=>false,
                        'errors' => $validator->errors()
                    ]);
                }
                $credentials = ['email'=>$request->email,'password'=>$request->password];
                #$remember_me = $request->has('remember_me') ? true : false;
                if (Auth::attempt($credentials)) {
                    return response()->json(['success'=>true,'msg'=>'Login successfully','url'=>route('admin')]);
                }
                return response()->json(['success'=>false,'msg'=>'Invalid credentials email or password.']);
            } catch (\Exception $e) {
                return response()->json(['success'=>false,'msg'=>$e->getMessage()],500);
            }
        }
        return view($this->viewPath.'.auth.login');
    }
    public function logout(){
        Auth::logout();
        return view($this->viewPath.'.auth.login');
    }
}
