<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendaguru;

class AgendaguruController extends Controller
{
    public function index(){

        $data = Agendaguru::all();
        return view('tabel.agendaguru',compact('data'));
    }

    public function create(Request $request){
        $data = Agendaguru::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('docfoto/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('agendag');
    }

    public function view(Request $request,$id){
        $data = Agendaguru::find($id);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('docfoto/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return view('edit.agendaguru',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Agendaguru::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('docfoto/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('agendag');
    }

    public function destroy($id){
        $data = Agendaguru::find($id);
        $data->delete();
        return redirect()->route('agendag');
    }
}
