<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Type;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $type = Type::all();
        $data = Car::all();
        return view('admin.car',compact('data','type'));
    }

    public function submit(Request $request){
        $photo = $request->file('photo');
        $photo->storeAs('public/image', $photo->hashName());
        Car::create([
            'name'=>$request->name,
            'photo'=>$photo->hashName(),
            'type_id'=>$request->type_id,
            'cost_per_day'=>$request->cost_per_day,
            'year'=>$request->year,
            'license_plate'=>$request->license_plate,
        ]);
        return redirect('/admin/car')->with(['success'=>'Data Berhasil Ditambah.']);
    }
    public function edit($id){
        $type = Type::all();
        $data = Car::find($id);
        return view('admin.edit-car',compact('data','type'));
    }

    public function update(Request $request, $id){
        $car = Car::find($id);
        $data = [
            'name'=>$request->name,
            'type_id'=>$request->type_id,
            'cost_per_day'=>$request->cost_per_day,
            'year'=>$request->year,
            'license_plate'=>$request->license_plate,
        ];
        
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $data['photo'] = $photo->hashName();
            $photo->storeAs('public/image', $data['photo']);
        }
        $car->update($data);
        return redirect('/admin/car')->with(['success'=>'Data Berhasil Diupdate.']);
    }

    public function delete($id){
        $data = Car::find($id);
        $data->delete();
        return redirect('/admin/car')->with(['success'=>'Data Berhasil Dihapus.']);
    }


}