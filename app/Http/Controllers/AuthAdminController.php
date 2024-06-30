<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;

class AuthAdminController extends Controller
{
    public function register(){
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role'=>'admin',
        ]);
        return redirect('admin/login')->with(['success'=>'Role Admin Berhasil Dibuat']);
    }
    
    public function login(){
        return view('admin.login');
    }
    public function submit_login(LoginRequest $request): RedirectResponse
    {
        $user = User::where('email',$request->email)->first();
        if ($user != null && $user->role == 'admin') {
                # code...
                $request->authenticate();
                $request->session()->regenerate();
                    return redirect('/admin/type');
            # code...
        }
        return back()->with(['error'=>'Role Peminjam Tidak Di Izinkan!']);
    }

}
