<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index(){

        $data = Kelas::all();
        return view('tabel.kelas',compact('data'));
    }

    public function create(Request $request){
        Kelas::create($request->all());

        return redirect()->route('kelas');
    }

    public function view($id){
        $data = Kelas::find($id);

        return view('edit.kelas',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Kelas::find($id);
        $data->update($request->all());
        return redirect()->route('kelas');
    }

    public function destroy($id){
        $data = Kelas::find($id);
        $data->delete();
        return redirect()->route('kelas');
    }
}
