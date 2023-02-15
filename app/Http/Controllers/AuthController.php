<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
      return view('login');
    }

    public function auth(Request $request)
    {

        $credentials = $request ->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        //Untuk mengecek si user udah login 
        if (Auth::attempt($credentials)){
            //Untuk mengecek status user active atau inactive
            if(Auth::user()->status != 'active')
            {
                Auth::logout();
                $request->session()->invalidate();
                 $request->session()->regenerateToken();
                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not an active account, please contact the admin first');
                return redirect('login');
            }

            $request->session()->regenerate();

            //cek afekah ini admin
            if(Auth::user()->roles_id == 1)
            {
                return redirect('dashboard');
            }

           //cek afekah ini clien
           if(Auth::user()->roles_id == 2)
           {
               return redirect('profile');
           }
        }

        //kalo gagal login
        
        Session::flash('status', 'failed');
        Session::flash('message', 'INVALID LOGIN');
        return redirect('login');
    }

    public function logout(Request $request)
     {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('login');
    }

    public function register(){
        return view('register');
    }

    public function regis(Request $request)
    {
        //validate data masuk atau tidak
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:5',
            'phone' => 'required|max:13',
            'address'   => 'required|max:255',
        ]);

        $request['password'] = Hash::make($request->newPassword);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'REGISTER SUCCESS! WAIT ADMIN TO APPOROVE');
        return redirect('login');
    }
}