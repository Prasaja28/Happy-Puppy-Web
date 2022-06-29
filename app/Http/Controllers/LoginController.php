<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;
class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|min:8|max:50',
            'password' => 'required|string|min:8'
        ]);
        $email = $request->email;
        $user = User::where('email',$email)->where('status',1)->first();
		if($user){
			if(Hash::check($request->password, $user->password)){
                    Session::put('username', $user->name);
                    Session::put('user_id', $user->id);
                    Session::put('status_user', $user->roles_id);
                    Session::put('email', $user->email);
                    Session::put('/login',TRUE);
                    return redirect('/dashboard');
			}
			
		}
		
		return redirect('/login')->with('error','Email atau Password salah'); 
    }
    public function logout()
    {
		if (!Session::get('/login')){
			return redirect('/login');
		}else{
			Session::flush();
			return redirect('/login');
		}
    }
}
