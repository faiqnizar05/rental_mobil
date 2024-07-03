<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    public function index(Request $request){
        $data = Loan::all();
        return view('admin.loan',compact('data'));
    }

    public function submit_sewa(Request $request){
        Loan::create([
            'car_id'=>$request->car_id,
            'user_id'=>Auth::user()->id,
            'loan_date'=>$request->tanggal_mulai,
            'return_date'=>$request->tanggal_selesai,
            'total_cost'=>$request->total,
            'status'=> 'Menunggu Pembayaran'
        ]);

        return redirect('/')->with(['success'=>'Mobil Berhasil DiSewa.']);
    }

    public function terima($id){
        $loan = Loan::find($id);
        $loan->update([
            'status'=>'Success'
        ]);

        return redirect('/admin/sewa')->with(['success'=>'Sewa Diterima.']);
    }
}
