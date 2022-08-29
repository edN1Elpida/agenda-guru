<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index(){

        $data = Guru::all();
        return view('tabel.guru',compact('data'));
    }

    public function create(Request $request){
        Guru::create($request->all());

        return redirect()->route('guru');
    }

    public function view($id){
        $data = Guru::find($id);

        return view('edit.guru',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Guru::find($id);
        $data->update($request->all());
        return redirect()->route('guru');
    }

    public function destroy($id){
        $data = Guru::find($id);
        $data->delete();
        return redirect()->route('guru');
    }
}
