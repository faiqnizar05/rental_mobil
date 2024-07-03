<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function car(){
        $data = Car::all();
        return view('user.car',compact('data'));
    }
    public function about(){
        return view('user.about');
    }

    public function sewa($id){
        $data = Car::find($id);
        return view('user.sewa',compact('data'));
    }

    public function cekharga(Request $request){
        if ($request->tanggal_selesai < $request->tanggal_mulai) {
            return back()->with(['error'=>'Tanggal Selesai Sewa Harus Lebih Besar Dari Tanggal Mulai Sewa!']);
        }
        $car = Car::find($request->car_id);
        $startDate = Carbon::parse($request->tanggal_mulai);
        $endDate = Carbon::parse($request->tanggal_selesai);

        $lamanyaMinjam = $startDate->diffInDays($endDate);
        $total = $lamanyaMinjam * $car->cost_per_day;

        $data = [
            'lamanyaMinjam'=>$lamanyaMinjam,
            'total'=>$total,
            'tanggal_mulai'=>$request->tanggal_mulai,
            'tanggal_selesai'=>$request->tanggal_selesai,
        ];
        return view('user.cek-harga',compact('car','data'));
        // dd($lamanyaMinjam);

        
    }

    public function registrasi(){
        return view('user.registrasi');
    }

    public function submit_registrasi(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
            'role'=>'peminjam',
        ]);
        return redirect('/login');
    }

    public function history_sewa(){
        $data = Loan::where('user_id',Auth::user()->id)->get();
        return view('user.history',compact('data'));
    }
}
