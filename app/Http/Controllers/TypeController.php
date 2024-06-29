<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        $data = Type::all();
        return view('admin.type',compact('data'));
    }
    public function submit(Request $request){
        Type::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return redirect('/admin/type')->with(['success'=>'Data Berhasil Ditambah.']);
    }

    public function edit($id){
        $data = Type::find($id);
        return view('admin.edit-type',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Type::find($id);
        $data->update([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return redirect('/admin/type')->with(['success'=>'Data Berhasil Diupdate.']);
    }

    public function delete($id){
        $data = Type::find($id);
        $data->delete();
        return redirect('/admin/type')->with(['success'=>'Data Berhasil DiHapus.']);
    }
}
