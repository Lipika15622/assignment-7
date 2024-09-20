<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileEditController extends Controller
{
    
    public function editForm()
    {
       if($id = request()->session()->get('loginId')) {

        $user = User::find($id)->makeHidden('password');
      //  $seperateName = explode(" ", $user->name);
      //  $user->first_name = $seperateName[0];
      //  $user->last_name = $seperateName[1];
      $user->name = $user->first_name . ' ' . $user->last_name;
      
        return view('edit-profile',compact('user'));
       }
       else{
        return view('auth.login');
       }
        
    }

    public function edit_profile(Request $request)
    {
        $id = request()->session()->get('loginId');
        $request ->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>"required|email|unique:users,email,$id",
            'password'=>'required|min:8|max:12',
        ]);

        $post = User::find($id);
        $post->update([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'bio' => $request->bio,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('profile')
          ->with('success', 'Post updated successfully.');
        
    }
}
