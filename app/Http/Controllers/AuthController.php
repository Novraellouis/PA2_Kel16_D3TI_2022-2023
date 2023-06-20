<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->hasRole('admin')) {
                return redirect()->route('dashboard.index')->withSuccess('Anda berhasil login');
            } else {
                return redirect()->intended('/')->withSuccess('Anda berhasil login');
            }
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function register()
    {
        return view('pages.web.auth.register');
    }

    public function customRegistration(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'username' => 'required',
            'nomorhp' => 'required|size:12',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);
        $user->assignRole('customer');
        $user->save();

        $notif = new Notification();
        $notif->user_id = $user->id;
        $notif->nama_pemesan = $user->username;
        $notif->notif = 'Melakukan pendaftaran';
        // dd($notif);
        $notif->save();

        return redirect("login")->with('success', 'Anda telah berhasil registrasi');
    }

    public function signOut()
    {
        Auth::logout();

        return redirect('login')->with('success', 'Berhasil keluar');
    }
}
