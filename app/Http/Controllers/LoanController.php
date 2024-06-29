<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index(Request $request){
        $data = Loan::all();
        return view('admin.loan',compact('data'));
    }
}
