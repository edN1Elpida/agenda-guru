<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index(){

        $data = Agenda::all();
        return view('tabel.agenda',compact('data'));
    }

    public function create(Request $request){
        $data = Agenda::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('docfoto/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('agenda');
    }

    public function view(Request $request,$id){
        $data = Agenda::find($id);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('docfoto/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return view('edit.agenda',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Agenda::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('docfoto/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('agenda');
    }

    public function destroy($id){
        $data = Agenda::find($id);
        $data->delete();
        return redirect()->route('agenda');
    }
}
