<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index(){

        $data = Admin::all();
        return view('tabel.admin',compact('data'));
    }

    public function create(Request $request){
        Admin::create($request->all());

        return redirect()->route('admin');
    }

    public function view($id){
        $data = Admin::find($id);

        return view('edit.admin',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Admin::find($id);
        $data->update($request->all());
        return redirect()->route('admin');
    }

    public function destroy($id){
        $data = Admin::find($id);
        $data->delete();
        return redirect()->route('admin');
    }
}
