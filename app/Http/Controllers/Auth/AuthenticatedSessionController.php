<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        try {
            //code...
            if ($request->email == 'admin@gmail.com') {
                return back()->with(['error'=>'silahkan login admin di /admin/login']);
            }
            $request->authenticate();
            
            $request->session()->regenerate();
            
        } catch (\Throwable $th) {
            return back()->with(['error'=>'Email dan Password anda salah.']);
            //throw $th;
        }
        return redirect('/')->with(['login'=>'Anda berhasil login.']);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
