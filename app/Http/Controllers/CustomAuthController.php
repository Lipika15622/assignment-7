<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class CustomAuthController extends Controller
{
    public function index()
    {

        $data = array();
        
        if(Session::has('loginId'))
        {
            $data = User::where('id','=', Session::get('loginId'))->first(); 
            return view('welcome', compact('data'));
        }
       
   else{
    return view('new_user');
   }
        
    }

    public function layout()
    {
   
         return view('layout.app');
    }



    public function registration()
    {
           return view('auth.registration');
    }

    public function login(){
        return view('auth.login');
    }

    public function registerUser(Request $request)
    {
        $request ->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:12'
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $result = $user->save(); 
        if($result)
        {
              return redirect('auth/login')->with('success',"You have registered successfully");
        }
        else{
            return back()->with('fail',"Something Wrong");
        }
    }
   
    public function loginUser(Request $request)
    {
        $request ->validate([
           
            'email'=>'required|email',
            'password'=>'required|min:8|max:12'
        ]);

         $user = User::where('email','=', $request->email)->first(); 
         if($user)
         {
            if(Hash::check($request->password, $user->password))
            {
                $request->session()->put('loginId', $user->id);
                return redirect('profile');

            }else
            {
                return back()->with('fail',"Password is not matches");
            }
         }
         else{
            return back()->with('fail',"This email is not registered");
         }
    }



    public function profile()
    {
        $data = array();
        
        if(Session::has('loginId'))
        {
            $data = User::where('id','=', Session::get('loginId'))->first(); 
        }
       return view('profile', compact('data'));
    }

  
    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('auth/login');
        }
        return redirect('auth/login');

    }
}
