<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.web.auth.login');
    }

    public function customLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $user = User::where('email', $request->email)->first();
        // dd($user);
        if ($user) {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                if ($user->hasRole('admin')) {
                    return redirect()->route('dashboard.index')->withSuccess('Anda berhasil Login');
                } else {
                    return redirect()->intended('/')->withSuccess('Anda berhasil Login');
                }
            }
            return back()->with('error', 'Password anda salah!');
        }
        return back()->with('error', 'Email anda salah!');


        // $user1 = User::where('email','!=',$request->email)->first();
        // if($user){
        //     if (Hash::check($request->password, $user->password, [])) {
        //         $request->session()->regenerate();
        //         return redirect()->intended('/');
        //     }else{
        //
        //     }
        // }else if($user1){
        //     if (Hash::check($request->password, $user1->password, [])) {
        //
        //     }else{
        //         return back()->with('error', ' anda salah!');
        //     }
        // }


        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        //     $request->session()->regenerate();
        //     if(Auth::user()->hasRole('admin')){
        //     return redirect()->intended('/admin/home')->withSuccess('Signed in');
        //     }
        //     return redirect()->intended('/')->withSuccess('Signed in');
        // }


        // return redirect("login")->with('success','Anda Berhasil Login');
    }

    public function register()
    {
        return view('pages.web.auth.register');
    }

    public function customRegistration(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'username' => 'required',
            'nomorhp' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $valid['password'] = Hash::make($valid['password']);
        $user = User::create($valid);
        $user->assignRole('customer');

        return redirect("login")->with('success', 'Anda telah berhasil Registrasi');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'alamat' => $data['alamat'],
            'username' => $data['username'],
            'nomorhp' => $data['nomorhp'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Auth::logout();

        return Redirect('login')->with('success', 'berhasil keluar');
    }
}
